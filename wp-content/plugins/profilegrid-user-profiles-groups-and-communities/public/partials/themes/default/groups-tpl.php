<?php $dbhandler = new PM_DBhandler;
$pmrequests = new PM_request;
?>
<div class="pmagic">
  <div class="pm-group-container pm-dbfl">
      
       <div class="pg-group-filters-head pm-dbfl pm-bg">
        <div class="pg-group-filter-ls pg-members-sortby pm-difl ">
            <div class="pg-sortby-alpha pm-difl">
               
            <span class="pg-sort-dropdown pm-border pm-difl">
                <select class="pg-custom-select" name="group_sort_by" id="group_sort_by" onchange="pm_get_all_groups(1)">
<!--                    <option value="member_high_low"><?php _e('Members (High-Low)', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="member_low_high"><?php _e('Members (Low-High)', 'profilegrid-user-profiles-groups-and-communities'); ?></option>-->
                    <option value="newest"><?php _e('Newest', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="oldest"><?php _e('Oldest', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="name_asc"><?php _e('Alphabetical (A-Z)', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    <option value="name_desc"><?php _e('Alphabetical (Z-A)', 'profilegrid-user-profiles-groups-and-communities'); ?></option>
                    
                </select>
            </span>
                </div>
            
        </div>
      
        <div class="pg-group-filter-rs pm-difr">
           <div class="pm-difl pg-members-sortby">
                <span class="pg-sort-view">
                    <span><input type="radio" id="pg_grid_view" name="pg_groups_view" class="" value="grid" checked="checked" onclick="pm_get_all_groups(1)"/>
                    <label for="pg_grid_view" class="pg-select-list-view"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M4 11h5V5H4v6zm0 7h5v-6H4v6zm6 0h5v-6h-5v6zm6 0h5v-6h-5v6zm-6-7h5V5h-5v6zm6-6v6h5V5h-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg></label>
                    </span>
                    <span> <input type="radio" id="pg_list_view" name="pg_groups_view" class="" value="list" onclick="pm_get_all_groups(1)" />
                    <label for="pg_list_view"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M4 14h4v-4H4v4zm0 5h4v-4H4v4zM4 9h4V5H4v4zm5 5h12v-4H9v4zm0 5h12v-4H9v4zM9 5v4h12V5H9z"/><path d="M0 0h24v24H0z" fill="none"/></svg></label>
                    </span>
                </span>

            </div>
            <div class="pg-group-search pm-difl"><input type="text" name="group_search" id="group_search" placeholder="<?php _e('Search', 'profilegrid-user-profiles-groups-and-communities'); ?>" onkeyup="pm_get_all_groups(1)"></div>
        </div>

    </div>   
      
      
   <div class="pm-all-group-container pm-dbfl">
    <?php
    $pmrequests->pm_get_all_groups_data();
    ?>
</div>

  </div>
</div>
