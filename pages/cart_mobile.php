<?php
if(!isset($_SESSION['NoUID']) || $_SESSION['NoUID'] == ""){
   echo "กรุณา Login ก่อนจอง";
   exit;
}
if($_GET['action'] == "confirm"){
   confirm_book($_GET['action']);
}
if($_GET['action'] == "remove"){
   cart_clear_byMobile($_GET['idnumber']);
}else{
   if (!$_GET['idnumber']) {
      $_GET['idnumber'] = '';
   } elseif ($_GET['idnumber'] != null) {
      foreach ($_GET as $key => $value) {
         $_GET[$key] = addslashes(strip_tags(trim($value)));
      }
      if ($_GET['id'] != '') {
         $_GET['id'] = (int) $_GET['id'];
      }
      extract($_GET);
   } else {
      $_GET['idnumber'] = '';
   }
   $str = $_GET['idnumber'];
   //cart_clear_all();
   if($str != ""){
      cart_addmobile($str);
   }
   if(count(cart_mobile()) > 0){
      echo "เบอร์ที่จองทั้งหมด <br>";
      foreach (cart_mobile() as $value){
         echo info_view_fullphone($value)."<a href='/index.php?action=remove&p=cart&idnumber=".$value."'>X </a>"."<br>";
      }
?> 
<a href="/index.php?action=confirm&p=cart" class="btn btn-danger fs-5"><i class="fas fa-shopping-basket"></i> จองทั้งหมด!</a>
<?php
   }
}
?>