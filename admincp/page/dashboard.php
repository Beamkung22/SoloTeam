<div class="container-fluid">
   <div class="card my-2">
      <div class="card-body py-2 px-2 fw-bolder text-muted">
         <i class="fas fa-angle-right"></i> สรุปผล
      </div>
   </div>
   <div class="row text-center">
      <div class="col-12 col-sm-6 col-md-3 col-lg-3">
         <div class="card  my-2 border-gold shadow-sm">
            <h5 class="card-header bg-warning m-0">เบอร์ทั้งหมด</h5>
            <div class="card-body p-1">
               <h1 class="card-title m-0 fw-bold text-count">
                  <div class="content">
                     <div class="value" akhi="<?php echo info_count_all('Product'); ?>">0</div>
                  </div>
               </h1>
               <p class="card-text">หมายเลข</p>
            </div>
            <i class="fas fa-sim-card text-danger fs-1 m-2 position-absolute bottom-0 start-0 opacity-25"></i>
         </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-3">
         <div class="card border-gold my-2 shadow-sm">
            <h5 class="card-header bg-warning m-0">ยอดขาย</h5>
            <div class="card-body p-1">
               <h1 class="card-title m-0 fw-bold text-count">
                  <div class="content">
                     <div class="value" akhi="99609">0</div>
                  </div>
               </h1>
               <p class="card-text">บาท</p>
            </div>
            <i class="fas fa-piggy-bank text-danger fs-1 m-2 position-absolute bottom-0 start-0 opacity-25"></i>
         </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-3">
         <div class="card border-gold my-2 shadow-sm">
            <h5 class="card-header bg-warning m-0">ลูกค้า</h5>
            <div class="card-body p-1">
               <h1 class="card-title m-0 fw-bold text-count">
                  <div class="content">
                     <div class="value" akhi="<?php echo info_count_all('user'); ?>">0</div>
                  </div>
               </h1>
               <p class="card-text">คน</p>
            </div>
            <i class="fas fa-users text-danger fs-1 m-2 position-absolute bottom-0 start-0 opacity-25"></i>
         </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3 col-lg-3">
         <div class="card border-gold my-2 shadow-sm">
            <h5 class="card-header bg-warning m-0">ตัวแทน</h5>
            <div class="card-body p-1">
               <h1 class="card-title m-0 fw-bold">
                  <div class="content">
                     <div class="value" akhi="999">0</div>
                  </div>
               </h1>
               <p class="card-text">สาขา</p>
            </div>
            <i class="fas fa-user-friends text-danger fs-1 m-2 position-absolute bottom-0 start-0 opacity-25"></i>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
         <label class="badge rounded-pill bg-danger shadow-s fw-light px-3">**ผลรวมที่แสดงผลนั้น เป็นผลรวมจากยอดทั้งเว็บไซต์รวมทั้งหมด</label>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
         <div class="card text-center  my-2 shadow-s border-danger">
            <h5 class="card-header bg-danger fw-bold text-light m-0">
               <i class="fas fa-bullhorn text-gold"></i> โปรโมชั่นตอนนี้
            </h5>
            <div class="card-body bg-dark py-1">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="../images/promotion/P2.png" style="width: 40%!important;" alt="...">
                        <img src="../images/promotion/P1.png" style="width: 40%!important;" alt="...">
                     </div>
                     <div class="carousel-item">
                        <img src="../images/promotion/P3.png" style="width: 40%!important;" alt="...">
                        <img src="../images/promotion/P4.png" style="width: 40%!important;" alt="...">
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
         <div class="card my-2 border-primary shadow-sm">
            <h5 class="card-header bg-primary fw-bold text-light m-0"><i class="fas fa-trophy text-gold"></i> ลำดับลูกค้าประจำ</h5>
            <ul class="list-group small list-group-numbered">
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
            </ul>
         </div>
      </div>
      <div class="col-12 col-sm-12 col-md-3 col-lg-3">
         <div class="card  my-2 border-primary shadow-sm">
            <h5 class="card-header bg-primary fw-bold text-light m-0"><i class="fas fa-award text-gold"></i> ลำดับตัวแทนขาย</h5>
            <ul class="list-group small list-group-numbered">
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="ms-2 me-auto">NONAME</div>
                  <span class="badge bg-primary text-light">ยอด 200฿</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<script>
   const counters = document.querySelectorAll('.value');
   const speed = 200;

   counters.forEach(counter => {
      const animate = () => {
         const value = +counter.getAttribute('akhi');
         const data = +counter.innerText;

         const time = value / speed;
         if (data < value) {
            counter.innerText = Math.ceil(data + time);
            setTimeout(animate, 1);
         } else {
            counter.innerText = value;
         }

      }

      animate();
   });
</script>