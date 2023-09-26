<?php
$pmrequests = new PM_request;
$options = maybe_unserialize($row->group_options);
$row = $dbhandler->get_row('GROUPS',$gid);
$leaders = array();
if($row->is_group_leader!=0)
{
    $leaders = $pmrequests->pg_get_group_leaders($gid);
}
if($leaders =='')
{
    $leaders = array();
}
if(!empty($options) && isset($options['is_hide_group_card']) && $options['is_hide_group_card']==1)
{
    $show_group_card =0;
}else 
{ $show_group_card =1;}
if($dbhandler->get_global_option_value('pm_show_group_card','1')=='1')
{
    $show_group_card =1;
}
else
{
    $show_group_card =0;
}
if($dbhandler->get_global_option_value('pm_enable_private_profile')=='1')
{
    if($dbhandler->get_global_option_value('pm_show_user_profile_on_group_page')=='1')
    {
        $show_members = 1;
        $hide_profile_link = 1;
    }
    else
    {
        $show_members = 0;
        $hide_profile_link = 1;
    }
}
else
{
    $show_members = 1;
    $hide_profile_link = '';
}
if($dbhandler->get_global_option_value('pm_show_group_members_tab','1')=='1')
{
     $show_members = 1;
}
else
{
     $show_members = 0;
}


?>
<div class="pmagic">
    <?php if($show_group_card==1):?>
       <div class="pm-group-card-box pm-dbfl pm-border-bt">
         <div class="pm-group-card pm-dbfl pm-border pm-bg pm-radius5">
            <div class="pm-group-title pm-dbfl pm-bg-lt pm-pad10 pm-border-bt">
            <i class="fa fa-users" aria-hidden="true"></i>
			<?php echo $row->group_name;?>
            <?php 
			
			if(is_user_logged_in() && in_array($current_user->ID,$leaders)):
			$edit_group = $pmrequests->profile_magic_get_frontend_url('pm_group_page','',$gid);
			$edit_group = add_query_arg( 'gid',$gid,$edit_group );
			$edit_group = add_query_arg( 'edit','1',$edit_group );
			?>
           <div class="pm-edit-group"><a href="<?php echo esc_url( $edit_group ); ?>" class="pm_button"><?php _e('Edit','profilegrid-user-profiles-groups-and-communities');?></a></div>
            <?php endif;?>
            </div>
             <div class="pm-group-image pm-difl pm-border">
                  <?php echo $pmrequests->profile_magic_get_group_icon($row); ?>
                   
                  <?php $pmrequests->profile_magic_get_join_group_button($gid);?>
                 
             </div>
             <div class="pm-group-description pm-difl pm-bg pm-pad10 pm-border">
         
         		<?php 
                        if($dbhandler->get_global_option_value('pm_show_group_managers_field','1')=='1')
                        {
                            if(!class_exists('Profilegrid_Group_Multi_Admins')):                         
                                if(isset($leaders) && !empty($leaders) && $pagenum==1):
                                $profile_url = $pmrequests->profile_magic_get_frontend_url('pm_user_profile_page','');
                                $slug = $pmrequests->pm_get_profile_slug_by_id($leaders['primary']);
                                $profile_url = add_query_arg( 'uid',$slug,$profile_url );
                                
                                ?>
                                <div class="pm-card-row pm-dbfl">
                                    <div class="pm-card-label pm-difl"><?php echo $pmrequests->pm_get_group_admin_label($gid); ?></div>
                                    <div class="pm-card-value pm-difl pm-group-leader-small pm-difl">
                                         <a href="<?php echo $profile_url ;?>"><?php echo get_avatar($leaders['primary'],16,'',false,array('class'=>'pm-infl','force_display'=>true));?>
                                        <?php echo $pmrequests->pm_get_display_name($leaders['primary'],true);?>
                                         </a>

                                        </div>
                                 </div>
        		<?php   endif;
                            else:
                                do_action('pm_show_multi_admins',$gid);
                            endif;
                        }
                       
         
         
                 
                 if($dbhandler->get_global_option_value('pm_show_group_members_field','1')=='1')
                 {      
                 ?>
                 <div class="pm-card-row pm-dbfl">
                    <div class="pm-card-label pm-difl"><?php _e('Members','profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pm-card-value pm-difl"><?php echo $total_users?></div>
                 </div>
                 <?php } ?>
                 
                 <?php if(!empty($row->group_desc) && $dbhandler->get_global_option_value('pm_show_group_details','1')=='1'):?>
                  <div class="pm-card-row pm-dbfl">
                    <div class="pm-card-label pm-difl"><?php _e('Details','profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pm-card-value pm-difl"><?php echo $row->group_desc;?></div>
                 </div>
                 <?php endif;?>
                 <?php do_action('profile_magic_show_group_fields_option',$options);?>
             </div>
           </div>
           
           

        </div>
   
   <?php endif;?>
   <?php $requested = $pmrequests->profile_magic_check_is_requested_to_join_group($gid,$current_user->ID);
   if($requested!=null)
    {
       $requested_options = maybe_unserialize($requested[0]->options);
       echo '<div class="pm-dbfl pm-pad10"><div class="pg-alert-warning pg-alert-info">';
       _e(sprintf('You sent membership request to join this Group on %s',$requested_options['request_date']),'profilegrid-user-profiles-groups-and-communities'); ?>
    <?php if(!empty($leaders)):
        if(isset($leaders['primary'])){$group_admin_id = $leaders['primary'];}else{$group_admin_id = $leaders[0];}
        ?>
    <br />
       <a onclick="pg_edit_blog_popup('member','message','<?php echo $group_admin_id;?>','<?php echo $gid;?>')"><?php echo sprintf(__("Send a message to %s","profilegrid-user-profiles-groups-and-communities"),$pmrequests->pm_get_group_admin_label($gid));?></a>
           <?php
           endif;
       echo '</div></div>';
    }
    ?>
    <div id="pg_group_tabs" class="pm-section-nav-horizental pm-dbfl">
        <ul class="pm-difl pm-profile-tab-wrap pm-border-bt">	
            <?php if($show_members==1):?>
            <li class="pm-profile-tab pm-pad10"><a class="pm-dbfl" href="#pg_members"><?php _e('Members','profilegrid-user-profiles-groups-and-communities');?></a></li>
            <?php endif;?>
             <?php do_action( 'profile_magic_group_photos_tab',$current_user->ID,$gid);?>
            
        </ul>
        <?php if($show_members==1):?>
        <div id="pg_members" class="pm-dbfl pg-profile-tab-content">
        <input type="hidden" id="pg-gid" name="pg-gid" value="<?php echo $gid;?>">
        <div class="pg-group-setting-head pm-dbfl pm-bg pg-group-filters-head">
        <div class="pg-group-sorting-ls pg-members-sortby pm-difl ">
            <div class="pg-sortby-alpha pm-difl">
                <span class="pg-group-sorting-title pm-difl"><?php _e("Sort by","profilegrid-user-profiles-groups-and-communities");?></span>
            <span class="pg-sort-dropdown pm-border pm-difl">
                <select class="pg-custom-select" name="member_sort_by_grid" id="member_sort_by_grid" onchange="pm_get_all_users_from_group_grid_view(1,'grid')">
                    <option value="oldest_first"><?php _e('Oldest', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="latest_first"><?php _e('Newest', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="first_name_asc"><?php _e('First Name Alphabetically A - Z', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="first_name_desc"><?php _e('First Name Alphabetically Z - A', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="last_name_asc"><?php _e('Last Name Alphabetically A - Z', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="last_name_desc"><?php _e('Last Name Alphabetically Z- A', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    
                </select>
            </span>
                </div>
            
        </div>
      
        <div class="pg-group-sorting-rs pm-difr">
           <div class="pg-members-sortby">
                <span class="pg-sort-dropdown pm-border">
                    <select class="pg-custom-select" id="member_search_in_grid" name="member_search_in_grid" onchange="pm_get_all_users_from_group_grid_view(1,'grid')">
                        <option value=""><?php _e('Select a Field','profilegrid-user-profiles-groups-and-communities');?></option>
                        <?php
                        $fields = $dbhandler->get_all_result('FIELDS', $column = '*', array('associate_group' => $gid), 'results', 0, false, $sort_by = 'ordering');
                        foreach($fields as $field)
                        {
                            if ($field->field_options != "")
                            {
                               $field_options = maybe_unserialize($field->field_options);
                            }
                            if(!empty($field_options) && isset($field_options['admin_only']) && $field_options['admin_only']=="1" && !is_super_admin() )
                            {
                               continue;
                            }
                                    
                            $exclude = array('file','user_avatar','heading','paragraph','confirm_pass','user_pass');
                            if (!in_array($field->field_type, $exclude))
                            {
                                echo '<option value="'.$field->field_key.'">'.$field->field_name.'</option>';	
                            }
                        }
                        ?>
                    </select>
                </span>

            </div>
            <div class=" pg-member-search"><input type="text" name="member_search_grid" id="member_search_grid" placeholder="<?php _e('Search', 'profilegrid-user-profiles-groups-and-communities'); ?>" onkeyup="pm_get_all_users_from_group_grid_view(1,'grid')"></div>
        </div>

    </div>    
        
            <div id="pg_members_grid_view">    
            
            
<?php
        $pmhtmlcreator = new PM_HTML_Creator($this->profile_magic,$this->version);
        if(!empty($users))
        {
            foreach($users as $user) 
            {

                     $pmhtmlcreator->get_group_page_fields_html($user->ID,$gid,$leaders,150,array('class'=>'user-profile-image'),$hide_profile_link);
            }
        }
        else
        {
            echo '<div class="pg-alert-warning pg-alert-info">';
            _e('No User Profile is registered in this Group','profilegrid-user-profiles-groups-and-communities');
            echo '</div>';
        }
	
	echo '<div class="pm_clear"></div>';
	echo '<div class="pm-member-pagination-grid">'.$pagination.'</div>';

?>
            </div>  
          </div>
        <?php endif;?>
        <?php do_action( 'profile_magic_group_photos_tab_content',$current_user->ID,$gid);?>
        
        
      </div>
            
   
    </div>
<div class="pm-popup-mask"></div>    

<div id="pm-edit-group-popup" style="display: none;">
    <div class="pm-popup-container" id="pg_edit_group_html_container">
     
        
    </div>
</div>
