<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '964408006817-mgkprqcbi8j7958qf29kt6o1oche5qd3.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'sr3Srg2CVjIMvcku1V1A-gPr'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/login-with-google-using-php/';  //return url (url to script)
$homeUrl = 'http://localhost/login-with-google-using-php/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('ielanat');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>