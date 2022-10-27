<?php

if (!$_GET['number']) {
   $_GET['number'] = '0000000000';
} elseif ($_GET['number'] != null) {
   foreach ($_GET as $key => $value) {
      $_GET[$key] = addslashes(strip_tags(trim($value)));
   }
   if ($_GET['id'] != '') {
      $_GET['id'] = (int) $_GET['id'];
   }
   extract($_GET);
} else {
   $_GET['number'] = '0000000000';
}
$str = $_GET['number'];
$str = str_replace('-', '', $str); //ตัดขีดออก ถ้ามี
$ber[2] = substr($str, -9, -8);
$ber[3] = substr($str, -8, -7);
$ber[4] = substr($str, -7, -6);
$ber[5] = substr($str, -6, -5);
$ber[6] = substr($str, -5, -4);
$ber[7] = substr($str, -4, -3);
$ber[8] = substr($str, -3, -2);
$ber[9] = substr($str, -2, -1);
$ber[10] = substr($str, -1);
$allsum = $ber[2] + $ber[3] + $ber[4] + $ber[5] + $ber[6] + $ber[7] + $ber[8] + $ber[9] + $ber[10];

?>
<div class="container col-xxl-8 px-auto wow fadeInUp">
   <div class="row align-items-center mb-3 py-0">

      <div class="col-12 col-sm-12 col-lg-12 text-center font2">
         <img src="images/tum9_popup.gif" width="350px"><br />
         <p class="fs-5 rainbow" style="font-size: 32px;"><i class="fas fa-star fa-sm"></i>CHECK YOUR NUMBER</p>
         <div class="d-grid gap-2 d-md-flex justify-content-center">
            <div class="p-0">
               <form method="get" action="/index.php?p=horo">
                  <div class="input-group input-group-lg custom-input-group">
                     <input type="tel" pattern="[0-9]*" inputmode="numeric" id="number" name="number" class="form-control shadow" minlength="10" placeholder="กรอกเบอร์มือถือ 10 หลัก" required>
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


<div class="container py-1 wow fadeInUp">
   <div class="row my-3">

      <div class="card mx-auto p-0 border-danger shadow" style="width:550px;">
         <h5 class="card-header bg-danger text-white"><i class="fas fa-magic"></i> ผลการคำนาย</h5>
         <div class="card-body">
            <h1 class="text-center text-danger fw-bold">
               <?php
               echo '0' . $ber[2] . $ber[3] . '-' . $ber[4] . $ber[5] . $ber[6] . '-' . $ber[7] . $ber[8] . $ber[9] . $ber[10];
               ?>
            </h1>
            <hr />
            <h3>ผลรวมได้ : <?php echo $allsum; ?></h3>
            <?php echo info_sum2($allsum)['horo_sum_fulltext']; ?>

            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[9] . $ber[10]; ?></h5>
            <?php echo info_number2($ber[9] . $ber[10])['horo_text'] ?>
            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[8] . $ber[9]; ?></h5>
            <?php echo info_number2($ber[8] . $ber[9])['horo_text'] ?>
            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[7] . $ber[8]; ?></h5>
            <?php echo info_number2($ber[7] . $ber[8])['horo_text'] ?>
            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[6] . $ber[7]; ?></h5>
            <?php echo info_number2($ber[6] . $ber[7])['horo_text'] ?>
            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[5] . $ber[6]; ?></h5>
            <?php echo info_number2($ber[5] . $ber[6])['horo_text'] ?>
            <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $ber[4] . $ber[5]; ?></h5>
            <?php echo info_number2($ber[4] . $ber[5])['horo_text'] ?>
         </div>
      </div>

   </div>
</div>

<div class="b-example-divider"></div>