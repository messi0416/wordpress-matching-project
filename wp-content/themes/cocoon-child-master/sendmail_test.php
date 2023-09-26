<?php

require_once('../../../wp-load.php');
require_once('../../plugins/profilegrid-user-profiles-groups-and-communities/profile-magic.php');

$current_user = wp_get_current_user();
$sid = $rid = $current_user->ID;
$pmemail = new PM_Emails;
$pmemail->pm_send_unread_message_notification($sid,$rid);
?>
<div>【テスト1】ユーザーID：<?=$current_user->ID?>／メールアドレス：<?=$current_user->user_email?>あてにメールを送信しました。</div>


