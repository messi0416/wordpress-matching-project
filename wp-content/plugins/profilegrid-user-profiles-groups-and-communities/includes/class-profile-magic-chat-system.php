<?php
class ProfileMagic_Chat 
{
    public function pm_messenger_notification_extra_data() {
        $dbhandler = new PM_DBhandler;
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $uid = $current_user->ID;
        $threads = $pmrequests->pm_get_user_all_threads($uid);
//        if(!empty($threads))
//        {
//            $threads = $pmrequests->pm_filter_deleted_threads($threads);
//        }
        $extra_notification_data = array();
        $thread_count = 0;
        $i=0;
        if (!empty($threads)) {
            foreach ($threads as $thread) {
                $thread_status = $thread->status;
                if ($thread_status == 2) {
                    $unread_message_count = $pmrequests->get_unread_msg_count($thread->t_id);
                    if($i==0)
                    {
                        if($thread->r_id==$uid)
                        {
                            $rid = $thread->s_id;
                        }
                        else
                        {
                            $rid =$thread->r_id;
                        }
                        $extra_notification_data['last_thread'] = $thread->t_id;
                        $extra_notification_data['rid'] = $rid;
                        $extra_notification_data['last_thread_count'] = $unread_message_count;
                    }
                    $i++;
                    if($unread_message_count)
                    {
                        $thread_count = $thread_count + $unread_message_count;
                    }
                }
            }
        }
        $extra_notification_data['unread_threads'] = $thread_count;
        return json_encode($extra_notification_data);
       
    }
    
    public function pm_messenger_show_threads($tid='') 
    {
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $uid = $current_user->ID;
        $threads = $pmrequests->pm_get_user_all_threads($uid);
        $unread_thread_count = 0;
        $return = "";
        $active_tid = '';
        $count = 1;
        if (!empty($threads)) {
            //print_r($threads);die;
            foreach ($threads as $thread) {
                $active_class="";
                $active = "false";
                if ($uid == $thread->s_id) {
                    $other_uid = $thread->r_id;
                } else {
                    $other_uid = $thread->s_id;
                }
                
                if(get_user_by('ID',$other_uid)==false)
                {
                    continue;
                }
                
                $tid = $thread->t_id;
                $profile_url = $pmrequests->pm_get_user_profile_url($other_uid);
                $other_user_info['profile_url'] = $profile_url;
                $other_user_info['avatar'] = get_avatar($other_uid, 50, '', false, array('class' => 'pm-user-profile','force_display'=>true));
                $other_user_info['name'] = $pmrequests->pm_get_display_name($other_uid,true);
                $thread_timestamp = human_time_diff(strtotime($thread->timestamp), current_time('timestamp',true));
                
                $thread_timestamp = $thread_timestamp.__(' ago','profilegrid-user-profiles-groups-and-communities');
                $thread_status = $thread->status;
                if ($thread_status == 2) {
                    $unread_thread_count++;
                    $unread_message_count = $pmrequests->get_unread_msg_count($tid);
                    $unread_visual = "<b audio=\"on\">$unread_message_count</b>";
                } else {
                    $unread_visual = "";
                }
                if ($active_tid != '') {
                    if ($tid == $active_tid) {
                        $active = "true";
                        $active_class="pm-thread-active";
                    } else {
                        $active_class="";
                        $active = "false";
                    }
                } else {
                    if ($count == 1) {
                        $active = "true";
                        $count++;
                    } else {
                        $active = "false";
                    }
                }
                $login_status = ($pmrequests->pm_get_user_online_status($other_uid)==1 ?'pm-online':'pm-offline');
                
                $return .= "<li $active_tid active=\"$active\" id=\"t_id_$tid\" "
                        . "uid=\"$other_uid\" "
                        . "t_status=\"$thread_status\"  "
                        . "class=\"pm-dbfl pm-border-bt pm-pad10 $active_class\"  "
                        . " >"
                        . "<div onClick=\"show_message_pane($tid,$other_uid)\" class=\"pm-msg-conversation-listitem\"><div class=\"pm-conversations-container\">"
                        . "<div class=\"pm-conversation-box-user pm-difl\"> "
                        . $other_user_info['avatar']
                        . "</div>"
                        ."<div class=\"pm-msg-user pm-difl\">"
                        . "<div class=\"pm-thread-user pm-difl\">"
                        . $other_user_info['name']
                        ."</div>"
                        . "<div class=\"pm-conversation-time\">"
                        . $thread_timestamp
                        ."</div>"
                        . "</div>"
                            
                            
                        . "<div class=\"pm-user-status $login_status pm-difl\"></div>"
                        . "<div id=\"unread_msg_count\" class=\"pm-user-conversations-counter pm-difl\">$unread_visual</div>"
                        
                        . "</div>"
                        . "</div>"
                        . "<div class=\"messagedelete_thread \"><a onClick=\"pm_messenger_delete_thread(this,$tid)\">".'<svg width="100%" height="100%" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill: #e21f1f;"><path d="M24,4c-11.05,0 -20,8.95 -20,20c0,11.05 8.95,20 20,20c11.05,0 20,-8.95 20,-20c0,-11.05 -8.95,-20 -20,-20Zm10,22l-20,0l0,-4l20,0l0,4Z" /></svg>'."</a></div>"
                        . "</li>";           
            }
        } 
        else 
        {
            $return = __("You have no conversations yet.","profilegrid-user-profiles-groups-and-communities");
        }
        if(!isset($return) || trim($return)=='')
        {
             $return = __("You have no conversations yet.","profilegrid-user-profiles-groups-and-communities");
        }
        return $return;
    
    }
    
    public function pm_messenger_show_messages($tid,$loadnum,$timezone=0) {
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $cur_uid = $current_user->ID;
        //$t_status = isset($t_status) ? $t_status : 0;
        $loadnum = isset($loadnum) ? absint($loadnum) : 1;
        $limit = 10; // number of rows in page
        $time_conversion = isset($timezone)?$timezone*60:0;
        $offset = ( $loadnum - 1 ) * $limit;
        $descending = true;
        $messages = $pmrequests->get_message_of_thread($tid, $limit, $offset, $descending);
        
        $return = "";
        if (!empty($messages)) {
            $messages = array_reverse($messages);
            if (sizeof($messages) == $limit) {
                $return .= "<button id=\"load_more_message\" pagenum=\"$loadnum\" >".__("Load More","profilegrid-user-profiles-groups-and-communities")."</button>";
            }
            foreach ($messages as $message)
            {
                
                    $uid = $message->s_id;
                    $read_status = "";
                    if ($uid == $cur_uid) {
                        $align = "pm_msg_rf";
                        if ($message->status == 1) {
                            $read_status = "read";
                        } else {
                            $read_status = "unread";
                        }
                    } 
                    else 
                    {
                        $align = "pm_msg_lf";
                    }
                    $last_message = nl2br($message->content);
                    $profile_url = $pmrequests->pm_get_user_profile_url($uid);
                    
                    /* 日付の表示をY年m月d日H時i分にカスタマイズ 2021/5/30 */
                    /*$date = mysql2date('d M,g:i A',date('Y-m-d H:i:s',(strtotime($message->timestamp)) - $time_conversion));*/
                    $date = mysql2date('Y年m月d日H時i分',date('Y-m-d H:i:s',(strtotime($message->timestamp)) - $time_conversion));
                    
                    $msg_timestamp = human_time_diff(strtotime($message->timestamp), current_time('timestamp'));
                    if($msg_timestamp=='1 min')
                    $msg_timestamp=__('just now','profilegrid-user-profiles-groups-and-communities');
                    $other_user_info['avatar'] = get_avatar($uid, 50, '', false, array('class' => 'pm-user-profile','force_display'=>true));
                    $return .= "<div id=\"$message->m_id\" class=\"$align\" > " .
                            '<a href="'.$profile_url.'">'.$other_user_info['avatar'].'</a>'
                            . "<div class=\"pm-user-description-row pm-dbfl pm-border\">" . stripslashes($last_message) . "</div><div class=\"pm-message-thread-time\">$date</div></div>";
                
                
            }
        }
        return $return;
        
    }
    
    public function pg_show_message_tab_html($receiver_uid)
    {
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $return = $this->pm_messenger_show_threads('');
        ?>
        <div class="pm-group-view">
                <div class="pm-section pm-dbfl" > 
                    <svg onclick="show_pg_section_left_panel()" class="pg-left-panel-icon" fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
            <path d="M0-.5h24v24H0z" fill="none"/>
        </svg>
                    <div class="pm-section-left-panel pm-section-nav-vertical pm-difl " id="thread_pane">

                        <div id="search">
<!--                                <label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
                                	-->
                                        <input autocomplete="off" type="text" id="receipent_field"  value="<?php if(isset($receiver_user)) echo "@".$receiver_user['name']; ?>" placeholder="@Username" style="min-width: 100%;" onkeyup="pm_get_rid_by_uname(this.value)"/>
                                
                                <div id="pm-autocomplete"></div>
                                <div id="pm-username-error" class="pm-dbfl"></div>
                        </div>
                        <ul class="dbfl" id="threads_ul">
                            <?php echo $return; ?>
                        </ul>
                    </div>

                    <div class="pm-section-right-panel" id="pg-chat">
                       <?php $this->pg_show_thread_message_panel($receiver_uid); ?>
                       
                    </div>

                </div>
        </div>
<?php
// add by Cravel start
/**
 * ブログからのアクセス時にユーザーを自動的に選択する
 * 
 * @since  1.0.1
 * @author Cravel <cravel@cravelweb.com>
 */
$messageto = get_query_var('messageto');
//echo '<div>debug:'.$messageto.'</div>';
if (!empty($messageto)) {
?>
<script>
//event.preventDefault();
jQuery("#receipent_field_rid").val('<?=$messageto ?>');
pg_activate_new_thread("<?= $messageto ?>");
activate_thread_with_uid("<?= $messageto ?>",0);
</script>
<?php
}
// add by Cravel end
?>
<script>
jQuery("#message_display_area").scrollTop( jQuery("#message_display_area div:last").offset().top);
</script>
        <?php
    }
    
    public function pg_show_thread_message_panel($rid)
    {
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $uid = $current_user->ID;
        
        if($rid=='')
        {
            $threads = $pmrequests->pm_get_user_all_threads($uid,1);
            if(!empty($threads))
            {
                if($uid==$threads[0]->r_id)
                {
                    $rid = $threads[0]->s_id;
                }
                else 
                {
                    $rid = $threads[0]->r_id;
                }

                $tid = $threads[0]->t_id;
            }
        }
        if(!isset($tid))
        {
            $tid = $pmrequests->get_thread_id($rid,$uid);
        }
        $profile_url = $pmrequests->pm_get_user_profile_url($rid);
        $r_avatar = get_avatar($rid, 50, '', false, array('class' => 'pm-user-profile','force_display'=>true));
        $r_name = $pmrequests->pm_get_display_name($rid,false);
        $return = $this->pm_messenger_show_messages($tid,1);
        ?>
        

            
 <div class="pm-blog-desc-wrap pm-difl pm-section-content pm-message-thread-section">
                <div id="pm-msg-overlay" class="pm-msg-overlay  <?php  if(($return=="You have no conversations yet.")&& !isset($receiver_user)) echo "pm-overlay-show1" ?>"> </div>
                <form id="chat_message_form" onsubmit="pm_messenger_send_chat_message(event);">  
                <input type="hidden" id="receipent_field_rid" name="rid" value="<?php if(isset($rid)) echo $rid; ?>"  />   
                <div class="contact-profile" id="userSection">	
                <?php

                    echo '<div class="pm-conversation-box-user pm-difl"><a href="'.$profile_url.'">'.$r_avatar.'</a></div>';
                    echo '<p>'.$r_name.'</p>';
                ?>						
                </div>
                
                
                <div id="message_display_area" class="pm-difl pm_full_width_profile"  style="min-height:200px;max-height:200px;max-width: 550px;overflow-y:auto;">
                    <?php echo $return;?>
                <?php   $path =  plugins_url( '../public/partials/images/typing_image.gif', __FILE__ );?>
               
                </div>
                    
                <div id="typing_on"  class="pm-user-description-row pm-dbfl pm-border"><div class="pm-typing-inner"><img height="9px" width="40px" src="<?php echo $path; ?>"/></div></div>
             
                <div class="pm-dbfl pm-chat-messenger-box">
                      <input type="hidden" name="action" value='pm_messenger_send_new_message' /> 
                    <input type="hidden" id="thread_hidden_field" name="tid" value=""/>
                    <div class="emoji-container">
                        <div class="pm-messenger-user-profile-pic"><?php $avatar =get_avatar($current_user->ID, 50, '', false, array('class' => 'pm-user-profile','force_display'=>true));
                            echo $avatar;
                        ?></div>
                    <textarea id="messenger_textarea" data-emojiable="true"  name="content" style="min-width: 100%;height:100px;"
                        
                               form="chat_message_form" placeholder="<?php _e("Type your message..","profilegrid-user-profiles-groups-and-communities");?>" ></textarea> 
                    <input type="hidden" disabled  maxlength="4" size="4" value="1000" id="counter">
                    <input type="hidden" name="sid" value="" />   
                    <div class="pm-messenger-button">
                        <label>
                          <input id="send_msg_btn" type="submit" name="send" value="<?php _e("send","profilegrid-user-profiles-groups-and-communities");?>"/>
                    <svg width="100%" height="100%" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill:#ccc">
    <g transform="matrix(1.05995e-15,17.3103,-17.3103,1.05995e-15,22248.8,-22939.9)">
        <path d="M1340,1256C1340,1256 1350.4,1279.2 1352.6,1284.1C1352.68,1284.28 1352.65,1284.49 1352.53,1284.65C1352.41,1284.81 1352.22,1284.89 1352.02,1284.86C1349.73,1284.54 1344.07,1283.75 1342.5,1283.53C1342.26,1283.5 1342.07,1283.3 1342.04,1283.06C1341.71,1280.61 1340,1268 1340,1268C1340,1268 1338.33,1280.61 1338.01,1283.06C1337.98,1283.31 1337.79,1283.5 1337.54,1283.53C1335.97,1283.75 1330.28,1284.54 1327.98,1284.86C1327.78,1284.89 1327.58,1284.81 1327.46,1284.65C1327.35,1284.49 1327.32,1284.28 1327.4,1284.1C1329.6,1279.2 1340,1256 1340,1256Z"/>
    </g>
    </svg>
                        </label>      
                    </div>
                </div>
                    </div>
            </form>
                
               

        </div>

        <?php
    }
    
    public function pm_messenger_send_new_message($rid,$content) {
        $dbhandler = new PM_DBhandler;
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $sid = $current_user->ID;
            
            $is_msg_sent = $pmrequests->pm_create_message($sid, $rid, $content);
            //$tid=$pmrequests->get_thread_id($sid, $rid);
            //$message = $pmrequests->get_message_of_thread($tid,1);
            //$message_id=$message[0]->m_id;
            //return 'rid'.$rid.' $sid'.$sid.' tid'. $tid;
            
            if ($is_msg_sent) {
//                $last_message = nl2br(wp_kses_post($content));
//                $align = "pm_msg_rf";
//                $user_info['avatar'] = get_avatar($sid, 50, '', false, array('class' => 'pm-user-profile','force_display'=>true));
//                $return .= "<div id=\"$message_id\" class=\"$align  pm-sending-msg\" > " .
//                        $user_info['avatar']
//                       . "<div class=\"pm-user-description-row pm-dbfl pm-border\">" . stripslashes($last_message) . "</div>".__("Sending","profilegrid-user-profiles-groups-and-communities")."</div>";
//                
            } else {
                $return =  __("not sent","profilegrid-user-profiles-groups-and-communities");
            }
      return $is_msg_sent;
       
    }
    
    public function pm_messenger_delete_threads($tid) {
        $dbhandler = new PM_DBhandler;
        $pmrequests = new PM_request;
        $current_user = wp_get_current_user();
        $uid = $current_user->ID;
        $pmrequests->update_message_status_to_read($tid);
        $delete_thread = $pmrequests->delete_thread($tid);
        if ($delete_thread > 0) {
            return "true";
        } else {
            return "false";
        }
      
    }
    
}
