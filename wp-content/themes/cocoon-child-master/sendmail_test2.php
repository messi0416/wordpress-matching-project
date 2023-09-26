<?php

require_once('../../../wp-load.php');
date_default_timezone_set('Asia/Tokyo');

$subject = 'wp_mailテストです：'.date('Y/n/j H:i');
$message = 'これはテストメールです：'.date('Y/n/j H:i');
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type:text/html;charset=UTF-8\r\n";
$headers .= 'From:'.$from_email_address. "\r\n";
$current_user = wp_get_current_user();
$user_email = $current_user->user_email;


$multiple_recipients = array(
  $user_email,
  'cravel@cravelweb.com'
);

wp_mail( $multiple_recipients, $subject, $message, $headers );

?>
<div>【テスト2】ユーザーID：<?=$current_user->ID?>／メールアドレス：<?=$current_user->user_email?>とcravel@cravelweb.comあてにメールを送信しました。</div>


