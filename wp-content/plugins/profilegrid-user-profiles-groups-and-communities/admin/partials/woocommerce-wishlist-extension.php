<?php
$path = plugin_dir_url(__FILE__);
$url = 'https://profilegrid.co/extensions/woocommerce-wishlist/';
?>
<div class="uimagic">
    <form name="pm_woocommerce_extension" id="pm_woocommerce_extension" method="post">
        <!-----Dialogue Box Starts----->
        <div class="content">
           
                <div class="uimheader">
                    <?php _e('WooCommerce Wishlist','profilegrid-user-profiles-groups-and-communities'); ?>
                </div>
    
        
            
            <div class="uimrow">
                
                <div class="update-nag">
                 <?php
                 echo sprintf(__('Add WooCommerce products to your Wishlist. Your <a target="_blank" href="%s">WooCommerce Wishlist</a> will be visible on your ProfileGrid User Profile from where you can manage it completely.','profilegrid-user-profiles-groups-and-communities'),$url);
                 ?>
                </div>
            </div>
            
            <div class="uimrow">
                <img class="pg-woocommerce-extension-img" src="<?php echo $path.'images/pg-woocommerce-wishlist-extension.png';?>"
            </div>

            <div class="buttonarea"> <a href="admin.php?page=pm_settings">
                    <div class="cancel">&#8592; &nbsp;
<?php _e('Cancel','profilegrid-user-profiles-groups-and-communities'); ?>
                    </div>
                </a>
                
            </div>
        </div>
</div>
    </form>
</div>
