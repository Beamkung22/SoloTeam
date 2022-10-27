<?php
session_start();
if (isset($_SESSION['profile'])) {
   $profile = $_SESSION['profile'];
} else {
   $line = new LineLogin();
   $link = $line->getLink();
}


$sid = $_SESSION['ssid'];
$uid = $_SESSION['NoUID'];
if ($uid == null) {
   echo "<script>window.location='index.php?p=login';</script>";
}
$sqlquery_data1 = "SELECT * FROM user WHERE NoUID ='$uid'";
$resultquery_data1 = dbQuery($sqlquery_data1);
$data1 = dbFetchAssoc($resultquery_data1);

?>

<div class="container py-auto wow fadeInUp">
   <div class="row my-5">
      <h1 class="text-center py-2 text-danger">บัญชีใช้งาน</h1>

      <div class="card  mx-auto p-0 shadow" style="width:350px;">
         <h5 class="card-header bg-dark text-white text-center"><?php echo $data1['Username']; ?></h5>
         <div class="card-body text-center">
            <img src="<?php echo $data1['User_picture']; ?>" class="img-thumbnail mx-auto w-50 mb-3 rounded-circle">
            <br />
            Phone : <?php echo $data1['User_phone']; ?>
            <br />
            Email : <?php echo $data1['User_email']; ?>
            <br />
            Address : <?php echo $data1['User_address']; ?>
            <br />
            Point : <?php echo $data1['User_point']; ?>pp
            <br />
            Status : <?php echo $data1['User_status']; ?>
            <br />
            Last Login : <?php echo thai_date(strtotime($data1['User_lastlogin'])); ?>
         </div>
         <div class="card-footer text-center2">
            <a class="btn btn-danger btn-lg w-100" href="?Logout" target="iframe_target"><i class="fas fa-sign-out-alt pe-2"></i> ออกจากระบบ</a>
         </div>

      </div>

   </div>
</div>
<div class="b-example-divider"></div>