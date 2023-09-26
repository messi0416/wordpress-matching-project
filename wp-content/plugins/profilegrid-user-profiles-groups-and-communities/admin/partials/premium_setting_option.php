<?php
$path =  plugin_dir_url(__FILE__);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$pmrequest = new PM_request();
$deactivate_extensions = $pmrequest->pg_check_premium_extension();
        
?>

<?php if(!empty($deactivate_extensions)):?>

<?php if(in_array('Profilegrid_Userid_Slug_Changer',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-custom-profile-slugs" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/userid_slug.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Custom Profile Slugs','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Edit and define slugs in profile permalinks.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
  </div>
<?php endif; ?>

<?php if(in_array('Profilegrid_Group_photos',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-group-photos" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/group-photos.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Group Photos','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Turn Group Photos on/ off.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
   </div>
<?php endif; ?>
<?php if(in_array('Profilegrid_Display_Name',$deactivate_extensions)):?>

<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-display-name" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/display_name.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'User Display Names','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Customize display names, define patterns.', 'profilegrid-user-profiles-groups-and-communities' ); ?> 
    <span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
  </div>
 <?php endif;?>

 <?php if(in_array('Profilegrid_Group_Fields',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-custom-group-fields" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/group-custom-fields.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Custom Group Fields','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Customized group fields.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> 
  </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Bbpress',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-bbPress-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/bbpress.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title" style="text-transform: none;">
    <?php _e( 'bbPress Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure bbPress related settings.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> 
  </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Geolocation',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-geolocation" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/geolocation.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Geolocation','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Map APIs and settings.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Front_End_Groups',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-frontend-group" onclick="CallExtensionModal(this)"> 
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/frontend-group.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Frontend Group Creator','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Customized Front End Groups.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> 
  </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Mailchimp',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-mailchimp-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-mailchimp.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'MailChimp','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Enable or disable MailChimp integration.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> 
  </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Woocommerce',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-woocommerce-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-woocommerce.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define WooCommerce integration parameters.', 'profilegrid-user-profiles-groups-and-communities' ); ?> <span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> 
  </div> 
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Social_Connect',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-social-login" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/social-connect.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Social Login','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure social networks.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> 
  </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_User_Content',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-custom-Profile-tabs" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/custom-profile-tab.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Custom Profile Tabs','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Display user authored custom post type data or shortcode.", "profilegrid-user-profiles-groups-and-communities" ); ?>
    </span> </div>
 </div>
<?php endif;?>


<?php if(in_array('Profilegrid_Mycred',$deactivate_extensions)):?>

<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-mycred-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-mycred-integration.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'myCRED','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Integrate myCRED with User Profiles.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
   </div>
<?php endif;?>

<?php if(in_array('Profilegrid_User_Photos_Extension',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-user-photos-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/user_photos.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'User Photos','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure Photos and Photo Albums for User Profiles.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
   </div>
 <?php endif;?>

  <?php if(in_array('Profilegrid_Menu_Restriction',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-menu-restrictions-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/menu_restrictions.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Menu Restrictions','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define groups to show/ hide menus.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
   </div>
    <?php endif;?>

 <?php if(in_array('Profilegrid_Woocommerce_Wishlist',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-wishlist-woocommerce" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-wishlist-woocommerce.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Wishlist','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define WooCommerce Wishlist integration parameters.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
  </div>
<?php endif;?>

<?php if(in_array('Profilegrid_Instagram_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-instagram-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-instagram.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Instagram','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure Instagram Integration.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Group_Wall',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-groupwall-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-groupwall.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Group Wall','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configuration for Group Wall Extension.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Menu_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-login-logout-menu-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-logout-icon.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Login Logout Menu','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure menu items.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Advanced_Woocommerce',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-woo-advanced-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-woo-advanced-icon.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Extensions Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define Advanced WooCommerce integration parameters.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_EventPrime_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-ep-integration-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-ep-integration.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'EventPrime Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure integration with events.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Admin_Power',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-frontend-group-manager-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/frontend-group-manager.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Advanced Group Manager','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'More power to your group managers!', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Group_Multi_Admins',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-multi-group-managers-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/multi-admins.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Multi Group Managers','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define additional group managers.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Profile_Labels',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-user-labels-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-user-labels.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Profile Labels','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Add and edit label properties.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Stripe_Payment',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-stripe-payment-system" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/stripe-logo.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Stripe Payment System','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Stripe Keys, Currency etc.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_User_Profile_Status',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension  pg-extension-modal" data-popup="pg-profile_status" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/profile_status.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Profile Status','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Enable/ Disable Profile Status and set Profile Status visibility duration.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
  </div>
<?php endif;?>
<?php if(in_array('Profilegrid_Demo_Content',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-import-demo-content" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/demo-content.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Demo Content','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Import demo content like groups fields and users.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Woocommerce_Product_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-woo-product-integration" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/woocommerce-product-intregration.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Product Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define WooCommerce Product integration parameters.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Hero_Banner',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-hero-banner-ext" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/hero-banner.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Hero Banner','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define which images to display on banner.', 'profilegrid-user-profiles-groups-and-communities' ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('Profilegrid_Woocommerce_Subscription_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-wooCommerce-subscription" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-wooCommerce-subscription.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Subscription Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define WooCommerce Product/Subscription integration parameters.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
  </div>
<?php endif;?>

<?php if(in_array('profilegrid_woocommerce_product_members_discount',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension  pg-extension-modal" data-popup="pg-woo-member-discount" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-member-discount.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'WooCommerce Members Discount','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Enable/Disable the Custom Discount on Products.", "profilegrid-user-profiles-groups-and-communities" ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(in_array('profilegrid_woocommerce_product_custom_tabs',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-woo-custom-tabs" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-woo-custom-tabs.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Custom Product Tabs','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Enable/Disable the Custom Product Tabs.", "profilegrid-user-profiles-groups-and-communities" ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Active_Members_Widget',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-users-online-widget" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/users-online-widget.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Users Online Widget','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Turn ProfileGrid Users Online Widget on/off.", "profilegrid-user-profiles-groups-and-communities" ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_User_Activities',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-user-activities" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/user-activities-icon.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'User Activities','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Manage user activities.", "profilegrid-user-profiles-groups-and-communities" ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>

<?php if(in_array('Profilegrid_Woocommerce_Product_Recommendations',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-woo-product-recommendations" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/product-recommendations.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Woocommerce Product Recommendations','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Define Woocommerce Product Recommendations integration parameters.", "profilegrid-user-profiles-groups-and-communities" ); ?>
    </span> </div>
</div>
<?php endif;?>


<?php if(in_array('Profilegrid_Recent_Signup',$deactivate_extensions)):?>
<div class="uimrow pg-inactive-extension pg-extension-modal" data-popup="pg-recent-signup" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/recent-signup.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Recent Signup','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( "Displays a list of recently signup users.", "profilegrid-user-profiles-groups-and-communities" ); ?><span class="pg-ext-label"><?php _e( 'Free', 'profilegrid-user-profiles-groups-and-communities' ); ?> </span>
    </span> </div>
</div>
<?php endif;?>


<?php endif; ?>
