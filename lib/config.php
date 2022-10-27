<?php
ini_set('display_errors', 'On');
error_reporting(0);
session_start();

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '1234';
$dbName = 'cp595068_berkimleng';

header('Content-Type: text/html; charset=utf-8');
const config_web_title = "DBS(v2) By Wallock";

date_default_timezone_set("Asia/Bangkok");
