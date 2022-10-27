<?php
session_start();
if (isset($_SESSION['profile'])) {
   $profile = $_SESSION['profile'];
} else {
   $line = new LineLogin();
   $link = $line->getLink();
}

if (isset($_POST['btnLogin'])) {
   doLOGIN();
}
$sid = $_SESSION['ssid'];
$uid = $_SESSION['NoUID'];
if ($uid != null) {
   echo "<script>window.location='index.php?p=profile';</script>";
}
?>

<div class="container py-auto wow fadeInUp">
   <div class="row my-5">
      <h1 class="text-center py-2 text-danger">บัญชีใช้งาน</h1>
      <form name="login-form" id="login-form" method="post" target="iframe_target">
         <div class="card  mx-auto p-0 shadow" style="width:350px;">
            <h5 class="card-header bg-dark text-white"><i class="fas fa-lock"></i> เข้าสู่ระบบ</h5>
            <div class="card-body">

               <div class="mask">
               </div>
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="Username" id="txtusername" name="txtusername" required>
                  <label for="floatingInput"><i class="fas fa-mobile-alt"></i> เบอร์โทรศัพท์</label>

               </div>
               <div class="form-floating">
                  <input type="password" class="form-control" placeholder="Password" id="txtpassword" name="txtpassword" required>
                  <label for="floatingPassword"><i class="fas fa-key"></i> รหัสเข้าใช้งาน 6 หลัก</label>
               </div>
            </div>
            <div class="card-footer text-center2">
               <button name="btnLogin" id="btnLogin" type="submit" class="btn btn-danger mt-2 w-100 fs-5" value="Sign in">
                  <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
               </button>
               <div class="strike my-1">
                  <span class="text-danger">หรือ</span>
               </div>
               <a href="<?php echo $link; ?>"><img src="/images/linelogin.png" class="mb-2 w-100"></a>
            </div>
      </form>
      <div class="border-danger text-center w-100 py-3 border-2">
         <a href="index.php?p=register" class="text-decoration-none text-dark"><i class="fas fa-arrow-circle-right"></i> หากไม่มี : สมัครสมาชิก</a>
         <a href="index.php?p=forgetpass" class="text-decoration-none text-dark">/ ลืมรหัสผ่าน?</a>
      </div>
   </div>

</div>
</div>
<div class="b-example-divider"></div>