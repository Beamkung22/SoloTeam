<?php
require_once 'config.php';
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
$mysqli = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
mysqli_set_charset($dbConn, "utf8");
mysqli_query($dbConn, "set character set utf8");

function dbQuery($sql)
{
   global $dbConn;
   return mysqli_query($dbConn, $sql);
}
function dbAffectedRows()
{
   global $dbConn;
   return mysqli_affected_rows($dbConn);
}
function dbFetchArray($result, $resultType = MYSQLI_NUM)
{
   return mysqli_fetch_array($result, $resultType);
}
function dbFetchAssoc($result)
{
   return mysqli_fetch_assoc($result);
}
function dbFectchRow($result)
{
   return mysqli_fetch_row($result);
}
function dbFreeResult($result)
{
   return mysqli_free_result($result);
}
function dbNumRows($result)
{
   return mysqli_num_rows($result);
}
