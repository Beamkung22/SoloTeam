<?php
require_once 'db.php';


function rank_level($exp)
{
    $sqluser = "SELECT * FROM rank_system WHERE rank_exp <='$exp'";
    $resultuser = dbQuery($sqluser);
    $i = 0;
    while ($rowuser = dbFetchAssoc($resultuser)) {
        $i++;
    }
    return $i;
}

function rank_name($exp)
{
    $sqluser = "SELECT * FROM rank_system WHERE rank_exp <='$exp'";
    $resultuser = dbQuery($sqluser);
    $i = 0;
    while ($rowuser = dbFetchAssoc($resultuser)) {
        $i++;
    }
    return level_name($i);
}

function level_name($level)
{
    $sqluser = "SELECT * FROM rank_system WHERE rank_id ='$level'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    return $rowuser['rank_name'];
}

function level_max($level)
{
    $ans = $level + 1;
    $sqluser = "SELECT * FROM rank_system WHERE rank_id =$ans";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        return 'MAX';
    } else {
        return $rowuser['rank_exp'];
    }
}

function level_min($level)
{
    $ans = $level - 1;
    if ($ans == 0) {
        $ans = '0';
    }
    $sqluser = "SELECT * FROM rank_system WHERE rank_id ='$level'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    return $rowuser['rank_exp'];
}

?>
<!-- exp-->