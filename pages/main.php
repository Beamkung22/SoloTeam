<div class="container col-xxl-8 px-auto py-5 wow fadeInUp">
   <div class="row flex-lg-row-reverse align-items-center py-0">
      <div class="col-12 col-sm-8 col-lg-6 text-center">

         <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-keyboard="true" ,>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-6">
                        <div class="ldBar label-center" data-transition-in="true" data-duration="2" data-min="0" data-max="100" data-value="100" style="width:60%;height:auto;margin:auto;" data-preset="circle" data-stroke="data:ldbar/res,gradient(0,1,#FFD800,#FFE34C,#ff0,#fd9)"></div>
                        <br />
                        <h5 class=""><i class="fas fa-ring fa-lg goldtext"></i> เบอร์มงคล</h5>
                     </div>
                     <div class="col-6">
                        <div class="ldBar label-center" data-transition-in="true" data-duration="2" data-min="0" data-max="100" data-value="60" style="width:60%;height:auto;margin:auto;" data-preset="circle" data-stroke="data:ldbar/res,gradient(0,1,#FFD800,#FFE34C,#ff0,#fd9)"></div>
                        <br />
                        <h5 class=""><i class="fas fa-asterisk fa-lg goldtext"></i> เบอร์ทั่วไป</h5>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img src="images/logokt.gif" class="d-block w-100" alt="โลโก้ใส่ รอ">
               </div>
            </div>
         </div>


      </div>

      <div class="col-12 col-sm-8 col-lg-6 font2">
         <h2 class="fw-bold lh-1 mt-3 mb-3 "> เช็คดวงจากเบอร์มือถือ<br />ทำนายเบอร์</h2>
         <p class="fs-5 rainbow" style="font-size: 32px;"><i class="fas fa-star fa-sm"></i>CHECK YOUR NUMBER</p>
         <div class="d-grid gap-2 d-md-flex justify-content-start">
            <div class="p-0">
               <form method="get" action="/index.php?p=horo">
                  <div class="input-group input-group-lg custom-input-group">
                     <input type="tel" pattern="[0-9]*" inputmode="numeric" minlength="10" id="number" name="number" class="form-control shadow" placeholder="กรอกเบอร์มือถือ 10 หลัก" required>
                     <button type="submit" class="btn btn-4 btn-danger btn-lg shadow"><i class="fas fa-magic"></i> ทำนายเบอร์</button>
                  </div>
                  <input type="hidden" id="p" name="p" value="horo">
               </form>
               <p class="small mt-3">สถิติทำนายดวงชะตาแล้วกว่า <label class=" fs-6 text-primary">40,050,005</label> ครั้ง</p>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="container col-xxl-8 px-auto py-5 wow fadeInUp">
   <div class="row justify-content-center py-0">
      <div class="col-12 col-sm-12 col-lg-12">
         <div class="container-fluid">
            <p style="text-indent: 50px;" class="fonttext_detail fs-5">
               <?php echo config_all('web_detail_front'); ?>
            </p>
         </div>
      </div>
   </div>
</div>

<div class="bg-dark text-secondary px-3 py-1 text-center">
   <div class="container col-xxl-8 px-auto py-5 wow fadeInUp">
      <h1 class="display-5 fw-bold text-white"> ค้นหาเบอร์มงคล</h1>
      <div class="col-lg-12">
         <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 px-4">
               <div class="row  py-1 justify-content-center">
                  <div class="col-12 px-1 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-mobile-alt fa-lg"></i> ตำแหน่งตัวเลข</label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2" readonly>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2 ">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 ">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
               </div>
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-grip-vertical fa-lg"></i> อาชีพ</label>
                  </div>
                  <div class="col-6 px-1 py-0">
                     <select class="form-select px-2" aria-label="Default select example">
                        <option selected>อาชีพ</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
                  <div class="col-6 px-1 py-0">
                     <select class="form-select px-2" aria-label="Default select example">
                        <option selected>อาชีพเสริม (ถ้ามี)</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                     </select>
                  </div>
               </div>
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-calendar-alt fa-lg"></i> วัน/เดือน/ปี เกิด</label>
                  </div>
                  <div class="col-12 px-1 py-0">
                     <input type="date" class="form-control px-2">
                  </div>
               </div>
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-wifi fa-lg"></i> เครือข่าย</label>
                  </div>
                  <div class="col-12 px-1 py-0 text-white">
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <img class="form-check-label bg-white border border-primary rounded-pill p-1" alt="dtac" src="images/dtac.png" width="55px">
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <img class="form-check-label bg-white border border-success rounded-pill p-1" alt="ais" src="images/ais.png" width="55px">
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                        <img class="form-check-label bg-white border border-danger rounded-pill p-1" alt="true" src="images/true.png" width="55px">
                     </div>
                     <br />
                     <small class="text-danger">**สามารถย้ายค่ายได้ภายหลัง</small>
                  </div>
               </div>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 px-4">
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-gem fa-lg"></i> ประเภทเบอร์</label>
                  </div>
                  <div class="col-4 px-1 py-0">
                     <select class="form-select px-2" aria-label="Default select example">
                        <option selected>ทั้งหมด</option>
                        <option value="1">เบอร์มงคล</option>
                        <option value="2">เบอร์คู่</option>
                        <option value="3">เบอร์ตอง</option>
                        <option value="4">เบอร์ผลรวมดี</option>
                     </select>
                  </div>
                  <div class="col-4 px-1 py-0">
                     <select class="form-select px-2" aria-label="Default select example">
                        <option selected>ราคาทั้งหมด</option>
                        <option value="1">0-3000</option>
                        <option value="2">3000-5000</option>
                        <option value="3">5000-10000+</option>
                     </select>
                  </div>
                  <div class="col-4 px-1 py-0">
                     <select class="form-select px-2" aria-label="Default select example">
                        <option selected>ผลรวม</option>
                        <option value="1">ระหว่าง 50-60</option>
                        <option value="2">ระหว่าง 60-80</option>
                        <option value="3">ระหว่าง 80-100</option>
                     </select>
                  </div>
               </div>
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-thumbs-up fa-lg"></i> เลขที่ชอบ</label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2" readonly>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2 ">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 ">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-12 py-2 text-center">
                     <div class="form-check ">
                        <input class="form-check-input1" type="checkbox" value="" id="flexCheckDefault1">
                        <label class="form-check-label1 text-white" for="flexCheckDefault1">
                           ทั้งเบอร์ <label class="text-danger">*ทุกตำแหน่ง</label>
                        </label>
                     </div>
                  </div>
               </div>
               <!-- ไม่ชอบ -->
               <div class="row py-1 justify-content-center">
                  <div class="col-12 px-0 py-2">
                     <label class="goldtext fs-5 font2"><i class="fas fa-thumbs-down fa-lg"></i>เลขที่ไม่ชอบ</label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2" readonly>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2 ">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 text-center">
                     <label class="fs-4 fw-bold text-white"> - </label>
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0 ">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-1 px-0 py-0">
                     <input type="tel" aria-label="First name" value="0" maxlength="1" class="form-control text-center px-2">
                  </div>
                  <div class="col-12 py-2 text-center">
                     <div class="form-check ">
                        <input class="form-check-input2" type="checkbox" value="" id="flexCheckDefault2">
                        <label class="form-check-label2 text-white" for="flexCheckDefault2">
                           ทั้งเบอร์ <label class="text-danger">*ทุกตำแหน่ง</label>
                        </label>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 py-1 justify-content-center">
               <div class="col-12 px-0 py-2">
                  <label class="goldtext fs-5 font2"><i class="fas fa-feather fa-lg"></i> เลือกสิ่งที่ต้องการเน้นเสริมชีวิต</label>
               </div>
               <div class="col-12 px-1 py-0">
                  <div role="group" aria-label="Basic checkbox toggle button group">
                     <div class="row text-center py-2 px-2">

                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-money-bill-wave fa-2"></i></h2>
                           <label class="fs-6">การเงิน</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-heart fa-2"></i></h2>
                           <label class="fs-6">ความรัก</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-briefcase fa-2"></i></h2>
                           <label class="fs-6">การงาน</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-dice fa-2"></i></h2>
                           <label class="fs-6">โชคลาภ</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-procedures fa-2"></i></h2>
                           <label class="fs-6">สุขภาพ</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-american-sign-language-interpreting fa-2"></i></h2>
                           <label class="fs-6">สติปัญญา</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-university fa-2"></i></h2>
                           <label class="fs-6">อำนาจบารมี</label>

                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-3 py-2">

                           <h2><i class="fas fa-handshake fa-2"></i></h2>
                           <label class="fs-6">เจรจาค้าขาย</label>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="justify-content-center pt-3 pe-2">
            <button type="button" class="btn btn-outline-danger btn-lg fw-bold font2 w-100"><i class="fas fa-search fa-lg"></i> ค้นหาเลย </button>
         </div>
      </div>
   </div>
</div>

<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-auto py-4 wow fadeInUp">
   <div class="justify-content-center py-0">

      <h2 class="line text-center rainbow fw-bold"> โปรโมชั่น </h2>
      <div id="image-carousel" class="splide" aria-label="Splide">
         <div class="splide__track">
            <ul class="splide__list">
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P2.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P1.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P2.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P3.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P4.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
               <li class="splide__slide">
                  <div class="splide__slide__container">
                     <a href="#">
                        <div class="img-shine">
                           <figure>
                              <img class="img-rounded" src="images/promotion/P1.png" alt="">
                           </figure>
                        </div>
                     </a>
                  </div>
               </li>
            </ul>
         </div>
      </div>

      <div class="w-100 justify-content-between " style="display: flex;">
         <div class="flex-row justify-content-between border-gold rounded-3 py-1 px-2" style="background-color: #b40000;">

            <span class="fs-5 text-gold"> <i class="fas fa-award fa-lg"></i> เบอร์ที่ร้านภูมิใจเสนอ</span>

         </div>
         <a href="/index.php?p=list">
            <span class="badge rounded-pill my-2 bg-secondary">
               <label class="fs-6 fw-light ">ดูเบอร์ทั่งหมด <i class="fas fa-caret-right fa-lg"></i></label>
            </span>
         </a>
      </div>
      <!-- DETAIL NUMBER !-->
      <div class="row py-3 px-1">
         <?php
         $sqlquery_data1 = "SELECT * FROM Product WHERE Product_status !='close' and Product_typeID='2' LIMIT 12";
         $resultquery_data1 = dbQuery($sqlquery_data1);
         while ($data1 = dbFetchAssoc($resultquery_data1)) {
            $fullphone = '0' . $data1['product_num2'] . $data1['product_num3']  . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10'];
         ?>
            <!-- START DATA -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 py-2">

               <div data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                  <?php if ($data1['Product_status'] != 'free') { ?>
                     <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                        <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                     </div>
                  <?php } ?>
                  <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                     <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                     <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                  </div>
                  <figure>
                     <div class="card-body p-0 m-0">
                        <h2 class="p-0 pt-3 m-0 fw-bolder text-gold">
                           <i class="fas fa-mobile-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h2>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                        </span>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>
                        </span>
                        <div class="row text-light p-1">
                           <div class="col-6 border-end text-center">
                              <?php echo getProfilePicture(info_emp_sale($data1['NoEID'])['Emp_Name']); ?>
                              <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                           </div>
                           <div class="col-6 text-center">ราคา ฿<?php echo number_format($data1['Product_price']); ?></div>
                        </div>
                     </div>
                     <?php if ($data1['Product_status'] != 'free') { ?>
                        <div class="card-footer bg-dark text-light" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } else { ?>
                        <div class="card-footer goldcard text-dark" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } ?>
                  </figure>
               </div>

            </div>
            <!-- END DATA -->

            <!-- START MODAL -->
            <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="staticBackdrop<?php echo $data1['Product_ID']; ?>" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

               <div class="p-0 m-0 text-center pt-3">
                  <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
               </div>
               <div class="modal-dialog mt-0 pt-3">

                  <div class="modal-content border-gold-x2 rounded-3" data-bs-backdrop="true" style="background-color: #b40000;">
                     <div class="modal-header border-gold p-0 m-1 px-2">
                        <h1 class="modal-title fw-bolder text-gold " id="staticBackdropLabel"><i class="fas fa-phone-square-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body m-1 text-center border-gold">

                        <div class="badge py-1 px-3 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">

                           <img class="align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="35px">
                           <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                           |
                           ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                           |
                           เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>


                        </div>


                        <div class="card p-2 mt-2">
                           <div class="card-body p-0 text-center fs-3">
                              ราคา <?php echo number_format($data1['Product_price']); ?> บาท
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer py-1 px-1 bg-dark">
                        <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                           <a href="/index.php?number=<?php echo $fullphone; ?>&p=horo" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</a>
                           <?php if ($data1['Product_status'] != 'free') { ?>
                              <button type="button" class="btn btn-secondary fs-5 disabled"><i class="fas fa-shopping-basket"></i> จองแล้ว!</button>
                           <?php } else { ?>
                              <a href="/index.php?idnumber=<?php echo $data1['Product_ID']; ?>&p=cart" class="btn btn-danger fs-5"><i class="fas fa-shopping-basket"></i> จองเลย!</a>
                           <?php } ?>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
            <!-- END MODAL -->
         <?php } ?>
      </div>
      <!-- END / DETAIL NUMBER !-->

      <div class="w-100 justify-content-between pt-3" style="display: flex;">
         <div class="flex-row justify-content-between border-gold rounded-3 py-1 px-2" style="background-color: #b40000;">
            <span class="fs-5 text-gold"> <i class="fas fa-certificate fa-lg"></i> เบอร์แนะนำ</span>
         </div>
         <a href="/index.php?p=list">
            <span class="badge rounded-pill my-2 bg-secondary">
               <label class="fs-6 fw-light ">ดูเบอร์ทั่งหมด <i class="fas fa-caret-right fa-lg"></i></label>
            </span>
         </a>
      </div>
      <!-- DETAIL NUMBER !-->
      <div class="row py-3 px-1">
         <?php
         $sqlquery_data1 = "SELECT * FROM Product WHERE Product_status !='close' and Product_typeID='3' LIMIT 12";
         $resultquery_data1 = dbQuery($sqlquery_data1);
         while ($data1 = dbFetchAssoc($resultquery_data1)) {
            $fullphone = '0' . $data1['product_num2'] . $data1['product_num3']  . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10'];

         ?>
            <!-- START DATA -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 py-2">

               <div data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                  <?php if ($data1['Product_status'] != 'free') { ?>
                     <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                        <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                     </div>
                  <?php } ?>
                  <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                     <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                     <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                  </div>
                  <figure>
                     <div class="card-body p-0 m-0">
                        <h2 class="p-0 pt-3 m-0 fw-bolder text-gold">
                           <i class="fas fa-mobile-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h2>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                        </span>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>
                        </span>
                        <div class="row text-light p-1">
                           <div class="col-6 border-end text-center">
                              <?php echo getProfilePicture(info_emp_sale($data1['NoEID'])['Emp_Name']); ?>
                              <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                           </div>
                           <div class="col-6 text-center">ราคา ฿<?php echo number_format($data1['Product_price']); ?></div>
                        </div>
                     </div>
                     <?php if ($data1['Product_status'] != 'free') { ?>
                        <div class="card-footer bg-dark text-light" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } else { ?>
                        <div class="card-footer goldcard text-dark" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } ?>
                  </figure>
               </div>

            </div>
            <!-- END DATA -->

            <!-- START MODAL -->
            <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="staticBackdrop<?php echo $data1['Product_ID']; ?>" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

               <div class="p-0 m-0 text-center pt-3">
                  <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
               </div>
               <div class="modal-dialog mt-0 pt-3">

                  <div class="modal-content border-gold-x2 rounded-3" data-bs-backdrop="true" style="background-color: #b40000;">
                     <div class="modal-header border-gold p-0 m-1 px-2">
                        <h1 class="modal-title fw-bolder text-gold " id="staticBackdropLabel"><i class="fas fa-phone-square-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body m-1 text-center border-gold">

                        <div class="badge py-1 px-3 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">

                           <img class="align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="35px">
                           <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                           |
                           ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                           |
                           เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>


                        </div>


                        <div class="card p-2 mt-2">
                           <div class="card-body p-0 text-center fs-3">
                              ราคา <?php echo number_format($data1['Product_price']); ?> บาท
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer py-1 px-1 bg-dark">
                        <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                           <a href="/index.php?number=<?php echo $fullphone; ?>&p=horo" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</a>
                           <?php if ($data1['Product_status'] != 'free') { ?>
                              <button type="button" class="btn btn-secondary fs-5 disabled"><i class="fas fa-shopping-basket"></i> จองแล้ว!</button>
                           <?php } else { ?>
                              <button type="button" class="btn btn-danger fs-5"><i class="fas fa-shopping-basket"></i> จองเลย!</button>
                           <?php } ?>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
            <!-- END MODAL -->
         <?php } ?>
      </div>
      <!-- END / DETAIL NUMBER !-->

      <div class="w-100 justify-content-between pt-3" style="display: flex;">
         <div class="flex-row justify-content-between border-gold rounded-3 py-1 px-2" style="background-color: #b40000;">
            <span class="fs-5 text-gold"> <i class="fab fa-shopify fa-lg"></i> เบอร์ลดราคา</span>
         </div>
         <a href="/index.php?p=list">
            <span class="badge rounded-pill my-2 bg-secondary">
               <label class="fs-6 fw-light ">ดูเบอร์ทั่งหมด <i class="fas fa-caret-right fa-lg"></i></label>
            </span>
         </a>

      </div>
      <!-- DETAIL NUMBER !-->
      <div class="row py-3 px-1">
         <?php
         $sqlquery_data1 = "SELECT * FROM Product WHERE Product_status !='close' and Product_typeID='4' LIMIT 12";
         $resultquery_data1 = dbQuery($sqlquery_data1);
         while ($data1 = dbFetchAssoc($resultquery_data1)) {
            $fullphone = '0' . $data1['product_num2'] . $data1['product_num3']  . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10'];

         ?>
            <!-- START DATA -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 py-2">

               <div data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                  <?php if ($data1['Product_status'] != 'free') { ?>
                     <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                        <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                     </div>
                  <?php } ?>
                  <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                     <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                     <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                  </div>
                  <figure>
                     <div class="card-body p-0 m-0">
                        <h2 class="p-0 pt-3 m-0 fw-bolder text-gold">
                           <i class="fas fa-mobile-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h2>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                        </span>
                        <span class="badge rounded-pill bg-light fw-normal text-dark shadow">เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>
                        </span>
                        <div class="row text-light p-1">
                           <div class="col-6 border-end text-center">
                              <?php echo getProfilePicture(info_emp_sale($data1['NoEID'])['Emp_Name']); ?>
                              <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                           </div>
                           <div class="col-6 text-center">ราคา ฿<?php echo number_format($data1['Product_price']); ?></div>
                        </div>
                     </div>
                     <?php if ($data1['Product_status'] != 'free') { ?>
                        <div class="card-footer bg-dark text-light" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } else { ?>
                        <div class="card-footer goldcard text-dark" style="border-radius: 0 0 0.7rem 0.7rem;">
                           <i class="fas fa-qrcode fa-lg"></i> ซื้อเบอร์นี้
                        </div>
                     <?php } ?>
                  </figure>
               </div>

            </div>
            <!-- END DATA -->

            <!-- START MODAL -->
            <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="staticBackdrop<?php echo $data1['Product_ID']; ?>" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

               <div class="p-0 m-0 text-center pt-3">
                  <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
               </div>
               <div class="modal-dialog mt-0 pt-3">

                  <div class="modal-content border-gold-x2 rounded-3" data-bs-backdrop="true" style="background-color: #b40000;">
                     <div class="modal-header border-gold p-0 m-1 px-2">
                        <h1 class="modal-title fw-bolder text-gold " id="staticBackdropLabel"><i class="fas fa-phone-square-alt fa-sm"></i>
                           0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body m-1 text-center border-gold">

                        <div class="badge py-1 px-3 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">

                           <img class="align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="35px">
                           <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                           |
                           ผลรวม :
                           <label class="text-success fw-bold fs-6"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                           |
                           เด่น :
                           <label class="text-danger fw-bold fs-6 "><?php echo info_ability($data1['Product_ability1']); ?></label>
                           <label class="fw-bold text-secondary fs-6"><?php echo info_ability($data1['Product_ability2']); ?></label>


                        </div>


                        <div class="card p-2 mt-2">
                           <div class="card-body p-0 text-center fs-3">
                              ราคา <?php echo number_format($data1['Product_price']); ?> บาท
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer py-1 px-1 bg-dark">
                        <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                           <a href="/index.php?number=<?php echo $fullphone; ?>&p=horo" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</a>
                           <?php if ($data1['Product_status'] != 'free') { ?>
                              <button type="button" class="btn btn-secondary fs-5 disabled"><i class="fas fa-shopping-basket"></i> จองแล้ว!</button>
                           <?php } else { ?>
                              <button type="button" class="btn btn-danger fs-5"><i class="fas fa-shopping-basket"></i> จองเลย!</button>
                           <?php } ?>
                        </div>
                     </div>
                  </div>


               </div>
            </div>
            <!-- END MODAL -->
         <?php } ?>
      </div>
      <!-- END / DETAIL NUMBER !-->

   </div>
</div>

<div class="b-example-divider"></div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
      new Splide('#image-carousel', {
         type: 'loop',
         height: '20rem',
         focus: 'center',
         autoWidth: true,
         autoplay: 'playing',
      }).mount();

   });
</script>