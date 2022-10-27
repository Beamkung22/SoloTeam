<nav class="navbar navbar-light fw-bold bg-light">
   <div class="container-fluid">
      <span class="navbar-brand mb-0 h1"><i class="fas fa-angle-double-right"></i> สวัสดีคุณ</span>
      <div class="dropdown me-auto">
         <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

            <?php echo getProfilePicture(info_emp($_SESSION['tmp_username'])['Emp_Name']); ?>
            <span class="mx-1 text-gold"><?php echo info_emp($_SESSION['tmp_username'])['Emp_Name']; ?></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ดูข้อมูลส่วนตัว</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> เปลี่ยนรหัสผ่าน</a></li>
            <li>
               <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="?Logout" target="iframe_target"><i class="fas fa-sign-out-alt pe-2"></i> ออกจากระบบ</a></li>
         </ul>
      </div>
      <div class=" ps-3 d-none d-sm-inline d-lg-inline">
         <i class="fas fa-user text-gold"></i>
         สถานะ : <span class="badge bg-warning text-dark"><?php echo info_role(info_emp($_SESSION['tmp_username'])['Emp_role']); ?></span>
         <span class="px-2 text-muted">|</span>
         <i class="fas fa-crown text-gold"></i> ระดับร้าน :
         <span class="badge bg-warning text-dark"><?php echo info_level(info_emp($_SESSION['tmp_username'])['Emp_exp']); ?></span>
         <span class="px-2 text-muted">|</span>
         <i class="fas fa-address-book text-gold"></i> เบอร์ในร้าน : <span class="badge bg-warning text-dark"><?php echo info_emp_salecount($_SESSION['NoEID']); ?> เบอร์</span>
      </div>
   </div>
</nav>