<div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-0 px-sm-3 pt-2 text-white">
   <a href="../admincp/" class="d-none d-sm-inline fw-bold py-sm-3 my-md-0 mx-md-auto text-white text-decoration-none">
      <span class="fs-5"><i class="fas fa-dragon text-gold fs-4"></i> ระบบจัดการ</span>
   </a>
   <hr class="d-none d-sm-inline bg-white border-1 w-100 border-top border-secondary mx-auto">
   <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
      <li class="nav-item">
         <a href="page.php?id=dashboard" class="nav-link px-sm-0 px-2">
            <i class="fas fa-home fs-5"></i><span class="ms-1 ps-2 d-none d-sm-inline"> สรุปผล</span>
         </a>
      </li>
      <li class="dropdown">
         <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fab fa-product-hunt fs-5"></i><span class="ms-1 ps-2 d-none d-sm-inline"> เบอร์ทั้งหมด</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
            <li><a href="page.php?id=ber_all" class="dropdown-item"><i class="far fa-circle pe-2"></i> เบอร์ทั้งหมด</a></li>
            <li><a href="page.php?id=ber_add" class="dropdown-item"><i class="far fa-circle pe-2"></i> เพิ่มเบอร์ใหม่</a></li>
            <li><a href="#" class="dropdown-item"><i class="far fa-circle pe-2"></i> จัดกลุ่มเบอร์</a></li>
         </ul>
      </li>
      <li>
         <a href="page.php?id=cart" class="nav-link px-sm-0 px-2 position-relative">
            <i class="fas fa-shopping-basket fs-5"></i>
            <span class="ms-1 ps-2 d-none d-sm-inline"> การสั่งซื้อ
               <?php if(check_cart()){ ?>
               <span class="badge rounded-pill bg-danger">
                  <i class=" fas fa-bell fa-sm wow flash" data-wow-iteration="infinite"></i>
               </span>
               <?php } ?>
            </span>
            <span class="d-inline d-sm-none position-absolute translate-middle badge start-50 rounded-pill bg-danger wow flash" data-wow-iteration="infinite" style="top: 5%!important;">
            </span>
         </a>
      </li>
      <li>
         <a href="#" class="nav-link px-sm-0 px-2">
            <i class="fas fa-cash-register fs-5"></i><span class="ms-1 ps-2 d-none d-sm-inline"> โปรโมชั่น</span></a>
      </li>
      <li class="dropdown">
         <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-magic fs-5"></i><span class="ms-1 ps-3 d-none d-sm-inline">คำทำนาย</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
            <li><a class="dropdown-item" href="page.php?id=horo_sum"><i class="far fa-circle pe-2"></i> ผลรวม</a></li>
            <li><a class="dropdown-item" href="page.php?id=horo_ber"><i class="far fa-circle pe-2"></i> คู่เลข</a></li>
         </ul>
      </li>
      <li class="dropdown">
         <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-users fs-5"></i><span class="ms-1 ps-2 d-none d-sm-inline">สมาชิก</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> รายชื่อสมาชิก</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> แก้ไขสมาชิก</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ประวัติการซื้อ</a></li>
            <li>
               <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle"></i> สมาชิกที่โดนแบน</a></li>
         </ul>
      </li>
      <li class="dropdown">
         <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-friends fs-5"></i></i><span class="ms-1 ps-2 d-none d-sm-inline">ตัวแทนจำหน่าย</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> สรุปยอดขาย</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> เพิ่มตัวแทน</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> แก้ไขตัวแทน</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ประวัติการขาย</a></li>
            <li>
               <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ตัวแทนโดนแบน</a></li>
         </ul>
      </li>
      <li class="dropdown">
         <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-tools fs-5"></i><span class="ms-1 ps-2 d-none d-sm-inline">ตั้งค่าเว็บไซต์</span>
         </a>
         <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ข้อความประกาศ</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ป๊อปอัพประกาศ</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> ข้อความแนะนำ</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> สไลย์โปรโมชั่น</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> บัญชีธนาคาร</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> เงื่อนไข&กฏระเบียบ</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> บทความ</a></li>
            <li>
               <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> Line Notify</a></li>
            <li><a class="dropdown-item" href="#"><i class="far fa-circle pe-2"></i> เปิด/ปิด ระบบ</a></li>
         </ul>
      </li>

   </ul>

</div>