<div class="container py-2">
   <div class="row p-2">
      <label class="text-center fw-bold text-danger wow bounceIn" style="font-size:3rem;">
         บทความ
      </label>
      <?php
      $sqlquery_data1 = "SELECT * FROM archives ORDER BY arc_id DESC";
      $resultquery_data1 = dbQuery($sqlquery_data1);
      while ($data1 = dbFetchAssoc($resultquery_data1)) {
      ?>
         <div class="col-12 col-lg-4">
            <div class="card my-2">
               <img src="<?php echo $data1['arc_picture']; ?>" width="400px" height="270px" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title"><?php echo $message = mb_strimwidth($data1['arc_title'], 0, 20, '...'); ?></h5>
                  <p class="card-text"><?php echo $message = mb_strimwidth($data1['arc_body'], 0, 50, '...'); ?></p>
               </div>
               <div class="card-footer text-center">
                  <a href="#" class="btn text-decoration-none text-muted w-100">อ่านบทความนี้..</a>
               </div>
            </div>
         </div>
      <?php } ?>
   </div>
</div>
<div class="b-example-divider "></div>