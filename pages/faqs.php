<div class="container py-2">
   <div class="row p-2">
      <label class="text-center fw-bold text-danger wow bounceIn" style="font-size:3rem;">
         คำถามที่พบบ่อย/วิธีแก้ไขต่างๆ
      </label>
      <?php
      $sqlquery_data1 = "SELECT * FROM faqs ORDER BY faqs_id ASC";
      $resultquery_data1 = dbQuery($sqlquery_data1);
      while ($data1 = dbFetchAssoc($resultquery_data1)) {
      ?>
         <div class="col-12 py-2 text-center">
            <a class="fs-3 text-decoration-none text-danger border-bottom" data-bs-toggle="collapse" href="#cla<?php echo $data1['faqs_id']; ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
               <i class="far fa-question-circle"></i> <label class="text-secondary"><?php echo $data1['faqs_title']; ?></label>
            </a>
            <div class="collapse" id="cla<?php echo $data1['faqs_id']; ?>">
               <div class="card card-body">
                  <?php echo $data1['faqs_body']; ?>
               </div>
            </div>

         </div>
      <?php } ?>
   </div>
</div>
<div class="b-example-divider "></div>