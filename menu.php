<header>
   <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #FF2337;">
      <div class="container">
         <button class="navbar-toggler text-whilte" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <i class="fas fa-bars fa-lg"></i>
         </button>
         <a class="navbar-brand mx-auto" href="/">
            <img src="images/logokt.gif" alt="logo" width="100px" class="d-inline-block align-text-top logotopnav">
         </a>

         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=horo">
                     <i class="fas fa-star fa-lg p-1"></i> ทำนายเบอร์
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=list">
                     <i class="fas fa-list-ol fa-lg p-1"></i> รายการเบอร์มงคล
                  </a>
               </li>
               <li class="nav-item ">
                  <a class="nav-link active" href="index.php?p=search">
                     <i class="fas fa-search fa-lg p-1"></i> ค้นหาเบอร์มงคล
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=article">
                     <i class="fas fa-file-alt fa-lg p-1"></i> บทความ
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=faqs">
                     <i class="fas fa-question-circle fa-lg p-1"></i> คำถามที่พบบ่อย
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="index.php?p=contact">
                     <i class="fas fa-envelope fa-lg p-1"></i> ติดต่อเรา
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active accountblank" href="index.php?p=login">
                     <i class="fas fa-user-circle fa-lg p-1"></i> บัญชี
                  </a>
               </li>
            </ul>

         </div>
      </div>
   </nav>
   <div class="notice position-relative d-flex flex-column justify-content-center text-center">
      <div class="container">
         <span><?php echo config_all('web_title_headweb'); ?></span>
      </div>
   </div>
</header>