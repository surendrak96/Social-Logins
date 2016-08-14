<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '96440weweqe8006817-mgkprqcbi8j7958qf29kt6o1oche5qd3.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'sr3Ssrg2CVjIMvcku1V1A-gPr'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/googlelogin/';  //return url (url to script)
$homeUrl = 'http://localhost/googlelogin/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('GoogleTest');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>