<?php include 'header.php';

if (isset($_GET['btnTestline'])) {
   testline();
}
if (isset($_POST['btn_addnumber1'])) {
   add_number1();
}
if (isset($_GET['Logout'])) {
   doLogout();
}
session_start();
$uid = $_SESSION['tmp_username'];
if ($uid == null) {
   echo "<script>window.location='index.php';</script>";
}
?>


<div class="container-fluid overflow-hidden">
   <div class="row vh-100 overflow-auto">
      <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 py-0 bg-dark d-flex sticky-top">
         <?php include 'menu.php'; ?>
      </div>
      <div class="col d-flex flex-column h-sm-100">
         <main class="row overflow-auto">
            <?php include 'navtop.php'; ?>
            <div class="col pt-2">
               <?php
               if (empty($_GET['id'])) {
                  $_GET['id'] = '';
                  include 'page/dashboard.php';
               } else {
                  switch ($_GET['id']) {
                     case "dashboard":
                        include 'page/dashboard.php';
                        break;
                     case "ber_all":
                        include 'page/ber.php';
                        break;
                     case "ber_add":
                        include 'page/add_ber.php';
                        break;
                     case "horo_ber":
                        include 'page/horo_number.php';
                        break;
                     case "horo_sum":
                        include 'page/horo_sum.php';
                        break;
                     //Code By Beam
                     case "cart":
                        include 'page/cart.php';
                        break;
                     case "cart_chk":
                        include 'check/cart_check.php';
                        break;
                     case "cart_rm":
                        include 'check/cart_rm.php';
                        break;
                     default:
                        include 'page/dashboard.php';
                  }
               }
               ?>
            </div>
         </main>
         <footer class="row bg-light py-2 mt-auto">
            <?php include 'footer.php'; ?>
         </footer>
      </div>
   </div>
</div>