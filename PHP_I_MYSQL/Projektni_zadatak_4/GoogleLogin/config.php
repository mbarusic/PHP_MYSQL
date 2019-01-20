<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("323194045867-069opd81ritq1bn8m3ep7jn2hg411433.apps.googleusercontent.com");
	$gClient->setClientSecret("uQWc55KD1-2R-_dtwdzmgktw");
	$gClient->setApplicationName("Google Prijava");
	$gClient->setRedirectUri("http://localhost/PHP_I_MYSQL/Projektni_zadatak_4/GoogleLogin/site/index.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
