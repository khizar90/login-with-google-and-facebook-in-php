<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'C:\xampp\htdocs\learnPHP\loginwithgoogle\vendor\autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('560406691703-vd9vflbnephr21sb8sadsaui7o1n34hf.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:8080/learnPHP/loginwithgoogle/googleapi/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 