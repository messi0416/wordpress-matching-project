<?php
$dbhandler = new PM_DBhandler;
$pmrequests = new PM_request;
$profile_tabs = $pmrequests->pm_profile_tabs();

//var_dump($profile_tabs);
?>
<div class="pm-profile-tabs pm-dbfl" id="pg-profile-tabs">
  <div class="pm-section-nav-horizental pm-dbfl">
    <ul class="mymenu pm-difl pm-profile-tab-wrap pm-border-bt">
      <?php
      if (!empty($profile_tabs)) :
        foreach ($profile_tabs as $key => $tab) :

          // add by Cravel start
          /**
           * グループタブを非表示にする
           * 
           * @since  1.0.0
           * @author Cravel <cravel@cravelweb.com>
           */
          // TODO:設定から変更可能のため実装コードをコメントアウト
          //if (($tab['title'] != 'Groups') && ($tab['title'] != 'グループ')) {
            $pmrequests->generate_profile_tab_links($tab['id'], $tab, $uid, $gid, $primary_gid);
          //}
        // add by Cravel end

        endforeach;
      endif;
      ?>
      <?php do_action('profile_magic_profile_tab', $uid, $primary_gid); ?>
    </ul>
  </div>

  <?php
  if (!empty($profile_tabs)) :
    foreach ($profile_tabs as $key => $tab) :
      $pmrequests->generate_profile_tab_content($tab['id'], $tab, $uid, $gid, $primary_gid);
    endforeach;
  endif;
  ?>
  <?php do_action('profile_magic_profile_tab_content', $uid, $primary_gid); ?>

</div>