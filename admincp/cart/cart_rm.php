<?php 
if (!$_GET['Gpid']) {
    $_GET['Gpid'] = '';
 } elseif ($_GET['Gpid'] != null) {
    foreach ($_GET as $key => $value) {
       $_GET[$key] = addslashes(strip_tags(trim($value)));
    }
    if ($_GET['id'] != '') {
       $_GET['id'] = (int) $_GET['id'];
    }
    extract($_GET);
 } else {
    $_GET['Gpid'] = '';
 }
 $str = $_GET['Gpid'];
 remove_book($str);
?>