/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


jQuery('.soundcloud_play_button_color').wpColorPicker();
jQuery(document).ready(function() {
  jQuery(".pg_profile_tab").click(function() {
    jQuery(this).children(".pm-slab-buttons").children('span').toggleClass("dashicons-arrow-up");  
    jQuery(this).next(".pg_profile_tab-setting").slideToggle();
  });
});

 jQuery(document).ready(function(){
     jQuery('.pg-upgrade-banner').mouseenter(function() {
         jQuery('.pg-upgrade-banner-box').addClass('pg-banner-hop');
         jQuery(this).siblings().addClass('pg-blur');
    });
     jQuery('.pg-upgrade-banner').mouseleave(function() {
         jQuery('.pg-upgrade-banner-box').removeClass('pg-banner-hop');
         jQuery(this).siblings().removeClass('pg-blur');
    });
 });