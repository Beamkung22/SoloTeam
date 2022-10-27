<?php
session_start();

require_once('LineLogin.php');
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

$line = new LineLogin();
$get = $_GET;

$code = $get['code'];
$state = $get['state'];
$token = $line->token($code, $state);

if (property_exists($token, 'error'))
   header('location: line_login.php');

if ($token->id_token) {
   $profile = $line->profileFormIdToken($token);
   $_SESSION['profile'] = $profile;

   $profilex = $line->profile($token->access_token);

   $_SESSION['profile_token'] = addslashes(trim($profilex->userId));
   $_SESSION['profile_name'] = addslashes(trim($profile->name));
   $_SESSION['profile_picture'] = addslashes(trim($profile->picture));
   $_SESSION['profile_email'] = addslashes(trim($profile->email));

   checklogin_line();
}

function checklogin_line()
{
   $sql = "SELECT * FROM user WHERE UserID ='" . $_SESSION['profile_token'] . "' AND User_email ='" .  $_SESSION['profile_email'] . "'";
   $result = dbQuery($sql);
   $row = dbFetchAssoc($result);
   if (!$row) {
      register_line($row);
   } else {
      login_lineauto($row);
   }
}

function register_line()
{
   $strSQLinfo = "INSERT INTO user (UserID,Username,User_picture,User_email,User_joindate,User_lastlogin) 
      VALUES ('" . $_SESSION['profile_token'] . "',
            '" . $_SESSION['profile_name'] . "',
            '" . $_SESSION['profile_picture'] . "',
            '" .  $_SESSION['profile_email'] . "',
            '" . trim(date("Y-m-d H:i:s")) . "',
            '" . trim(date("Y-m-d H:i:s")) . "'
            )";
   $objQueryinfo = dbQuery($strSQLinfo);
   checklogin_line();
}

function login_lineauto($row)
{
   session_start();
   $ssid = session_id();
   $user_id = $row['NoUID'];
   $_SESSION['ssid'] = $ssid;
   $_SESSION['NoUID'] = $row['NoUID'];
   $sqldate = "UPDATE user SET User_lastlogin = '" . trim(date("Y-m-d H:i:s")) . "' WHERE NoUID= '$user_id'";
   $resultdate = dbQuery($sqldate);
   header('location: /');
}
