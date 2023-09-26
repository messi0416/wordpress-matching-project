<?php
$path =  plugin_dir_url(__FILE__);
?>




<div class="pg-promo-nav-tabs">
    
<h2 class="nav-tab-wrapper" id="pg-promo-tabs">
    <a href="javascript:void(0)" id="tab1" class="nav-tab nav-tab-active">  Profile Labels </a>
    <a href="javascript:void(0)" id="tab2" class="nav-tab">Custom Tabs List </a>
    </h2>
</div>

 <div class="pg-promo-nav-container" id="tab1C">
               
 
    
    
<?php if(!class_exists('Profilegrid_Profile_Labels')):?>
    <div class="pmagic"> 
        
    <div class="pg-upgrade-banner">        
        <div class="pg-upgrade-banner-title">This is a preview of pages added to ProfileGrid when you upgrade to Premium Bundle.<span><a href="admin.php?page=pm_extensions" target="_blank">More Info</a></span></div>
        <div class="pg-upgrade-banner-box"><img src="<?php echo $path;?>images/pg-premium-img.png">
        </div>
    </div>
     
<div class="pmagic-table"> 
      
      <div class="pmtitle">
           </div>
      
      <table class="pg-email-list">
        <tbody><tr>
          <th>&nbsp;</th>
          <th>SR</th>
          <th>Label Title</th>
          <th>Border Color</th>
          <th>Fill Color</th>
          <th>Action</th>
        </tr>
                <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="3" disabled></td>
          
          <td>1</td>
          <td>Community Manager</td>
          <td>#49992f</td>
          <td>#93a848</td>
          <td><a>Edit</a></td>
        </tr>
                <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="4" disabled></td>
          
          <td>2</td>
          <td>Open Social Staff</td>
          <td>#ffffff</td>
          <td>#81d742</td>
          <td><a>Edit</a></td>
        </tr>
                <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="5" disabled></td>
          
          <td>3</td>
          <td>National Assurance Engineer</td>
          <td>#000000</td>
          <td>#dd9933</td>
          <td><a>Edit</a></td>
        </tr>
                <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="6" disabled></td>
          
          <td>4</td>
          <td>Water Slide Tester</td>
          <td>#1e73be</td>
          <td>#eeee22</td>
          <td><a>Edit</a></td>
        </tr>
        
        <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="6" disabled></td>
          
          <td>5</td>
          <td>Marketing Rock Star</td>
          <td>#1e73be</td>
          <td>#eeee22</td>
          <td><a>Edit</a></td>
        </tr>
        
         <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="6" disabled></td>
          
          <td>6</td>
          <td>Problem Wrangler</td>
          <td>#1e73be</td>
          <td>#eeee22</td>
          <td><a>Edit</a></td>
        </tr>
        
        <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="6" disabled></td>
          
          <td>7</td>
          <td>District Accountability Engineer </td>
          <td>#1e73be</td>
          <td>#eeee22</td>
          <td><a>Edit</a></td>
        </tr>
        
        <tr>
            <td><input type="checkbox" name="selected[]" class="pg-selected-email-tmpl" value="6" disabled></td>
          
          <td>8</td>
          <td>Chief Brand Agent</td>
          <td>#1e73be</td>
          <td>#eeee22</td>
          <td><a>Edit</a></td>
        </tr>
        
        
              </tbody></table>
    </div> 
        
    </div>
<?php endif; ?>
           
           
</div>
    
    
<div class="pg-promo-nav-container" id="tab2C">
 <?php if(!class_exists('Profilegrid_User_Content')):?> 
    
  <div class="pmagic">   
    
  <div class="pg-upgrade-banner">        
            <div class="pg-upgrade-banner-title">This is a preview of pages added to ProfileGrid when you upgrade to Premium Bundle.<span><a href="admin.php?page=pm_extensions" target="_blank">More Info</a></span></div>
        <div class="pg-upgrade-banner-box"><img src="<?php echo $path;?>images/pg-premium-img.png">
        </div>
    </div> 
    
<div class="pmagic-table"> 
      
    <div class="pmtitle">
            </div>
      
      <table class="pg-email-list">
        <tbody><tr>
          <th>&nbsp;</th>
            <th>&nbsp;</th>
          <th>SR</th>
          <th>Name</th>
          <th>Action</th>
        </tr>
                <tr>
          <td><input type="checkbox" name="selected[]" value="1" disabled></td>
          <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
          <td>1</td>
          <td>Download</td>
          <td><a>
            Edit            </a></td>
        </tr>
                <tr>
          <td><input type="checkbox" name="selected[]" value="3" disabled></td>
          <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
          <td>2</td>
          <td>Job Posting</td>
          <td><a>
            Edit            </a></td>
        </tr>
                <tr>
          <td><input type="checkbox" name="selected[]" value="4" disabled></td>
          <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
          <td>3</td>
          <td>My Events</td>
          <td><a>
            Edit            </a></td>
        </tr>
                <tr>
          <td><input type="checkbox" name="selected[]" value="5" disabled></td>
          <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
          <td>4</td>
          <td>My Purchases</td>
          <td><a>
            Edit            </a></td>
        </tr>
        
             <tr>
          <td><input type="checkbox" name="selected[]" value="6" disabled></td>
          <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
          <td>4</td>
          <td>My Products</td>
          <td><a>
            Edit            </a></td>
        </tr>
        
              </tbody></table>
    </div> 
    
  </div> 
 <?php endif; ?>   
          
          
 </div>

    

    

    





    
    <script>

(function($){ 
    
$(document).ready(function() {    
$('#pg-promo-tabs a:first').addClass('nav-tab-active');
$('#pg-promo-tabs a:not(:first)').addClass('nav-tab-inactive');
$('.pg-promo-nav-container').hide();
$('.pg-promo-nav-container:first').show();
    
$('#pg-promo-tabs a').click(function(){
    var t = $(this).attr('id');
  if($(this).hasClass('nav-tab-inactive')){ 
    $('#pg-promo-tabs a').addClass('nav-tab-inactive');           
    $(this).removeClass('nav-tab-inactive');
    $(this).addClass('nav-tab-active');
    
    $('.pg-promo-nav-container').hide();
    $('#'+ t + 'C').fadeIn('slow');
 }
  });

});   
    
})(jQuery);




</script>