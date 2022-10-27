<?php
function cart_mobile()
{
    session_start();
    $myCart = $_SESSION['MyCart'];
    return $myCart;
}

function cart_addmobile($id)
{
    session_start();
    if(isset($_SESSION['intLinecast']) && $_SESSION['intLinecast'] != ""){
        $_SESSION['intLinecast']++;
    }else{
        $_SESSION['intLinecast']='0';
    }
    $checkInarray = array_search($id, $_SESSION["MyCart"]);
    if((string)$checkInarray == ""){
        $lineCart = $_SESSION['intLinecast'];
        $_SESSION['MyCart'][$lineCart] = $id;
    }
    echo "<script>setTimeout(function(){window.top.location='index.php'});</script>";
}

function cart_clear_all()
{
    session_start();
    unset($_SESSION['intLinecast']);
    unset($_SESSION['MyCart']);
    session_write_close();
}

function cart_clear_byMobile($id)
{
    session_start();
    foreach (cart_mobile() as $key => $value) {
        if($value == $id){
            unset($_SESSION['MyCart'][$key]);
            break;
        }
    }
    echo "<script>setTimeout(function(){window.top.location='index.php?p=cart'});</script>";
}

function info_view_fullphone($id)
{
    $sqluser = "SELECT CONCAT('0',p.product_num2,p.product_num3,p.product_num4,p.product_num5,p.product_num6,p.product_num7,p.product_num8,p.product_num9) as fullphone FROM Product p WHERE p.Product_ID ='$id'";
    $resultuser = dbQuery($sqluser);
    $rowuser = dbFetchAssoc($resultuser);
    $fullphone = $rowuser['fullphone'];
    return $fullphone;
}

function confirm_book($con)
{
    if($con == "confirm" 
        && count(cart_mobile()) > 0){
        $userId = $_SESSION['NoUID'];
        $updateBook = true;
        $groupId = check_cartgroup_count($userId);
        foreach (cart_mobile() as $value) {
            if(check_status_count($value,"book")){
                cart_clear_byMobile($value);
                $updateBook = false;
            }
        }
        if($updateBook){
            foreach (cart_mobile() as $value) {
                $sqldate = "INSERT INTO `product_cart` (`Product_ID`, `NoUID`, `Product_cart_datetime`, `Cart_status` , `Group_cart`) VALUES ('".$value."', '" .$userId. "', '" . trim(date("Y-m-d H:i:s")) . "' , 'W' ,  '" .$groupId. "')";
                $resultdate = dbQuery($sqldate);
                update_status_product($value,"book");
            }
            echo "<script>window.top.window.alertbox('1','Login Success','จองสำเร็จ..');</script>";
            cart_clear_all();
            echo "<script>setTimeout(function(){window.top.location='index.php'});</script>";
        }else{
            //alert Message
            echo "ว้าย! ระเบิดแล้ว";
            exit;
        }
    }
}

function check_status_count($id,$status)
{
    $sqldate = "SELECT 'Y' FROM Product p WHERE p.Product_status = '$status' AND p.Product_ID ='$id'";
    $resultdate = dbQuery($sqldate);
    $rowCount = dbNumRows($resultdate);
    if ($rowCount > 0) {
        return true;
    }else{
        return false;
    }
}

function check_cart()
{
    $sqldate = "SELECT 'Y' FROM `product_cart` WHERE Cart_status = 'W' ";
    $resultdate = dbQuery($sqldate);
    $rowuser = dbFetchAssoc($resultdate);
    if($rowuser['Y'] != ""){
        $group = true;
    }else{
        $group = false;
    }
    return $group;
}

function check_cartgroup_count($id)
{
    $sqldate = "SELECT `Group_cart`+1 as Group_cart FROM `product_cart` WHERE `NoUID` = '$id' ORDER BY `Group_cart` DESC LIMIT 1";
    $resultdate = dbQuery($sqldate);
    $rowuser = dbFetchAssoc($resultdate);
    if($rowuser['Group_cart'] != "" || $rowuser['Group_cart'] != 0){
        $group = $rowuser['Group_cart'];
    }else{
        $group = 0;
    }
    return $group;
}

function update_status_product($id,$status)
{
    $sqldate = "UPDATE product SET Product_status = '$status' WHERE Product_ID = '$id'";
    $resultdate = dbQuery($sqldate);
}

function update_status_cart_confirm($group)
{
    update_status_cart('T','','',$group);
}
function update_status_cart_cancel($group)
{
    update_status_cart('F','','',$group);
}
function update_status_cart_wait($group)
{
    update_status_cart('W','','',$group);
}
function update_status_cart_ById($status,$id)
{
    update_status_cart($status,$id,'','');
}
function update_status_cart_ByUser($status,$user)
{
    update_status_cart($status,'',$user,'');
}
function update_status_cart_ByGroup($status,$group)
{
    update_status_cart($status,'','',$group);
}
function update_status_cart($status,$id,$user,$group)
{
    $sqldate = "UPDATE product_cart SET Cart_status = '$status' WHERE ";
    if($id != ""){
        $sqldate .= " Product_cartID = '$id'";
        if($user != "" || $time != ""){
            $sqldate .= " AND ";
        }
    }
    if($user != ""){
        $sqldate += " NoUID = '$user'";
        if($time != ""){
            $sqldate .= " AND ";
        }
    }
    if($group != ""){
        $sqldate .= " Group_cart = '$group'";
    }
    $resultdate = dbQuery($sqldate);
}

function info_view_book_byGroup($group)
{
    $sqluser = "SELECT CONCAT('0',p.product_num2,p.product_num3,p.product_num4,p.product_num5,p.product_num6,p.product_num7,p.product_num8,p.product_num9) as fullphone ,
       p.*,pc.* FROM product_cart pc , Product p WHERE pc.Group_cart ='$group' AND p.Product_ID = pc.Product_ID";
    $resultuser = dbQuery($sqluser);
    return $resultuser;
}

function info_view_book_byUser($userId)
{
    $sqluser = "SELECT CONCAT('0',p.product_num2,p.product_num3,p.product_num4,p.product_num5,p.product_num6,p.product_num7,p.product_num8,p.product_num9) as fullphone ,
       p.*,pc.* FROM product_cart pc , Product p WHERE pc.NoUID ='$userId' AND p.Product_ID = pc.Product_ID";
    $resultuser = dbQuery($sqluser);
    return $resultuser;
}

function info_view_book_all_bill()
{
    $sqluser = "SELECT pc.* , u.Username FROM product_cart pc , user u where u.NoUID = pc.NoUID GROUP BY `Group_cart` ";
    $resultuser = dbQuery($sqluser);
    return $resultuser;
}

function info_view_book_user_bill($id)
{
    $sqluser = "SELECT pc.* , u.Username FROM product_cart pc , user u where pc.NoUID = '$id' and u.NoUID = pc.NoUID GROUP BY `Group_cart` ";
    $resultuser = dbQuery($sqluser);
    return $resultuser;
}

function remove_book($group)
{
    update_status_cart_ByGroup("F",$group);
    $resultuser = info_view_book_byGroup($group);
    while($row = dbFetchArray($resultuser,1)){
        update_status_product($row['Product_ID'],"free"); //เบอร์กลับมาจองได้อีกครั้ง
    }
}

function confirm_book($group)
{
    update_status_cart_ByGroup("T",$group);
    $resultuser = info_view_book_byGroup($group);
    while($row = dbFetchArray($resultuser,1)){
        update_status_product($row['Product_ID'],"sell"); //เบอร์ขายแล้ว
    }
}

function info_status_cart($status)
{
    if ($status == "W") {
        return 'รอการยืนยันการสั่งซื้อ';
    } elseif ($status == "T") {
        return 'ยืนยันการซื้อขายสำเร็จ';
    } elseif ($status == "F") {
        return 'ยกเลิกการยืนยันการสั่งซื้อ';
    }
}