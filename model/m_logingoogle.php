<?php
ob_start();
include_once "config.php";
include_once 'google_login/vendor/autoload.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId(clientID);
$client->setClientSecret(clientSecret);
$client->setRedirectUri(redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ymd = date('Y:m:d');
  $mahoagg = md5(1);
  $kiemtra = user_signin($email,$mahoagg);
  if($kiemtra){
    $_SESSION['user'] = user_signin($email,$mahoagg);
    header('location: ?mod=page&act=home');
  }else{
    user_signup($name,$email,$mahoagg,$ymd);
    $_SESSION['user'] = user_signin($email,$mahoagg);
    header('location: ?mod=page&act=home');
  }
} 
// else {
//   echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
// }
?>