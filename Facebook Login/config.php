<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########

$appId = '806176029513535'; //Facebook App ID

$appSecret = '52348db925dc326b2754889f8ca2d4ef'; // Facebook App Secret
$homeurl = 'http://localhost/fblogin/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>