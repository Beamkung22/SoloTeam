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

function info_count_all($id)
{
    $sqluser = "SELECT * FROM $id";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbNumRows($resultuser);
    return $rowuser;
}

function info_Network($id)
{
    $sqluser = "SELECT * FROM Product_network WHERE Product_networkID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    return $rowuser;
}

function info_role($id)
{
    if ($id == '1') {
        return 'ตัวแทนขาย';
    } elseif ($id == '2') {
        return 'ผู้จัดการ';
    } elseif ($id == '3') {
        return 'ผู้ดูแล';
    } elseif ($id == '99') {
        return 'Dev';
    } else {
        return 'error';
    }
}

function info_level($id)
{
    if ($id <= 10) {
        return 'D';
    } elseif ($id >= 30) {
        return 'C';
    } elseif ($id >= 60) {
        return 'C+';
    } elseif ($id >= 80) {
        return 'B';
    } elseif ($id >= 100) {
        return 'B+';
    } elseif ($id >= 140) {
        return 'A';
    } elseif ($id >= 180) {
        return 'A+';
    } elseif ($id >= 200) {
        return 'S';
    } elseif ($id >= 400) {
        return 'Double S';
    } elseif ($id >= 1000) {
        return 'SSS+';
    } else {
        return 'error';
    }
}

function info_producttype($id)
{
    $sqluser = "SELECT * FROM Product_type WHERE Product_typeID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    if (!$rowuser) {
        $rowuser = 'x';
    }
    return $rowuser;
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

function info_emp_salecount($id)
{
    $sqluser = "SELECT * FROM Product WHERE NoEID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbNumRows($resultuser);
    if (!$rowuser) {
        $rowuser = 'x';
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

function add_number1()
{
    $num1 = trim($_POST['num1']);
    $num2 = trim($_POST['num2']);
    $num3 = trim($_POST['num3']);
    $num4 = trim($_POST['num4']);
    $num5 = trim($_POST['num5']);
    $num6 = trim($_POST['num6']);
    $num7 = trim($_POST['num7']);
    $num8 = trim($_POST['num8']);
    $num9 = trim($_POST['num9']);
    $networkID = trim($_POST['networkID']);
    $numtype = trim($_POST['numtype']);
    $numprice = trim($_POST['numprice']);
    $NoEID = trim($_SESSION['NoEID']);
    $Product_ability1 = trim($_POST['Product_ability1']);
    $Product_ability2 = trim($_POST['Product_ability2']);

    if (trim($_POST['num1']) == "" or trim($_POST['num1']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 2');</script>";
        exit();
    } elseif (trim($_POST['num2']) == "" or trim($_POST['num2']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 3');</script>";
        exit();
    } elseif (trim($_POST['num3']) == "" or trim($_POST['num3']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 4');</script>";
        exit();
    } elseif (trim($_POST['num4']) == "" or trim($_POST['num4']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 5');</script>";
        exit();
    } elseif (trim($_POST['num5']) == "" or trim($_POST['num5']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 6');</script>";
        exit();
    } elseif (trim($_POST['num6']) == "" or trim($_POST['num6']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 7');</script>";
        exit();
    } elseif (trim($_POST['num7']) == "" or trim($_POST['num7']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 8');</script>";
        exit();
    } elseif (trim($_POST['num8']) == "" or trim($_POST['num8']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 9');</script>";
        exit();
    } elseif (trim($_POST['num9']) == "" or trim($_POST['num9']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','ยังไม่ได้ใส่เบอร์หลักที่ 10');</script>";
        exit();
    } elseif (trim($_POST['networkID']) == "" or trim($_POST['networkID']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','กรุณาเลือกเครือข่าย');</script>";
        exit();
    } elseif (trim($_POST['numtype']) == "" or trim($_POST['numtype']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','โปรดระบุประเภทซิม');</script>";
        exit();
    } elseif (trim($_POST['numprice']) == "" or trim($_POST['numprice']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','กรุณาใส่ราคาสินค้า');</script>";
        exit();
    } elseif (trim($_POST['Product_ability1']) == "" or trim($_POST['Product_ability1']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    } elseif (trim($_POST['Product_ability2']) == "" or trim($_POST['Product_ability2']) == null) {
        echo "<script>window.top.window.alertbox('3','Error','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    } elseif (trim($NoEID) == "" or trim($NoEID) == null) {
        echo "<script>window.top.window.alertbox('4','EID ERROR','บัญชีมีปํญหา กรุณาล็อคอินใหม่');</script>";
        exit();
        doLogout();
    }

    $csqlc = "SELECT NoEID FROM Product WHERE 
    product_num2 = '$num1' 
    AND product_num3 = '$num2'
    AND product_num4 = '$num3'
    AND product_num5 = '$num4'
    AND product_num6 = '$num5'
    AND product_num7 = '$num6'
    AND product_num8 = '$num7'
    AND product_num9 = '$num8'
    AND product_num10 = '$num9'
     ";
    $rcsqlc = dbQuery($csqlc);
    $ccans = dbFetchAssoc($rcsqlc, 1);
    if (!$ccans) {
        $strSQLinfo = "INSERT INTO Product 
        (NoEID,product_num2,product_num3,product_num4,product_num5,product_num6,product_num7,product_num8,product_num9,product_num10,
        Product_networkID,Product_topup,Product_price,Product_datetime,Product_ability1,Product_ability2) 
        VALUES ('" . $NoEID . "',
                 '" . $num1 . "',
                 '" .  $num2 . "',
                 '" .  $num3 . "',
                  '" . $num4 . "',
                  '" . $num5 . "',
                  '" . $num6 . "',
                  '" . $num7 . "',
                  '" . $num8 . "',
                  '" . $num9 . "',
                  '" . $networkID . "',
                  '" . $numtype . "',
                  '" . $numprice . "',
                  '" . trim(date("Y-m-d H:i:s")) . "',
                  '" . $Product_ability1 . "',
                  '" . $Product_ability2 . "')";
        $objQueryinfo = dbQuery($strSQLinfo);
        echo "<script>window.top.window.alertbox('1','Add Success','เพิ่มข้อมูลเรียบร้อยแล้ว');</script>";
        $tmp_message = '#เพิ่มเบอร์ 0'
            . $num1
            . $num2
            . '-'
            . $num3
            . $num4
            . $num5
            . '-'
            . $num6
            . $num7
            . $num8
            . $num9
            . ' ('
            . info_Network($networkID)['Product_networkName']
            . '/'
            . info_topup($numtype)
            . ') ราคา '
            . number_format($numprice)
            . ' เข้าระบบ';
        message_line($tmp_message);
        echo "<script>setTimeout(function(){window.top.location='page.php?id=ber_add'} , 2500);</script>";
        exit();
    } else {
        echo "<script>window.top.window.alertbox('4','Error','ตรวจพบเบอร์นี้ในระบบแล้ว');</script>";
        exit();
    }
}

function doLOGIN()
{
    session_start();
    $ssid = session_id();
    $tmp_username = addslashes(trim($_POST['txtusername']));
    $tmp_password = addslashes(trim($_POST['txtpassword']));

    if (trim($tmp_username) == "") {
        echo "<script>window.top.window.alertbox('4','Can't Login','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    } elseif (trim($tmp_password) == "") {
        echo "<script>window.top.window.alertbox('4','Can't Login','กรุณาใส่ข้อมูลให้ครบทุกช่อง');</script>";
        exit();
    }
    $hashPassword = md5($tmp_password);
    $sql = "SELECT * FROM employee WHERE Emp_ID ='$tmp_username' AND Emp_pass ='$hashPassword'";
    $result = dbQuery($sql);
    $row = dbFetchAssoc($result);
    if (!$row) {
        echo "<script>window.top.window.alertbox('3','Login Failed','ไม่พบบัญชีผู้ใช้และรหัสนี้ในระบบ');</script>";
        exit();
    } else {
        if (!isset($_SESSION['tmp_username'])) { // เช็คว่ามีตัวแปรนี้อยู่ก่อนแล้วหรือไม่
            $user_id = $row['Emp_ID'];

            $_SESSION['sessionid'] = $ssid;
            $_SESSION['tmp_username'] = $row['Emp_ID'];
            $_SESSION['NoEID'] = $row['NoEID'];
        } else {
            $_SESSION['sessionid'] = $ssid;
            $_SESSION['tmp_username'] = $row['Emp_ID'];
            $_SESSION['NoEID'] = $row['NoEID'];
        }
        $sqldate = "UPDATE employee SET Emp_lastlogin = '" . trim(date("Y-m-d H:i:s")) . "' WHERE Emp_ID= '$tmp_username'";
        $resultdate = dbQuery($sqldate);

        echo "<script>window.top.window.alertbox('1','Login Success','กำลังเข้าสู่ระบบ รอสักครู่..');</script>";
        echo "<script>setTimeout(function(){window.top.location='page.php'} , 2500);</script>";
    }
    session_write_close();
    exit();
}

function doLogout()
{
    session_start();
    unset($_SESSION['tmp_username']);
    unset($_SESSION['sessionid']);
    unset($_SESSION['NoEID']);
    session_destroy();
    echo "<script>window.top.window.alertbox('1','Logout Success','กำลังออกจากระบบ รอสักครู่..');</script>";
    echo "<script>setTimeout(function(){window.top.location='index.php'} , 2500);</script>";
    session_write_close();
    exit();
}

function info_productstatus($id)
{
    if ($id == 'book') {
        return 'จองแล้ว';
    } elseif ($id == 'free') {
        return 'ว่าง';
    } else {
        return 'ขายแล้ว';
    }
}

function info_topup($id)
{
    if ($id == '0') {
        return 'เติมเงิน';
    } elseif ($id == '1') {
        return 'รายเดือน';
    } else {
        return 'error';
    }
}

function message_line($sMessage)
{

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set("Asia/Bangkok");


    $sToken = config_all('line_notify_token');

    $chOne = curl_init();
    curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($chOne, CURLOPT_POST, 1);
    curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=" . $sMessage);

    $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $sToken . '',);
    curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($chOne);

    //Result error 
    if (curl_error($chOne)) {
        echo "<script>alert('error:' . curl_error($chOne));</script>";
        exit();
    } else {
        $result_ = json_decode($result, true);
        echo "status : " . $result_['status'];
        echo "message : " . $result_['message'];
        exit();
    }
    curl_close($chOne);
}

function testline()
{
    message_line('LINE TOKEN : Pass / Bot Active!');
    echo "<script>window.top.window.alertbox('1','Text Send Success','ส่งข้อความทดสอบแล้ว..');</script>";
}
//Code By Beam
include 'function_cart.php';