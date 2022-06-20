<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('276325788527-h5i3ssge70j3ss9bv6lni0jpgp1iva6t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('Y7xoIIcagEgDkp1QPDvnntpR');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/tpgrupal/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
