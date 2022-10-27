<?php include 'header.php';
if (isset($_POST['btnLogin'])) {
   doLOGIN();
}
session_start();
$sid = $_SESSION['sessionid'];
$uid = $_SESSION['tmp_username'];
if ($uid != null) {
   echo "<script>window.location='page.php?id=dashboard';</script>";
}
?>

<main style="background-color: #b40000;">
   <div class="container py-5 wow fadeInUp">
      <div class="row my-5 ">
         <h1 class="text-center py-3 text-gold">ระบบหลังบ้าน</h1>
         <form name="login-form" id="login-form" method="post" target="iframe_target">
            <div class="card border-gold mx-auto p-0 shadow" style="width:350px;">
               <h5 class="card-header bg-dark text-white"><i class="fas fa-lock"></i> เข้าสู่ระบบ</h5>
               <div class="card-body">

                  <div class="mask">
                  </div>
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control" id="floatingInput" placeholder="Username" id="txtusername" name="txtusername">
                     <label for="floatingInput"><i class="fas fa-user"></i> User</label>

                  </div>
                  <div class="form-floating">
                     <input type="password" class="form-control" placeholder="Password" id="txtpassword" name="txtpassword">
                     <label for="floatingPassword"><i class="fas fa-key"></i> Password</label>
                  </div>
               </div>
               <div class="card-footer bg-dark">

                  <button name="btnLogin" id="btnLogin" type="submit" class="btn btn-warning w-100" value="Sign in">
                     <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                  </button>
               </div>
         </form>
      </div>
   </div>
   </div>
</main>

<?php include 'footer.php'; ?>