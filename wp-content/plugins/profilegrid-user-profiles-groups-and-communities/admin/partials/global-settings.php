<?php
global $wpdb;
$textdomain = $this->profile_magic;
$path =  plugin_dir_url(__FILE__);
?>

<div class="pm-setting-wrapper">
  <div class="content pm_settings_option">
    <div class="uimheader">
      <?php _e( 'Core Settings','profilegrid-user-profiles-groups-and-communities' ); ?>
    </div> 
      <div class="pm-setting-wrap"> 
     
     <div class="uimrow"> 
    <a href="admin.php?page=pm_general_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/general.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'General','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Form look, Default pages, Attachment settings etc.','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div> 
      
      
    <div class="uimrow"> 
    <a href="admin.php?page=pm_theme_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/pg-layout-icon.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'Profile Templates','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Option to choose new templates.','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    
    <div class="uimrow"> 
    <a href="admin.php?page=pm_security_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/security.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'Security','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Spam Protection, Blacklists and more.','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    
    <div class="uimrow"> 
    <a href="admin.php?page=pm_user_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/usersettings.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'User Accounts','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Activation link, Manual Approvals etc.','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    
    
    <div class="uimrow"> 
    <a href="admin.php?page=pm_email_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/autoresponder.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'Email Notifications','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Admin Notifications, Multiple Email Notifications, From Email','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    
    <div class="uimrow"> 
    <a href="admin.php?page=pm_tools">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/tools.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'Tools','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Import/ Export Options','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a>
    </div>
    <div class="uimrow"> 
          <a href="admin.php?page=pm_blog_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/userblogs.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'User Blogs','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Default post status, privacy settings etc.','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    
    <div class="uimrow"> 
          <a href="admin.php?page=pm_message_settings">
      <div class="pm_setting_image"> 
      	<img src="<?php echo $path;?>images/privatemessaging.png" class="options" alt="options"> 
      </div>
      <div class="pm-setting-heading"> 
          <span class="pm-setting-icon-title"><?php _e( 'Private Messaging','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
          <span class="pm-setting-description"><?php _e( 'Turn Private Messaging on/ off','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
      </div>
    </a> 
    </div>
    <div class="uimrow"> 
        <a href="admin.php?page=pm_friend_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/friends.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Friends System','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Turn Friends System on or off and more','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
    
    <div class="uimrow"> 
        <a href="admin.php?page=pm_upload_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/pm_upload.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Uploads','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Image widths, sizes, quality etc.','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
    
    <div class="uimrow"> 
        <a href="admin.php?page=pm_seo_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/pm_seo.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'SEO','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'All SEO related options.','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
    
     <div class="uimrow"> 
        <a href="admin.php?page=pm_content_restrictions">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/content-privacy-guide.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Content Restrictions','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'How to restrict content for members.','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
    <div class="uimrow"> 
        <a href="admin.php?page=pm_rm_integration">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/pg-rm-integration.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Registration Forms','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Configure RegistrationMagic Integration','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
 
    <div class="uimrow"> 
        <a href="admin.php?page=pm_profile_notification_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/profile-notification-icon.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Profile Notifications','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Enable/ Disable Live Profile Notifications','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>
      
    <div class="uimrow"> 
        <a href="admin.php?page=pm_profile_tabs_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/profile-tabs-icon.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Profile Tabs','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Enable/ Disable Profile Tabs','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
         </a> 
    </div>

    <div class="uimrow"> 
      <a href="admin.php?page=pm_private_profile_settings">
          <div class="pm_setting_image"> 
              <img src="<?php echo $path;?>images/pg-private-profile-icon.png" class="options" alt="options"> 
          </div>
          <div class="pm-setting-heading"> 
              <span class="pm-setting-icon-title"><?php _e( 'Private Profile','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
              <span class="pm-setting-description"><?php _e( 'Enable/ Disable Private Profile','profilegrid-user-profiles-groups-and-communities'); ?></span>
          </div>
       </a> 
    </div>
      
    <div class="uimrow"> 
        <a href="admin.php?page=pm_elements_visibility_settings">
            <div class="pm_setting_image"> 
                <img src="<?php echo $path;?>images/pg-elements-visibility-icon.png" class="options" alt="options"> 
            </div>
            <div class="pm-setting-heading"> 
                <span class="pm-setting-icon-title"><?php _e( 'Elements Visibility','profilegrid-user-profiles-groups-and-communities' ); ?></span> 
                <span class="pm-setting-description"><?php _e( 'Enable/ Disable Elements Visibility','profilegrid-user-profiles-groups-and-communities'); ?></span>
            </div>
        </a> 
    </div>
      
   <div class="uimrow"> <a href="admin.php?page=pm_payment_settings">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg_payments.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Payments','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Currency, Symbol Position, Checkout Page etc.','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
  </a> </div>
      
    <div class="uimrow"></div>
    <div class="uimrow"></div>
    </div>
 
  </div>
</div>


<div class="pm-setting-wrapper">
  <div class="content pm_settings_option">
    <div class="uimheader">
      <?php _e( 'Extensions Settings','profilegrid-user-profiles-groups-and-communities' ); ?>
    </div> 
      
            <div class="pm-setting-wrap"> 
      <?php do_action('profile_magic_setting_option'); ?>
            </div>
  </div>
</div>





    <div id="pg-setting-popup" class="pg-setting-modal-view" style="display: none;">
        <div class="pg-setting-modal-overlay pg-setting-popup-overlay-fade-in"></div>
        <div class="pg-setting-modal-wrap pg-setting-popup-out">
            <div class="pg-setting-modal-titlebar">
                <span class="pg-setting-modal-close">×</span>
            </div>
            <div class="pg-setting-container">

    <!--Custom Profile Slugs-->
                
    <div class="pg-extension-wrap" id="pg-custom-profile-slugs" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/userid_slug.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Custom Profile Slugs','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Edit and define slugs in profile permalinks','profilegrid-user-profiles-groups-and-communities' ); ?>
        <span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
        </div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Define how your user profile URL\'s will appear to site visitors and search engines. Take control of your user profile permalinks and add dynamic slugs.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/user-profile-custom-slugs" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Custom Profile Slugs End-->
      
    <!--Group Photos-->
                
    <div class="pg-extension-wrap" id="pg-group-photos" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/group-photos.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Group Photos','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Turn Group Photos on/ off','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Allow your users to create and share Photo Albums within their Groups. There\'s also an option for public photos. Users can enlarge and comment on different photos.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Group Photos End--> 
    
    
    <!--User Display Names-->
                
    <div class="pg-extension-wrap" id="pg-display-name" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/display_name.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'User Display Names','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Customize display names, define patterns.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Now take complete control of your users\' display names. Mix and match patterns and add predefined suffixes and prefixes. There\'s a both global and per group option allowing display names in different groups stand out!', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/user-display-name" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--User Display Names End--> 
    
    
    
    <!--Custom Group Fields-->
                
    <div class="pg-extension-wrap" id="pg-custom-group-fields" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/group-custom-fields.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Custom Group Fields','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Customized group fields','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Create and add custom fields to groups too! Now your user groups can have more detailed information and personality just like your user profile pages.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Custom Group Fields--> 
    
    
    <!--bbPress Integration-->
                
    <div class="pg-extension-wrap" id="pg-bbPress-integration" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/bbpress.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'bbPress Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure bbPress related settings','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Integrate ProfileGrid user profile properties and sign up system with the ever popular bbPress community forums plugin.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/bbpress-integration" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--bbPress Integration End--> 
    
    
        <!--Geolocation Integration-->
                
    <div class="pg-extension-wrap" id="pg-geolocation" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/geolocation.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Geolocation','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Map APIs and settings','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Generate maps showing locations of all users or specific groups using simple shortcodes. Get location data from registration form.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Geolocations Integration End--> 
    
    
    
        <!--Frontend Group Creator-->
                
    <div class="pg-extension-wrap" id="pg-frontend-group" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/frontend-group.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Frontend Group Creator','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Customized Front End Groups.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Allow registered users to create new Groups on front end. These Groups behave and work just like regular ProfileGrid groups.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Frontend Group Creator End--> 
    
    
    <!--MailChimp Integration-->
                
    <div class="pg-extension-wrap" id="pg-mailchimp-integration" style="display: none">
        <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-mailchimp.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'MailChimp','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Enable or disable MailChimp integration.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Assign ProfileGrid Users to MailChimp lists with custom field mapping and options for Users to manage subscriptions.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--MailChimp Integration End--> 
    
    
    
        <!--WooCommerce Integration-->
                
    <div class="pg-extension-wrap" id="pg-woocommerce-integration" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-woocommerce.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define WooCommerce integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Combine the power of ProfileGrid\'s User Profiles, Groups & Communities with WooCommerce shopping cart to provide your Users the ultimate shopping experience.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/woocommerce-integration" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Integration End--> 
    
    <!--Social Login-->
                
    <div class="pg-extension-wrap" id="pg-social-login" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/social-connect.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Social Login','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure social networks.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Allow your users to sign up and login using their favourite social network accounts. Social accounts can be managed from Profile settings.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Social Login--> 
    
    <!--Custom Profile Tabs-->
                
    <div class="pg-extension-wrap" id="pg-custom-Profile-tabs" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/custom-profile-tab.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Custom Profile Tabs','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Display user authored custom post type data or shortcode','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Create and add custom tabs to user profiles with data fetched from other plugins. Ultimate tool for plugging in content from different plugins enhancing functionality of user profiles manifold. Be it events, business listings, classified ads, job postings, downloads, products or anything else that is available in WordPress repository - now you can filter them by user and display as part of user\'s profile.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Custom Profile Tabs--> 
    
    
    <!--myCRED-->
                
    <div class="pg-extension-wrap" id="pg-mycred-integration" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-mycred-integration.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'myCRED','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Integrate myCRED with User Profiles','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Integrate popular points system for WordPress with ProfileGrid to reward your users. Display ranks and badges on user profile pages, give incentive for activities on site or penalize based on pre-set rules.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--myCREDs--> 
    
    
    <!--User Photos-->
                
    <div class="pg-extension-wrap" id="pg-user-photos-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/user_photos.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'User Photos','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure Photos and Photo Albums for User Profiles.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Allow users to upload and manage personal photos on their user profiles.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--User Photos-->
    
    
    
        <!--Menu Restrictions-->
                
    <div class="pg-extension-wrap" id="pg-menu-restrictions-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/menu_restrictions.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Menu Restrictions','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define groups to show/ hide menus.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Use in-built ProfileGrid hierarchy to hide or show menu items on your site! You can mark specific menu items to be visible or hidden only to certain group(s). Create specific menu items for Group Managers of selected or all groups. Combine it with ProfileGrid\'s core content restriction system to build extremely powerful membership sites.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Menu Restrictions End--> 
    
    <!--WooCommerce Wishlist-->
                
    <div class="pg-extension-wrap" id="pg-wishlist-woocommerce" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-wishlist-woocommerce.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Wishlist','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define WooCommerce Wishlist integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Add WooCommerce products to your Wishlist to purchase them easily later. Your WooCommerce Wishlist will be visible to you from your ProfileGrid User Profile from where you can manage it completely.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Wishlist End-->
    
    
        <!--Instagram-->
                
    <div class="pg-extension-wrap" id="pg-instagram-integration" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-instagram.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Instagram','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure Instagram Integration.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Show Instagram tab on User Profile page with user’s Instagram photos displayed in the tab.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Instagram End-->
    
    
        
    <!--Group Wall-->
                
    <div class="pg-extension-wrap" id="pg-groupwall-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-groupwall.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Group Wall','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configuration for Group Wall Extension.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'A brand new ProfileGrid extension that adds social activity to your User Groups. Now users can create new posts, comment on other users’ posts and browse Group timeline. Group Wall is accessible from Group page as a new tab.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Group Wall End-->
    
    
    <!--Login Logout Menu-->
                
    <div class="pg-extension-wrap" id="pg-login-logout-menu-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-logout-icon.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Login Logout Menu','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure menu items.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Now you can add contextual login menu item to your website menu(s) with few simple clicks. The menu item changes based on user login state. Additionally, you have option to add User Profile, User Groups and Password Recovery items.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/profilegrid-login-logout-menu" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Login Logout Menu End-->
    
    
    <!--WooCommerce Extensions Integration)-->
                
    <div class="pg-extension-wrap" id="pg-woo-advanced-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-woo-advanced-icon.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Extensions Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define Advanced WooCommerce integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Enhance the power of ProfileGrid\'s integration with WooCommerce by adding in integrations with WooCommerce extensions.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Extensions Integration End-->
    
    
        <!--EventPrime Integration-->
                
    <div class="pg-extension-wrap" id="pg-ep-integration-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-ep-integration.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'EventPrime Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure integration with events.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Create ProfileGrid Group Events by Integrating ProfileGrid User Groups with EventPrime Events. Use the power of EventPrime\'s amazing event management tools to create and manage your very own ProfileGrid Group Events.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/eventprime-integration" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--EventPrime Integration End-->
    
    
    <!--Advanced Group Manager-->
                
    <div class="pg-extension-wrap" id="pg-frontend-group-manager-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/frontend-group-manager.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Advanced Group Manager','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'More power to your group managers.!','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Offer more power and control to your Group Managers. They can edit Groups, approve membership requests, moderate blogs, manage users, etc. from a dedicated frontend Group management area.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Advanced Group Manager End-->
    
    
    <!--Multi Group Managers-->
                
    <div class="pg-extension-wrap" id="pg-multi-group-managers-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/multi-admins.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Multi Group Managers','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define additional group managers.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Don\'t stay limited to just one Manager per Group. Unlock the ability to have more than one Managers for your ProfileGrid User Groups now. With all of them sharing the same level of control.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Multi Group Managers End-->
    
    
    
        <!--ProfileGrid Profile Labels-->
                
    <div class="pg-extension-wrap" id="pg-user-labels-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-user-labels.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Profile Labels','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Add and edit label properties.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Allow user to add Profile Labels to their User Profiles as an additional way to list important information, such as user interests and/or designation.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--ProfileGrid Profile Labels End-->
    
    <!--Stripe Payment System-->
                
    <div class="pg-extension-wrap" id="pg-stripe-payment-system" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/stripe-logo.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Stripe Payment System','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Stripe Keys, Currency etc.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Start accepting credit cards on your site for Group memberships and registrations by integrating popular Stripe payment gateway.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Stripe Payment System End-->
    
    
        
    <!--Profile Status-->
                
    <div class="pg-extension-wrap" id="pg-profile_status" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/profile_status.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Profile Status','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Enable/ Disable Profile Status and set Profile Status visibility duration.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Now users can upload statuses to their user profiles. Users can view statuses on their own profiles and other users\' profiles.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Profile Status End-->
    
    
        <!--ProfileGrid Demo Content-->
                
    <div class="pg-extension-wrap" id="pg-import-demo-content" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/demo-content.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Demo Content','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Import demo content like groups fields and users.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'This dynamic extension enables admin to import demo content. The admin can also import these groups with multiple fields, sections and users. Moreover, the admins get an option to choose number of demo groups they want to import. This striking extension further allow admins to set demo profile pictures for the groups they want to import.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/profilegrid-demo-content" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--ProfileGrid Demo Content End-->
    
    
    <!--WooCommerce Product Integration-->
                
    <div class="pg-extension-wrap" id="pg-woo-product-integration" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/woocommerce-product-intregration.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Product Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define WooCommerce Product integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'This ravishing extension allows you to integrate WooCommerce products with ProfileGrid Groups. You can assign groups to your users based on the type of products they buy or the amount of purchase they make on WooCommerce.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Product Integration End-->
    
    
        <!--ProfileGrid Hero Banner-->
                
    <div class="pg-extension-wrap" id="pg-hero-banner-ext" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/hero-banner.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Hero Banner','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define which images to display on banner.','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'With the dynamic Hero Banner feature showcase your group profiles as a striking hero image on your WordPress website. You can add multiple rows and columns of your choice.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="https://profilegrid.co/extensions/profilegrid-hero-banner" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--ProfileGrid Hero Banner End-->
    
    
    <!--WooCommerce Subscription Integration-->
                
    <div class="pg-extension-wrap" id="pg-wooCommerce-subscription" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-wooCommerce-subscription.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Subscription Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define WooCommerce Product/Subscription integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Integrate WooCommerce product subscriptions with ProfileGrid Groups. Assign/Unassign the groups to the users based on WooCommerce subscription.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Subscription Integration End-->
    
    
    <!--WooCommerce Members Discount-->
                
    <div class="pg-extension-wrap" id="pg-woo-member-discount" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-member-discount.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'WooCommerce Members Discount','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Enable/Disable the Custom Discount on Products','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'This extension allows adding discounts on WooCommerce products purchase based on group membership. It allows enabling/disabling the discount on specific products. Discounts can be a fixed amount or a percentage of the product price.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--WooCommerce Members Discount End-->
    
    
        <!--Custom Product Tabs-->
                
    <div class="pg-extension-wrap" id="pg-woo-custom-tabs" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-woo-custom-tabs.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Custom Product Tabs','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Enable/Disable the Custom Product Tabs','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'This extension allows adding custom tabs on WooCommerce products. It allows enabling/disabling the custom tabs on specific products.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--Custom Product Tabs End-->
    
     <!--users online widget-->
                
    <div class="pg-extension-wrap" id="pg-users-online-widget" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/users-online-widget.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Users Online Widget','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Turn ProfileGrid Users Online Widget on/off','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Displays a list of currently online users with their profile images and display names.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    </div>
    
    <!--users online widget End-->
    
    <!--user activities widget-->
                
    <div class="pg-extension-wrap" id="pg-user-activities" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/user-activities-icon.png" class="options" alt="options"></div>
       <div class="pg-extension-modal-title"> <?php _e( 'User Activities','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Manage User activities','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Display various activities by different users inside a beautiful widget, that can fit any widget area of your website.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        <span><a href="https://profilegrid.co/extensions/profilegrid-user-activities/" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
        
    </div>
    
    <!--user activities widget End-->
    
    <!--woocommerce product recommendations-->
                
    <div class="pg-extension-wrap" id="pg-woo-product-recommendations" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/product-recommendations.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Woocommerce Product Recommendations','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define Woocommerce Product Recommendations integration parameters.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'Display product suggestions right inside user profiles based on the user’s purchase history.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <span><a href="admin.php?page=pm_extensions" target="_blank"><?php _e( 'Interested? Checkout more information','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    
        
    </div>
    
    <!--woocommerce product recommendations End-->
    
     <!--woocommerce product recommendations-->
                
    <div class="pg-extension-wrap" id="pg-recent-signup" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/recent-signup.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Recent Signup','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Displays a list of recently signup users','profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span></div>
       
        <div class="pg-extension-modal-des">
            <?php _e( 'A widget and a shortcode which allows you to display a pre-defined number of recently added users with profile images, and an option to add a custom link.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        <span><a href="https://profilegrid.co/extensions/profilegrid-recent-signup/" target="_blank"><?php _e( 'Download Now','profilegrid-user-profiles-groups-and-communities' ); ?></a></span>
        </div>
    
        
    </div>
    
    <!--woocommerce product recommendations End-->
    
    
    
    
        
    <!--Activated Extensions Popup-->
    
    <!--Menu Restrictions Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-menu-restrictions-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/menu_restrictions.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Menu Restrictions','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define groups to show/ hide menus.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-des">
            <?php _e( 'You can find options for this extension inside Dashboard &#8594; Appearance &#8594; Menus. When you edit or add a new menu item in one of your menus, you will now see a new option to show or hide it for specific group members. You can find more details', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
           <a href="https://profilegrid.co/apply-menu-restrictions/" target="_blank"><?php _e( 'here','profilegrid-user-profiles-groups-and-communities' ); ?></a>
        </div>
    </div>
    
    <!--Menu Restrictions Active End--> 
    
    
    
    <!--EventPrime Integration Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-ep-integration-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-ep-integration.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'EventPrime Integration','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Configure integration with events.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'You will find event specific group options on installing our EventPrime plugin. You can download and install it from the official WordPress repository by visiting <a href="https://wordpress.org/plugins/eventprime-event-calendar-management/" target="_blank">page</a> Once it is installed and activated, on creating or editing events, you will see options to tie the event to specific membership groups. You can find more details', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <a href="https://profilegrid.co/enable-users-to-create-group-events/" target="_blank"><?php _e( 'here','profilegrid-user-profiles-groups-and-communities' ); ?></a>
        </div>
    </div>
    
    <!--EventPrime Integration Active End-->
    
     <!--Stripe Payment Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-stripe-payment-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/stripe-logo.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Stripe Payment System','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Stripe Keys, Currency etc.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'Stripe specific options are available in Payments section of the Core Settings.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <a href="admin.php?page=pm_payment_settings"><?php _e( 'Go there now','profilegrid-user-profiles-groups-and-communities' ); ?></a>
        </div>
    </div>
    
    <!--Stripe Payment Active End-->
    
    
    
        <!--Advanced Group Manager Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-frontend-group-manager-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/frontend-group-manager.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Advanced Group Manager','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'More power to your group managers!','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'Congratulations, your group managers now have additional powers to moderate group content and members! Group managers will now see a new Settings tab on group pages.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        </div>
    </div>
    
    <!--Advanced Group Manager Active End-->
    
    
       <!--Multi Group Managers Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-multi-group-managers-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/multi-admins.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'Multi Group Managers','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define additional group managers.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'Now add more than one group manager to a single group! To do this, edit a group in your Dashboard &#8594; ProfileGrid &#8594; Groups. You will now see a new option to add additional group managers. You can find more details <a href="https://profilegrid.co/allow-multiple-group-managers-wordpress/" target="_blank">here</a>. If you have <a href="https://profilegrid.co/extensions/frontend-group-manager/" target="_blank">Advanced Group Manager</a> installed, current group managers can also add other members as managers. ', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        

        </div>
    </div>
    
    <!--Multi Group Managers Active End-->
    
    
    <!--ProfileGrid Profile Labels Active-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-user-labels-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/pg-user-labels.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Profile Labels','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Add and edit label properties.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'Your users can now add labels to their profiles to highlight additional information. The option will automatically appear when they edit their profiles.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
            <a href="https://profilegrid.co/allow-users-add-profile-labels/" target="_blank"><?php _e( 'Here are more details about this feature.','profilegrid-user-profiles-groups-and-communities' ); ?></a>
        </div>
    </div>
    
    <!--ProfileGrid Profile Labels Active End-->
    
    
    
    <!--ProfileGrid Hero Banner-->
                
    <div class="pg-extension-wrap pg-extension-active" id="pg-hero-banner-ext-active" style="display: none">
    <div class="pg-extension-modal-icon"> <img src="<?php echo $path;?>images/hero-banner.png" class="options" alt="options"></div>
       
        <div class="pg-extension-modal-title"> <?php _e( 'ProfileGrid Hero Banner','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-subhead"><?php _e( 'Define which images to display on banner.','profilegrid-user-profiles-groups-and-communities' ); ?></div>
        <div class="pg-extension-modal-active-extension"><?php _e( '<strong>Congratulations</strong>, you have successfully installed and activated this extension!','profilegrid-user-profiles-groups-and-communities' ); ?></div>

        <div class="pg-extension-modal-des">
            <?php _e( 'You can now add banners on your website which show profile images of your users as attractive grids! Just head on to Dashboard &#8594; Appearance &#8594; Widgets, and find a new widget named ProfileGrid Hero Banner. It has a bunch of configurable option to match your site’s look and theme and can fit inside any widget position. <a href="https://profilegrid.co/add-user-hero-banner-wordpress/" target="_blank"> Learn more.</a> ', 'profilegrid-user-profiles-groups-and-communities' ); ?>
        
        </div>
    </div>
    
    <!--ProfileGrid Hero Banner End-->
                
<?php do_action('activated_extension_popup'); ?>
    
    <!--Activated Extensions Popup End-->
    
    
    
    
    
    

            </div>
        </div>
    </div>



  <script>
  jQuery('.pg-extension-modal').click(function(){
    jQuery('.pg-extension-wrap').hide();
    jQuery('#' + jQuery(this).attr('data-popup')).show();
 });
  
  
  function CallExtensionModal(ele) {
    jQuery("#pg-setting-popup").toggle();
    jQuery('.pg-setting-modal-wrap').removeClass('pg-setting-popup-out');
    jQuery('.pg-setting-modal-wrap').addClass('pg-setting-popup-in');
    jQuery('.pg-setting-modal-overlay').removeClass('pg-setting-popup-overlay-fade-out');
    jQuery('.pg-setting-modal-overlay').addClass('pg-setting-popup-overlay-fade-in');
       
}


    
    
       jQuery(document).ready(function () {
        jQuery('.pg-setting-modal-close, .pg-setting-modal-overlay').click(function () {
            setTimeout(function () {
                //jQuery(this).parents('.rm-modal-view').hide();
                jQuery('.pg-setting-modal-view').hide();
            }, 400);
                    });
            jQuery('.pg-setting-modal-close, .pg-setting-modal-overlay').on('click', function () {
            jQuery('.pg-setting-modal-wrap').removeClass('pg-setting-popup-in');
            jQuery('.pg-setting-modal-wrap').addClass('pg-setting-popup-out');

            jQuery('.pg-setting-modal-overlay').removeClass('pg-setting-popup-overlay-fade-in');
            jQuery('.pg-setting-modal-overlay').addClass('pg-setting-popup-overlay-fade-out');
        });





       
    });


  
  
  </script>