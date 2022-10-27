<?php
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

function config_all($config)
{
    $sqluser = "SELECT * FROM config WHERE config_ID = '$config'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    return $rowuser['config_detail'];
}


function getIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function datediff($start, $end)
{

    $datediff = strtotime($end) - strtotime($start);
    return floor($datediff / (60 * 60 * 24));
}

function dateform($date)
{

    $d = explode('/', $date);
    return $d[2] . '-' . $d[1] . '-' . $d[0];
}

function thai_date($time)
{
    $thai_month_arr = array(
        "0" => "",
        "1" => "มกราคม",
        "2" => "กุมภาพันธ์",
        "3" => "มีนาคม",
        "4" => "เมษายน",
        "5" => "พฤษภาคม",
        "6" => "มิถุนายน",
        "7" => "กรกฎาคม",
        "8" => "สิงหาคม",
        "9" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม"
    );
    $thai_date_return = "" . date("j", $time);
    $thai_date_return .= " " . $thai_month_arr[date("n", $time)];
    $thai_date_return .= " " . (date("Y", $time) + 543);
    $thai_date_return .= " - เวลา " . date("H:i", $time) . " น.";
    return $thai_date_return;
}

function thai_date_notime($time)
{
    $thai_month_arr = array(
        "0" => "",
        "1" => "มกราคม",
        "2" => "กุมภาพันธ์",
        "3" => "มีนาคม",
        "4" => "เมษายน",
        "5" => "พฤษภาคม",
        "6" => "มิถุนายน",
        "7" => "กรกฎาคม",
        "8" => "สิงหาคม",
        "9" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม"
    );
    $thai_date_return = "" . date("j", $time);
    $thai_date_return .= " " . $thai_month_arr[date("n", $time)];
    $thai_date_return .= " " . (date("Y", $time) + 543);
    return $thai_date_return;
}

function getProfilePicture($name)
{
    $images = "https://ui-avatars.com/api/?name=" . $name . "&background=dc3545&color=fff";
    return '<img class="profile-pic border-gold" src="' . $images . '" width="30px" height="30px">';
}

function info_emp($id)
{
    $sqluser = "SELECT * FROM employee WHERE Emp_ID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $rowuser = 'x';
    }
    return $rowuser;
}

function info_ability($id)
{
    if ($id == '1') {
        $rowuser = 'การเงิน';
    } elseif ($id == '2') {
        $rowuser = 'ความรัก';
    } elseif ($id == '3') {
        $rowuser = 'การงาน';
    } elseif ($id == '4') {
        $rowuser = 'โชคลาภ';
    } elseif ($id == '5') {
        $rowuser = 'สุขภาพ';
    } elseif ($id == '6') {
        $rowuser = 'สติปัญญา';
    } elseif ($id == '7') {
        $rowuser = 'อำนาจบารมี';
    } elseif ($id == '8') {
        $rowuser = 'เจรจาค้าขาย';
    } else {
        $rowuser = '-';
    }
    return $rowuser;
}

function info_phone_sum($id)
{
    $sqluser = "SELECT * FROM Product WHERE Product_ID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $rowuser = 'x';
    } else {
        $sum = $rowuser['product_num2'] + $rowuser['product_num3'] + $rowuser['product_num4']
            + $rowuser['product_num5'] + $rowuser['product_num6'] + $rowuser['product_num7']
            + $rowuser['product_num8'] + $rowuser['product_num9'] + $rowuser['product_num10'];
    }
    return $sum;
}

function info_sum2($id)
{

    $sqluser = "SELECT * FROM horo_sum WHERE horo_sum ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $sqluser = "SELECT * FROM horo_sum WHERE horo_sum='0'";
        $resultuser = dbQuery($sqluser);
        $rowuser = dbFetchAssoc($resultuser);
    }
    return $rowuser;
}

function info_number2($id)
{
    $sqluser = "SELECT * FROM horo_number WHERE horo_number ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $sqluser = "SELECT * FROM horo_number WHERE horo_number ='0'";
        $resultuser = dbQuery($sqluser);
        $rowuser = dbFetchAssoc($resultuser);
    }
    return $rowuser;
}

function info_emp_sale($id)
{
    $sqluser = "SELECT * FROM employee WHERE NoEID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $rowuser = 'x';
    }
    return $rowuser;
}

function info_Network($id)
{
    $sqluser = "SELECT * FROM Product_network WHERE Product_networkID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    return $rowuser;
}

function info_topup($id)
{
    if ($id == 0) {
        return 'เติมเงิน';
    } elseif ($id == 1) {
        return 'รายเดือน';
    } else {
        return 'error';
    }
}

function doLOGIN()
{
    session_start();
    $ssid = session_id();
    $tmp_username = addslashes(trim($_POST['txtusername']));
    $tmp_password = addslashes(trim($_POST['txtpassword']));

    if ($tmp_username == "") {
        echo "<script>window.top.window.alertbox('4','Can't Login','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    } elseif ($tmp_password == "") {
        echo "<script>window.top.window.alertbox('4','Can't Login','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    }
    $hashPassword = md5($tmp_password);
    $sql = "SELECT * FROM user WHERE User_phone ='$tmp_username' AND User_pass6s ='$hashPassword'";
    $result = dbQuery($sql);
    $row = dbFetchAssoc($result);
    if (!$row) {
        echo "<script>window.top.window.alertbox('3','Login Failed','ไม่พบบัญชีผู้ใช้และรหัสนี้ในระบบ');</script>";
        exit();
    } else {
        if (!isset($_SESSION['tmp_user'])) { // เช็คว่ามีตัวแปรนี้อยู่ก่อนแล้วหรือไม่
            $user_id = $row['NoUID'];

            $_SESSION['ssid'] = $ssid;
            $_SESSION['NoUID'] = $row['NoUID'];
        } else {
            $user_id = $row['NoUID'];
            $_SESSION['ssid'] = $ssid;
            $_SESSION['NoUID'] = $row['NoUID'];
        }
        $sqldate = "UPDATE user SET User_lastlogin = '" . trim(date("Y-m-d H:i:s")) . "' WHERE NoUID= '$user_id'";
        $resultdate = dbQuery($sqldate);

        echo "<script>window.top.window.alertbox('1','Login Success','กำลังเข้าสู่ระบบ รอสักครู่..');</script>";
        echo "<script>setTimeout(function(){window.top.location='index.php?p=profile'} , 2500);</script>";
    }
    session_write_close();
    exit();
}

function doLogout()
{
    session_start();
    unset($_SESSION['NoUID']);
    unset($_SESSION['ssid']);
    if (isset($_SESSION['profile'])) {
        $profile = $_SESSION['profile'];
        $line = new LineLogin();
        $line->revoke($profile->access_token);
        session_destroy();
    }
    session_destroy();
    echo "<script>window.top.window.alertbox('1','Logout Success','กำลังออกจากระบบ รอสักครู่..');</script>";
    echo "<script>setTimeout(function(){window.top.location='index.php'} , 2500);</script>";
    session_write_close();
    exit();
}

include 'function_cart.php';