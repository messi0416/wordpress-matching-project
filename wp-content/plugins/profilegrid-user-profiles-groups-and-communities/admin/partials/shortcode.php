<?php
$path =  plugin_dir_url(__FILE__);
$dbhandler = new PM_DBhandler;
$pmrequest = new PM_request;
$textdomain = $this->profile_magic;
$search_page = get_edit_post_link($pmrequest->pg_get_shortcode_page_id('PM_Search'));
$user_blog_page = get_edit_post_link($pmrequest->pg_get_shortcode_page_id('PM_User_Blogs'));
$registration_url =  get_edit_post_link($dbhandler->get_global_option_value('pm_registration_page'));
$group_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_group_page'));
$groups_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_groups_page'));
$login_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_user_login_page'));
$profile_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_user_profile_page'));
$forget_password_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_forget_password_page'));
$blog_page =  get_edit_post_link($dbhandler->get_global_option_value('pm_submit_blog'));
?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div class="pmagic pg-wide-wrap">
        
        <div class="pg-notice pg-alert pg-shortcode-alert">You can also find list of all ProfileGrid shortcodes in <a href="https://profilegrid.co/wordpress-user-profiles-shortcodes-list/" target="_blank">this post</a> with screenshots.</div>

            <div class="pg-escblock">
             <div class="pg-scblock-pg-logo"><img src="<?php echo $path;?>images/pg-sc-logo.png"></div>
            <div class="pg-escblock-title"><b><?php _e("ProfileGrid",'profilegrid-user-profiles-groups-and-communities');?></b> <span class="pg-brand"><?php _e("Basic Shortcodes",'profilegrid-user-profiles-groups-and-communities');?></span></div>
    
            <div class="pg-escblock-wrap pg-escblock-content-wrap">
                
   <!---  Basic Short code --->
                
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Registration Form as a Single Page",'profilegrid-user-profiles-groups-and-communities');?>
                    
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-form-as-a-single-page'))">Copy Shortcode</a>
                        
                        
                        </li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-form-as-a-single-page">[profilegrid_register gid="x"]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
           </div>
                
                <div class="pg-scblock-hide" style="display: none;">
     
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_register gid="3"]</div>
            
            </div>
                
         
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><ul><li>gid (Group ID) required</li></ul></div>
            </div>
                 
             
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes signup form for a group. Field sections will be separated into fieldset blocks with section names. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
               </div> 
           <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            
            </div> 
                
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Registration Form as Multi-Page",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-form-as-a-multi-page'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-form-as-a-multi-page">[profilegrid_register type="paged" gid="x"]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
                <div class="pg-scblock-hide" style="display: none">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_register type="paged" gid="2"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID) <i>required</i></li>
                        <li>type <i>required</i></li>
                    </ul>
                </div>
            </div>
                 
           
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes signup form for a group split over multiple pages. Field sections will be separated into pages with section names as headers. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    
            </div>
                
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>   
             
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Page",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-page'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-page">[profilegrid_group gid="x"]</div>
            
            </div>
          
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
                <div class="pg-scblock-hide" style="display: none">  
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_group gid="2"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID) <i>required</i></li>
               
                    </ul>
                </div>
            </div>
                 
           
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes the main group page for a group. It has a group card with badge, description and other details. Group users are displayed below the group card as grid. Other group features are also accessible from this page. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            </div>
                <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>   
                
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("All Groups",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-all-group-page'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-all-group-page">[profilegrid_groups]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none">  
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_groups]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes all groups as grid. There are options so sort groups, view them as list, and perform search. Visitors will also have option to join groups.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            </div> 
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Profile",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-profile'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-profile">[profilegrid_profile]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                
            <div class="pg-scblock-hide" style="display: none">  
            
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_profile]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes user profile for current user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Login Form",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-login-page'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-login-page">[profilegrid_login]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">  
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_login]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                 	None
                </div>
            </div>
                 
   
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes login form for registered users to login. Also displays forgot password link. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Password Recovery Form",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-password-recovery-page'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-password-recovery-page">[profilegrid_forgot_password]</div>
            
            </div>
                
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                
              <div class="pg-scblock-hide" style="display: none;">
                  

            
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_forgot_password]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                 	None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes email field to start password recovery workflow for registered users.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                  
            </div>
   
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
       

            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Blogs",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-blogs'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-blogs">[profilegrid_user_blogs uid="x, y, z" wpblog="true"]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_user_blogs uid="2,5,18" wpblog="true"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                        <li>user (Username) <i>optional</i></li>
                        <li>wpblog (WordPress Blog) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes user blog posts with title and excerpts in chronologically ordered list. Also displays publish date, feature image (thumbnail) and comment count. Clicking on blog post title will take visitor to blog post page. Both ProfileGrid user blogs and default WordPress blogs can be combined in this list. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Blog Submission",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-blog-submission'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>
                        
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-blog-submission">[profilegrid_submit_blog]</div>
            
            </div>
                
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                
            <div class="pg-scblock-hide" style="display: none;">
                

            
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_user_blogs uid="2,5,18" wpblog="true"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes a form allowing users to submit blog posts.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("All Users",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-all-users'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-all-users">[profilegrid_users]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_users]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes all users registered on the site as grid, with profile image, username and advance search capabilities.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                        </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
   
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Map",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-map'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-map">[profilegrid_map]</div>
            
            </div>
            
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Geolocation Extension</div>
            </div>
                
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_map][profilegrid_map gid="2,3" ex_uid="4,5" time="this_month" info="show"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group IDs) <i>optional</i></li>
                        <li>Ex_uid (Exclude User IDs) <i>optional</i></li>
                        <li>time (Time Period) <i>optional</i>
                            <ul>
                                <li>this_year</li>
                                <li>this_month</li>
                                <li>this_week</li>
                                <li>last_week</li>
                                <li>yesterday</li>
                                <li>today</li>
                                
                            </ul>
                        </li>
                        
                      <li>Info (Information Popup)<i>optional</i>
                        <ul>
                                <li>show</li> 
                                 <li>hide</li> 
                            </ul>
                      
                      </li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes map displaying location of users as markers. You can optionally allow popups with more details for each user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                
               </div>
   
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>
   
       <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("New Group",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-new-group'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-new-group">[profilegrid_new_group]</div>
            
            </div>
           
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Frontend Group Creator Extension</div>
            </div>
            
           <div class="pg-scblock-hide" style="display: none;">
               
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_new_group]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                  None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes group creation form on front end allowing users to add new groups.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
           
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
   
       <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("New Wall Post",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-new-wall-post'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-new-wall-post">[profilegrid_wall_post]</div>
            
            </div>
           
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Group Wall Extension</div>
            </div>
           
           <div class="pg-scblock-hide" style="display: none;">
           
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_wall_post]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                  None
                </div>
            </div>
                 
       
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes wall post submission form allowing users to submit new wall post.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
           
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            
            </div>
   
        <div class="pg-escsubblock">
                     <div class="pg-scblock pg-sctitle"><?php _e("ProfileGrid User Activities",'profilegrid-user-profiles-groups-and-communities');?>
                        <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                         <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                         <span class="material-icons">more_vert</span>
                         <ul class="pg-sc-dropdown" style="display: none;">
                             <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-activities'))">Copy Shortcode</a></li> 
                             <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                         </ul>
                       </div>
                     </div>
                 <div class="pg-scblock pg-sc-format-row">
                     <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec" id="pg-sc-user-activities">[profilegrid_user_activities]</div>

                 </div>

                  <div class="pg-scblock pg-sc-requirements-row">
                     <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">User Activities Extension</div>
                 </div>

                <div class="pg-scblock-hide" style="display: none;">

                 <div class="pg-scblock pg-sc-example-row">
                     <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">	[profilegrid_user_activities count="10" order="desc" gid="1"]</div>

                 </div>

                  <div class="pg-scblock pg-sc-parameters-row">
                     <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">
                       <ul>
                             <li>count (Number of activities) <i>optional</i></li>
                             <li>order (ordering asc/desc) <i>optional</i></li>
                             <li>gid (Group id) <i>optional</i></li>
                         </ul>
                     </div>
                 </div>



                 <div class="pg-scblock pg-sc-description-row">
                     <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec pg-morelink"><?php _e("Display various activities by different users.",'profilegrid-user-profiles-groups-and-communities');?></div>
                 </div>


                 <div class="pg-scblock pg-sc-visual-row">
                     <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
                 </div>

                 </div>
                 <div class="pg-scblock pg-shorocode-show-more">
                 <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_down</span>
                </div>

                <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
                 <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                         <span class="material-icons">keyboard_arrow_up</span>
                </div>



                 </div>
   
    <div class="pg-escsubblock">
                     <div class="pg-scblock pg-sctitle"><?php _e("ProfileGrid Recent Signup",'profilegrid-user-profiles-groups-and-communities');?>
                        <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                         <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                         <span class="material-icons">more_vert</span>
                         <ul class="pg-sc-dropdown" style="display: none;">
                             <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-recent-signup'))">Copy Shortcode</a></li> 
                             <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                         </ul>
                       </div>
                     </div>
                 <div class="pg-scblock pg-sc-format-row">
                     <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec" id="pg-sc-recent-signup">[profilegrid_recent_signup]</div>

                 </div>

                  <div class="pg-scblock pg-sc-requirements-row">
                     <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">Recent Signup Extension</div>
                 </div>

                <div class="pg-scblock-hide" style="display: none;">

                 <div class="pg-scblock pg-sc-example-row">
                     <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">	[profilegrid_recent_signup count="10" show_more="1" more_link="https://google.com" open_in_new_tab="1"]</div>

                 </div>

                  <div class="pg-scblock pg-sc-parameters-row">
                     <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec">
                       <ul>
                             <li>count (Number of Signup) <i>optional</i></li>
                             <li>show_more (1/0) <i>optional</i></li>
                             <li>more_link (url)<i>optional</i></li>
                             <li>open_in_new_tab (1/0)<i>optional</i></li>
                         </ul>
                     </div>
                 </div>



                 <div class="pg-scblock pg-sc-description-row">
                     <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec pg-morelink"><?php _e("Display various activities by different users.",'profilegrid-user-profiles-groups-and-communities');?></div>
                 </div>


                 <div class="pg-scblock pg-sc-visual-row">
                     <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                     <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
                 </div>

                 </div>
                 <div class="pg-scblock pg-shorocode-show-more">
                 <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_down</span>
                </div>

                <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
                 <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                         <span class="material-icons">keyboard_arrow_up</span>
                </div>



                 </div>
        
                
            </div>
            
           </div>
        
        
        <div class="pg-escblock">
            <div class="pg-scblock-pg-logo"><img src="<?php echo $path;?>images/pg-sc-logo.png"></div>
            <div class="pg-escblock-title"><b><?php _e("ProfileGrid",'profilegrid-user-profiles-groups-and-communities');?></b> <span class="pg-brand"><?php _e("Advanced Shortcodes",'profilegrid-user-profiles-groups-and-communities');?></span></div>
    
            <div class="pg-escblock-wrap">
                

            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Display Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-display-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-display-name">[profilegrid_user_display_name]</div>
            
            </div>
                
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">User Display Name Extension</div>
            </div>
                
            <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_display_name]<br>[profilegrid_user_display_name uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes the display name of the currently logged in user, based on your configuration inside ProfileGrid Display Name Extension. (If the extension is not installed, it will show full name of the user. If the First Name is not set, it will show Display Name.) To publish display name of another user, use uid parameter.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                
               </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>  
                
            <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User First Name",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-first-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-first-name">[profilegrid_user_first_name]</div>
            
            </div>
                
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_user_first_name]<br>[profilegrid_user_first_name uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes First Name of the currently logged in user. To publish First Name of another user, use uid parameter.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Last Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-last-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-last-name">[profilegrid_user_last_name]</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_user_last_name]<br>[profilegrid_user_last_name uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Last Name of the currently logged in user. To publish Last Name of another user, use uid parameter. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Email",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-email'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-email">[profilegrid_user_email]</div>
            
            </div>
                    
          <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_email]<br>[profilegrid_user_email uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes registered email address of the currently logged in user. To publish email of another user, use uid parameter.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Cover Image",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-cover-image'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-cover-image">[profilegrid_user_cover_image]</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
              <div class="pg-scblock-hide" style="display: none;">      
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_cover_image]<br>[profilegrid_user_cover_image uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes cover image of the currently logged in user. To publish cover image of another user, use uid parameter.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Default Group",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-default-group'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-default-group">[profilegrid_user_default_group]</div>
            
            </div>
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
           <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_default_group]<br>[profilegrid_user_default_group uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes name of the default user group for currently logged in user. To publish default group name of another user, use uid parameter. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Groups",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-groups'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-groups">[profilegrid_user_all_groups]</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_all_groups]<br>[profilegrid_user_all_groups uid="1" sep=","]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                        <li>sep (Separator)<i> optional</i></li>
                    </ul>
                </div>
            </div>
                 

            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes comma separated names of groups current users belongs to. To publish group names for another user, use uid parameter.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
              </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Group Badges",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-groups-badges'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-groups-badges">[profilegrid_user_group_badges]</div>
            
            </div>
            
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
             <div class="pg-scblock-hide" style="display: none;">
                 
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_group_badges]<br>[profilegrid_user_group_badges uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes group badges (images) for currently logged in user. To publish group badges of another user, use uid parameter. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Labels",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-labels'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-labels">[profilegrid_user_labels]</div>
            
            </div>
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Profile Labels Extension</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_labels]<br>[profilegrid_user_labels uid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>uid (User ID) <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 
  
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes profile labels for currently logged in user. To publish profile label of another user, use uid parameter. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Unread Notification Count",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-unread-notification-count'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-unread-notification-count">[profilegrid_unread_notifications]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_unread_notifications]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes number of unread notifications for currently logged in user. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Unread Message Count",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-unread-message-count'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-unread-message-count">[profilegrid_unread_messages]</div>
            
            </div>
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
          <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_unread_messages]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes unread messages count for the currently logged in user. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
             </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("About",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-about'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-about">[profilegrid_user_about_area]</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_about_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes About area from the profile of currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Groups",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-groups-area'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-groups-area">[profilegrid_user_groups_area]</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
              <div class="pg-scblock-hide" style="display: none;">
                    
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_user_groups_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Groups area from the profile of currently logged in user displaying group cards of the groups user belongs to.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
             </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Blogs",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-blog-area'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-blog-area">[profilegrid_blog_area]</div>
            
            </div>
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_blog_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Blog area from the profile of currently logged in user displaying paginated list of of blog posts written by currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
          </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
                    
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Messaging",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-messaging'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-messaging">[profilegrid_messaging_area]</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_messaging_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Messaging system for currently logged in user to converse with other users.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
             </div>
                
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>



            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Notifications",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-notification'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-notification">[profilegrid_notification_area]</div>
            
            </div>
            

                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
                
                            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_notification_area]</div>
            
            </div>
                
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 
 
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Notification cards for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            
             </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

                    
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Friends",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-friends-area'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-friends-area">[profilegrid_friends_area]</div>
            
            </div>
                    
       
                             
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
               <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_friends_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Friends list and management area for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
              </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Forums",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-forums'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-forums">[profilegrid_forum_area]</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">bbPress Integration Extension</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_forum_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Forum activity for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Settings",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-settings'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-settings">[profilegrid_settings_area]</div>
            
            </div>
          <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_settings_area]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes all ProfileGrid Settings for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Account",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-account-option'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-account-option">[profilegrid_account_options]</div>
            
            </div>
                    
                                
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
                
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_account_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
     
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Account section of ProfileGrid Settings for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Change Password",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-password-option'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-password-option">[profilegrid_password_options]</div>
            
            </div>
                    
  
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                   <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_password_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 
      
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Password Update section for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Social Connect",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-social-connect'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-social-connect">[profilegrid_social_options]</div>
            
            </div>
            
                             
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Social Login Extension</div>
            </div>
           <div class="pg-scblock-hide" style="display: none;">

            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_social_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes social connections section for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    
            </div>
                
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Mailchimp",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-mailchimp-options'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-mailchimp-options">[profilegrid_mailchimp_options]</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">MailChimp Integration Extension</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_mailchimp_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes newsletter settings section for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Privacy",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-privacy'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-privacy">[profilegrid_privacy_options]</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
         <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_privacy_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes profile privacy settings for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Delete Account",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-delete-account'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-delete-account">[profilegrid_delete_options]</div>
            
            </div>
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_delete_options]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                   None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes profile deletion option for currently logged in user.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Cards",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-cards'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-cards">[profilegrid_group_cards gid="x"]</div>
            
            </div>
                    
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_cards gid="1,2,4"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes one or more group cards by passing ‘gid’ parameter for Group IDs.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-name">[profilegrid_group_name gid="x"]</div>
            
            </div>
                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
           <div class="pg-scblock-hide" style="display: none;">
          
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_name gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes name of a group based on group’s ID. Please note, it will only accept single group ID.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Description",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-description'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-description">[profilegrid_group_description gid="x"]</div>
            
            </div>
                    
               <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                <div class="pg-scblock-hide" style="display: none;">    
         
            
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_description gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes description of a group based on group’s ID. Adding ‘gid’ parameter is required. For example  [profilegrid_group_description gid=\"1\"]. Please note, it will only accept single group ID.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
              </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Member Count",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-member-count'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-member-count">[profilegrid_member_count gid="x"]</div>
            
            </div>
            
            
     
   
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;"> 
                   <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_member_count gid="1"]</div>
            
            </div>
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Published number of members in a group currently, based on group’s ID. Please note, it will only accept single group ID.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Manager Count",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-manager-count'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-manager-count">[profilegrid_manager_count gid="x"]</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>      
                    
            <div class="pg-scblock-hide" style="display: none;">
          
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_manager_count gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Published number of manager in a group currently, based on group’s ID.  Please note, it will only accept single group ID.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Managers",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-managers'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-managers">[profilegrid_group_manager gid="x" sep=","]</div>
            
            </div>
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
         <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_managers gid="1" sep=","]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                        <li>sep (Separator)<i> optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes display names of managers of a group.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Managers (List)",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-managers-list'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-managers-list">[profilegrid_group_manager_list gid="x"]</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_manager_list gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes display names of managers of a group in list format.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
              </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Member Cards",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-member-cards'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-member-cards">[profilegrid_members_cards gid="x"]</div>
            
            </div>
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
           <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_members_cards gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes profile cards of group members in grid format.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Manager Cards",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-manager-cards'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-manager-cards">[profilegrid_manager_cards gid="x"]</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_manager_cards gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes profile cards of group managers in grid format.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Discussion",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-discussion'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-discussion">[profilegrid_group_discussion gid="x"]</div>
            
            </div>
                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Group Wall Extension</div>
            </div>
                    
           <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_discussion gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 
            
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes group discussions/ wall for specified group.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Photos",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-photos'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-photos">[profilegrid_group_photos gid="x"]</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Group Photos Extension</div>
            </div>
           <div class="pg-scblock-hide" style="display: none;">
                    
      
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_photos gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes group albums and photos for specified group.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
          </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Settings",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-group-settings'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-group-settings">[profilegrid_group_settings gid="x"]</div>
            
            </div>
            
               <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
               <div class="pg-scblock-hide" style="display: none;">     
                    
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_group_settings gid="1"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes group configuration options for specified group. It will only be accessible to group managers.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Conditional Content Display",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-conditional-content-display'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-conditional-content-display">[profilegrid_show gid="x"][/profilegrid_show]</div>
            
            </div>
                    
          <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_show gid="1"][/profilegrid_show]<br>[profilegrid_show min_blog="10" gid="2,3,4" min_wc_spent="200" min_edd_spent="100"][/profilegrid_show]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>
                        <li>min_blog (Minimum number of blog posts)<i> optional</i></li>
                        <li>min_wc_spent (Minimum WooCommerce spent)<i> optional</i></li>
                        <li>min_edd_spent (Minimum Easy Digital Downloads Spent)<i> optional</i></li>
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Restricts the visibility of content between the opening and closing tags of the shortcode. Optional parameters offer possibility to define users with minimum requirements who will be able to see the content. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Conditional Content Hide",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-conditional-content-hide'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-conditional-content-hide">[profilegrid_hide gid="x,y,z"][/profilegrid_hide]</div>
            
            </div>
                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_hide gid="1,2,3"][/profilegrid_hide]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>                     
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Hides the content within shortcodes for members of specific groups. ",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>

                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Content Restricted to Group Managers",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-content-restricted-group-managers'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-content-restricted-group-managers">[profilegrid_show_managers]<br>[/profilegrid_show_managers]</div>
            
            </div>
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
          <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">[profilegrid_show_managers][/profilegrid_show_managers]<br>[profilegrid_show_managers gid="1,2,3"][/profilegrid_show_managers]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>gid (Group ID)<i> required</i></li>                     
                    </ul>
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Displays the content only to Group Managers. If parameter gid is set then the content is visible only to Managers of specified groups.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            </div>
                
                 <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Hero Banner",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-hero-banner'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-hero-banner">[profilegrid_hero_banner]</div>
            
            </div>
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">ProfileGrid Hero Banner</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">	[profilegrid_hero_banner]<br>[profilegrid_hero_banner  row="5" column="15" heading="Heading" sub_heading="Sub Heading" button_text="Join" button_link="http://google.com"]</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    <ul>
                        <li>row <i>optional</i></li>
                        <li>column <i>optional</i></li>
                        <li>heading <i>optional</i></li>
                        <li>sub_heading <i>optional</i></li>
                        <li>button_text <i>optional</i></li>
                        <li>button_link <i>optional</i></li>
                    </ul>
                </div>
            </div>
                 
  
            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("With the dynamic Hero Banner feature showcase your group profiles as a striking hero image on your WordPress website. You can add multiple rows and columns of your choice.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div> 

           </div> 
        </div>  
        
        
        
        
        
               <div class="pg-escblock">
                  <div class="pg-scblock-pg-logo"><img src="<?php echo $path;?>images/pg-sc-logo.png"></div>
            <div class="pg-escblock-title"><b><?php _e("ProfileGrid",'profilegrid-user-profiles-groups-and-communities');?></b> <span class="pg-brand"><?php _e("Email Shortcodes",'profilegrid-user-profiles-groups-and-communities');?></span></div>
    
            <div class="pg-escblock-wrap">
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User Login",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-login'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-login">{{user_login}}</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
          <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{user_login}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes user login of the user to whom the email will be sent.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
           </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Password",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-password'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-password">{{user_pass}}</div>
            
            </div>
                    
           <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{user_pass}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes password (as text) of mail recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Nicename",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-nicename'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-nicename">{{user_nicename}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
             <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{user_nicename}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Nicename (from WordPress user profile) of the mail recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Email",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-email-template'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-email-template">{{user_email}}</div>
            
            </div>
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
         <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{user_email}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes registered email of the email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("User URL",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-user-url'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-user-url">{{user_url}}</div>
            
            </div>
                    
          <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{user_url}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes clickable admin area user account URL for certain scenarios for the admin.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Activation Code",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-sc-activation-code'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-sc-activation-code">{{pm_activation_code}}</div>
            
            </div>
          <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{pm_activation_code}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes activation code (for newly registered users to activate their accounts) specific to email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Display Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-display-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-display-name">{{display_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">User Display Name Extension</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{display_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes display name of the email recipient based on Display Name extension configuration.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("First Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-first-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-first-name">{{first_name}}</div>
            
            </div>
                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{first_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes First Name of the email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
               </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Last Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-last-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-last-name">{{last_name}}</div>
            
            </div>
            
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
             <div class="pg-scblock-hide" style="display: none;"> 
                    
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{last_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Last Name of the email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Nickname",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-user-nickname'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-user-nickname">{{nickname}}</div>
            
            </div>
            
               <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{nickname}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Nickname of the email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
         </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

                    
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Profile Link",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-profile-link'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-profile-link">{{profile_link}}</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{profile_link}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes front-end profile page URL of the email recipient.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    
             </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Site Name",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-site-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-site-name">{{site_name}}</div>
            
            </div>
                    
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{site_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes the site name (from WordPress settings).",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
            </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-site-description'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-site-description">{{description}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
                
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{description}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes site description (from WordPress settings).",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-group-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-group-name">{{group_name}}</div>
            
            </div>
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
           <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{group_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Group Name for different email notification scenarios.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Group Admin Label",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-admin-label'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-admin-label">{{group_admin_label}}</div>
            
            </div>
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
                    
              <div class="pg-scblock-hide" style="display: none;">
            
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{group_admin_label}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes Group Manager Label set by Group Admin for different email notification scenarios.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>


            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Edit Group Link",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-group-link'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-group-link">{{edit_group_url}}</div>
            
            </div>
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{edit_group_url}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes front-end group edit link for different email notification scenarios.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Post Name",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-post-name'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-post-name">{{post_name}}</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{post_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes the post name for published blog for different email notification scenarios.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
             </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Edit Post Link",'profilegrid-user-profiles-groups-and-communities');?>
                   <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-edit-post-link'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-edit-post-link">{{edit_post_link}}</div>
            
            </div>
                    
             <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{edit_post_link}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes link to edit the published blog post for different email notification scenarios.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
              </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Post Link",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-post-link'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-post-link">{{post_link}}</div>
            
            </div>
                             
              <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{post_link}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes link to new user blog post published on the site.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
            
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>



            </div>
                
                <div class="pg-escsubblock">
                <div class="pg-scblock pg-sctitle"><?php _e("Any User Value",'profilegrid-user-profiles-groups-and-communities');?>
                    <div style="display: none" class="pg-shorcode-copied"><?php _e("Shortcode Copied",'profilegrid-user-profiles-groups-and-communities');?></div>
                    <div class="pg-scblock-menu pg-sc-menu pg_email_shortcode_menu" onclick="pg_shortcode_dropdown_menu(this)">
                    <span class="material-icons">more_vert</span>
                    <ul class="pg-sc-dropdown" style="display: none;">
                        <li class="pg-sc-dropdown-item"><a href="javascript:void(0)" onclick="pg_copy_shortcode(document.getElementById('pg-email-sc-any-user-value'))">Copy Shortcode</a></li> 
                        <li class="pg-sc-dropdown-item"><a href="#">New Page with Shortcode</a></li>      
                    </ul>
                  </div>
                </div>
            <div class="pg-scblock pg-sc-format-row">
                <div class="pg-sc-title"><?php _e("Format",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec" id="pg-email-sc-any-user-value">{{meta_key}}</div>
            
            </div>
                    
            <div class="pg-scblock pg-sc-requirements-row">
                <div class="pg-sc-title"><?php _e("Requirements",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">Core</div>
            </div>
            <div class="pg-scblock-hide" style="display: none;">
            <div class="pg-scblock pg-sc-example-row">
                <div class="pg-sc-title"><?php _e("Example",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">{{last_name}}</div>
            
            </div>
            
             <div class="pg-scblock pg-sc-parameters-row">
                <div class="pg-sc-title"><?php _e("Parameters",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec">
                    None
                </div>
            </div>
                 

            
            <div class="pg-scblock pg-sc-description-row">
                <div class="pg-sc-title"><?php _e("Description",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec pg-morelink"><?php _e("Publishes value for a meta-key from WordPress' default usermeta table for recipient of the email. For example, if you wish to publish Last Name of the user, use {{last_name}} shortcut.",'profilegrid-user-profiles-groups-and-communities');?></div>
            </div>
                
                
            <div class="pg-scblock pg-sc-visual-row">
                <div class="pg-sc-title"><?php _e("Visual",'profilegrid-user-profiles-groups-and-communities');?></div> 
                <div class="pg-sc-dec"><a href="#">Link <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
            </div>
                    </div>
            <div class="pg-scblock pg-shorocode-show-more">
            <?php _e("More info",'profilegrid-user-profiles-groups-and-communities');?>
               <span class="material-icons">keyboard_arrow_down</span>
           </div>
                
           <div class="pg-scblock pg-shorocode-show-less" style="display: none;">
            <?php _e("Less info",'profilegrid-user-profiles-groups-and-communities');?>
                    <span class="material-icons">keyboard_arrow_up</span>
           </div>

            
            </div>
                
            </div>
            
            </div>
        
        
    </div>



<script>
    
  function pg_shortcode_dropdown_menu(a){
    jQuery(a).find('.pg-sc-dropdown').slideToggle('fast');
    jQuery('.pg-scblock-menu').not(a).children(".pg-sc-dropdown").slideUp('fast');
        
}    
    
    
(function($){ 
    
$(document).ready(function() {
    
var showChar = 50;
var ellipsestext = "...";
var moretext = "See More";
var lesstext = "See Less";
$('.pg-scblock.pg-sc-description-row .pg-sc-deccc').each(function () {
    var content = $(this).html();
    if (content.length > showChar) {
        var show_content = content.substr(0, showChar);
        var hide_content = content.substr(showChar, content.length - showChar);
        var html = show_content + '<span class="moreelipses">' + ellipsestext + '</span><span class="remaining-content"><span>' + hide_content + '</span>&nbsp;&nbsp;<a href="" class="pg-morelinkcc">' + moretext + '</a></span>';
        $(this).html(html);
    }
});

$(".pg-morelinkcc").click(function () {
    if ($(this).hasClass("less")) {
        $(this).removeClass("less");
        $(this).html(moretext);
    } else {
        $(this).addClass("less");
        $(this).html(lesstext);
    }
    $(this).parent().prev().toggle();
    $(this).prev().toggle();
    return false;

       });    
    
    });
    
    



$(document).ready(function(){

  $('.pg-escsubblock').each(function() {
    var $dropdown = $(this);

    $(".pg-shorocode-show-more", $dropdown).click(function(e) {
      e.preventDefault();
      $(".pg-scblock-hide", $dropdown).show();
       $(".pg-shorocode-show-less", $dropdown).show();
      $(".pg-shorocode-show-more", $dropdown).hide();
      return false;
    });
    
    
      $(".pg-shorocode-show-less", $dropdown).click(function(e) {
      e.preventDefault();
      $(".pg-scblock-hide", $dropdown).hide();
       $(".pg-shorocode-show-less", $dropdown).hide();
      $(".pg-shorocode-show-more", $dropdown).show();


   });

});
    

     
});
    

})(jQuery);


function pg_copy_shortcode(target) {

    var text_to_copy = jQuery(target).text();

    var tmp = jQuery("<input id='pg_shortcode_input' readonly>");
    var target_html = jQuery(target).html();
    jQuery(target).html('');
    jQuery(target).append(tmp);
    tmp.val(text_to_copy).select();
    var result = document.execCommand("copy");

    if (result != false) {
        jQuery(target).html(target_html);
        jQuery(target).parents('.pg-escsubblock').children('.pg-sctitle').children(".pg-shorcode-copied").fadeIn('slow');
        jQuery(target).parents('.pg-escsubblock').children('.pg-sctitle').children(".pg-shorcode-copied").fadeOut('slow');
    } else {
        jQuery(document).mouseup(function (e) {
            var container = jQuery("#pg_shortcode_input");
            if (!container.is(e.target)  
                    && container.has(e.target).length === 0) 
            {
                jQuery(target).html(target_html);
            }
        });
    }
}
    
    
    
</script>
