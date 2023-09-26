<?php
$path =  plugin_dir_url(__FILE__);
$pmrequest = new PM_request();
$deactivate_extensions = $pmrequest->pg_check_premium_extension();
?>
<?php if(!in_array('Profilegrid_Menu_Restriction',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-menu-restrictions-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/menu_restrictions.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Menu Restrictions','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define groups to show/ hide menus.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
   </div>
<?php endif;?>
<?php if(!in_array('Profilegrid_EventPrime_Integration',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-ep-integration-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-ep-integration.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'EventPrime Integration','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Configure integration with events.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(!in_array('Profilegrid_Stripe_Payment',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-stripe-payment-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/stripe-logo.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Stripe Payment System','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Stripe Keys, Currency etc.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>

<?php if(!in_array('Profilegrid_Admin_Power',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-frontend-group-manager-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/frontend-group-manager.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Advanced Group Manager','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'More power to your group managers!', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(!in_array('Profilegrid_Group_Multi_Admins',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-multi-group-managers-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/multi-admins.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'Multi Group Managers','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define additional group managers.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(!in_array('Profilegrid_Profile_Labels',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-user-labels-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/pg-user-labels.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Profile Labels','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Add and edit label properties.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>
<?php if(!in_array('Profilegrid_Hero_Banner',$deactivate_extensions)):?>
<div class="uimrow pg-no-setting-extension pg-extension-modal" data-popup="pg-hero-banner-ext-active" onclick="CallExtensionModal(this)">
  <div class="pm_setting_image"> <img src="<?php echo $path;?>images/hero-banner.png" class="options" alt="options"> </div>
  <div class="pm-setting-heading"> <span class="pm-setting-icon-title">
    <?php _e( 'ProfileGrid Hero Banner','profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> <span class="pm-setting-description">
    <?php _e( 'Define which images to display on banner.', 'profilegrid-user-profiles-groups-and-communities' ); ?>
    </span> </div>
</div>
<?php endif;?>