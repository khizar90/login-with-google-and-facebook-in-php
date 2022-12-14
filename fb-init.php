<?php
require_once __DIR__ . '/vendor/autoload.php'; 

define('APP_ID', '457836546499940');
define('APP_SECRET', 'f63d747904308fe76622b1c3e3890b44');
define('API_VERSION', 'v2.10');
define('FB_BASE_URL', 'ENTER_URL');

define('BASE_URL', 'http://localhost:8080/learnPHP/loginwithfacebook/index.php');

if(!session_id()){
    session_start();
}


// Call Facebook API
$fb = new Facebook\Facebook([
 'app_id' => APP_ID,
 'app_secret' => APP_SECRET,
 'default_graph_version' => API_VERSION,
]);


// Get redirect login helper
$fb_helper = $fb->getRedirectLoginHelper('http://localhost:8080/learnPHP/loginwithfacebook/index.php');
// $login_url = $helper->getLoginUrl("http://localhost:8080/learnPHP/loginwithfacebook/");


// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token']))
		{$accessToken = $_SESSION['facebook_access_token'];}
	else
		{$accessToken = $fb_helper->getAccessToken();}
} catch(FacebookResponseException $e) {
     echo 'Facebook API Error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK Error: ' . $e->getMessage();
      exit;
}

?>

