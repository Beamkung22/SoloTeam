<div class="container col-xxl-8 px-auto py-3 wow fadeInUp">


   <!-- HTML !-->
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
         <button class="nav-link mb-0 text-danger fs-5 active" id="nav-tab1-tab" data-bs-toggle="tab" data-bs-target="#nav-tab1" type="button" role="tab" aria-controls="nav-tab1" aria-selected="true"><i class="fas fa-chevron-circle-right fa-lg"></i> เบอร์ทั้งหมด</button>
      </li>
      <li class="nav-item" role="presentation">
         <button class="nav-link mb-0 text-danger fs-5" id="nav-tab2-tab" data-bs-toggle="tab" data-bs-target="#nav-tab2" type="button" role="tab" aria-controls="nav-tab2" aria-selected="false"><i class="fas fa-award fa-lg"></i> เบอร์ภูมิใจเสนอ</button>
      </li>
      <li class="nav-item" role="presentation">
         <button class="nav-link mb-0 text-danger fs-5" id="nav-tab3-tab" data-bs-toggle="tab" data-bs-target="#nav-tab3" type="button" role="tab" aria-controls="nav-tab3" aria-selected="false"><i class="fas fa-certificate fa-lg"></i> เบอร์แนะนำ</button>
      </li>
      <li class="nav-item" role="presentation">
         <button class="nav-link mb-0 text-danger fs-5" id="nav-tab4-tab" data-bs-toggle="tab" data-bs-target="#nav-tab4" type="button" role="tab" aria-controls="nav-tab4" aria-selected="false"><i class="fas fa-certificate fa-lg"></i> เบอร์ลดราคา</button>
      </li>
   </ul>

   <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-tab1" role="tabpanel" aria-labelledby="nav-tab1-tab">
         <!-- DETAIL NUMBER !-->
         <div class="row py-3 px-1">

            <?php
            $sqlquery_data1 = "SELECT * FROM Product WHERE Product_status !='close'";
            $resultquery_data1 = dbQuery($sqlquery_data1);
            while ($data1 = dbFetchAssoc($resultquery_data1)) {
            ?>
               <div class="col-6 col-sm-6 col-md-3 col-lg-3 px-1 py-2">

                  <div data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                     <?php if ($data1['Product_status'] != 'free') { ?>
                        <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                           <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                        </div>
                        <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-dark border-gold text-muted position-absolute top-0 start-50 translate-middle">
                        <?php } else { ?>
                           <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                           <?php } ?>
                           <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                           <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                           </div>
                           <figure>
                              <div class="card-body p-0 m-0">
                                 <h4 class="p-0 pt-3 m-0 fw-bolder text-gold">
                                    <i class="fas fa-mobile-alt fa-sm"></i>
                                    0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                                 </h4>
                                 <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                                    <label class=" text-success fw-bold"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                                 </span>
                                 <br />
                                 <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">
                                    <label class="small text-success fw-bold"><?php echo info_ability($data1['Product_ability1']); ?>,</label>
                                    <label class="small fw-bold text-success"><?php echo info_ability($data1['Product_ability2']); ?></label>
                                 </span>
                                 <div class="row text-light p-1">
                                    <div class="col-6 border-end text-center">
                                       ผู้ขาย<br />
                                       <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                                    </div>
                                    <div class="col-6 text-center">ราคา <br />฿<?php echo number_format($data1['Product_price']); ?></div>
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
                        <!-- START MODAL -->
                        <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="staticBackdrop<?php echo $data1['Product_ID']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

                           <div class="p-0 m-0 text-center pt-3">
                              <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
                           </div>
                           <div class="modal-dialog pt-1">

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
                                       <div class="card-body p-0 text-start">
                                          <h4>ผลรวม - <?php echo info_phone_sum($data1['Product_ID']); ?></h4>
                                          <?php echo info_sum2(info_phone_sum($data1['Product_ID']))['horo_sum_text'] ?>
                                          <hr />
                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num9'] . $data1['product_num10']; ?></h5>
                                          <?php echo info_number2($data1['product_num9'] . $data1['product_num10'])['horo_text'] ?>

                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num8'] . $data1['product_num9']; ?></h5>
                                          <?php echo info_number2($data1['product_num8'] . $data1['product_num9'])['horo_text'] ?>

                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num7'] . $data1['product_num8']; ?></h5>
                                          <?php echo info_number2($data1['product_num7'] . $data1['product_num8'])['horo_text'] ?>

                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num6'] . $data1['product_num7']; ?></h5>
                                          <?php echo info_number2($data1['product_num6'] . $data1['product_num7'])['horo_text'] ?>

                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num5'] . $data1['product_num6']; ?></h5>
                                          <?php echo info_number2($data1['product_num5'] . $data1['product_num6'])['horo_text'] ?>

                                          <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num4'] . $data1['product_num5']; ?></h5>
                                          <?php echo info_number2($data1['product_num4'] . $data1['product_num5'])['horo_text'] ?>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer py-1 px-1 bg-dark">
                                    <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                                       <button type="button" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</button>
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
                  </div>
               <?php
            }
               ?>

               </div>
               <!-- END / DETAIL NUMBER !-->
         </div>
         <div class="tab-pane fade" id="nav-tab2" role="tabpanel" aria-labelledby="nav-tab2-tab">
            <!-- DETAIL NUMBER !-->
            <div class="row py-3 px-1">

               <?php
               $sqlquery_data2 = "SELECT * FROM Product WHERE Product_status !='close' AND Product_typeID='2'";
               $resultquery_data2 = dbQuery($sqlquery_data2);
               while ($data1 = dbFetchAssoc($resultquery_data2)) {
               ?>
                  <div class="col-6 col-sm-6 col-md-3 col-lg-3 px-1 py-2">

                     <div data-bs-toggle="modal" data-bs-target="#type2<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                        <?php if ($data1['Product_status'] != 'free') { ?>
                           <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                              <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                           </div>
                           <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-dark border-gold text-muted position-absolute top-0 start-50 translate-middle">
                           <?php } else { ?>
                              <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                              <?php } ?>
                              <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                              <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                              </div>
                              <figure>
                                 <div class="card-body p-0 m-0">
                                    <h4 class="p-0 pt-3 m-0 fw-bolder text-gold">
                                       <i class="fas fa-mobile-alt fa-sm"></i>
                                       0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                                    </h4>
                                    <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                                       <label class=" text-success fw-bold"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                                    </span>
                                    <br />
                                    <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">
                                       <label class="small text-success fw-bold"><?php echo info_ability($data1['Product_ability1']); ?>,</label>
                                       <label class="small fw-bold text-success"><?php echo info_ability($data1['Product_ability2']); ?></label>
                                    </span>
                                    <div class="row text-light p-1">
                                       <div class="col-6 border-end text-center">
                                          ผู้ขาย<br />
                                          <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                                       </div>
                                       <div class="col-6 text-center">ราคา <br />฿<?php echo number_format($data1['Product_price']); ?></div>
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
                           <!-- START MODAL -->
                           <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="type2<?php echo $data1['Product_ID']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="type2<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

                              <div class="p-0 m-0 text-center pt-3">
                                 <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
                              </div>
                              <div class="modal-dialog pt-1">

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
                                          <div class="card-body p-0 text-start">
                                             <h4>ผลรวม - <?php echo info_phone_sum($data1['Product_ID']); ?></h4>
                                             <?php echo info_sum2(info_phone_sum($data1['Product_ID']))['horo_sum_text'] ?>
                                             <hr />
                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num9'] . $data1['product_num10']; ?></h5>
                                             <?php echo info_number2($data1['product_num9'] . $data1['product_num10'])['horo_text'] ?>

                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num8'] . $data1['product_num9']; ?></h5>
                                             <?php echo info_number2($data1['product_num8'] . $data1['product_num9'])['horo_text'] ?>

                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num7'] . $data1['product_num8']; ?></h5>
                                             <?php echo info_number2($data1['product_num7'] . $data1['product_num8'])['horo_text'] ?>

                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num6'] . $data1['product_num7']; ?></h5>
                                             <?php echo info_number2($data1['product_num6'] . $data1['product_num7'])['horo_text'] ?>

                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num5'] . $data1['product_num6']; ?></h5>
                                             <?php echo info_number2($data1['product_num5'] . $data1['product_num6'])['horo_text'] ?>

                                             <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num4'] . $data1['product_num5']; ?></h5>
                                             <?php echo info_number2($data1['product_num4'] . $data1['product_num5'])['horo_text'] ?>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer py-1 px-1 bg-dark">
                                       <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                                          <button type="button" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</button>
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
                     </div>
                  <?php
               }
                  ?>

                  </div>
                  <!-- END / DETAIL NUMBER !-->
            </div>
            <div class="tab-pane fade" id="nav-tab3" role="tabpanel" aria-labelledby="nav-tab3-tab">
               <!-- DETAIL NUMBER !-->
               <div class="row py-3 px-1">

                  <?php
                  $sqlquery_data3 = "SELECT * FROM Product WHERE Product_status !='close' AND Product_typeID='3'";
                  $resultquery_data3 = dbQuery($sqlquery_data3);
                  while ($data1 = dbFetchAssoc($resultquery_data3)) {
                  ?>
                     <div class="col-6 col-sm-6 col-md-3 col-lg-3 px-1 py-2">

                        <div data-bs-toggle="modal" data-bs-target="#type3<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                           <?php if ($data1['Product_status'] != 'free') { ?>
                              <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                                 <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                              </div>
                              <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-dark border-gold text-muted position-absolute top-0 start-50 translate-middle">
                              <?php } else { ?>
                                 <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                                 <?php } ?>
                                 <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                                 <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                                 </div>
                                 <figure>
                                    <div class="card-body p-0 m-0">
                                       <h4 class="p-0 pt-3 m-0 fw-bolder text-gold">
                                          <i class="fas fa-mobile-alt fa-sm"></i>
                                          0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                                       </h4>
                                       <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                                          <label class=" text-success fw-bold"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                                       </span>
                                       <br />
                                       <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">
                                          <label class="small text-success fw-bold"><?php echo info_ability($data1['Product_ability1']); ?>,</label>
                                          <label class="small fw-bold text-success"><?php echo info_ability($data1['Product_ability2']); ?></label>
                                       </span>
                                       <div class="row text-light p-1">
                                          <div class="col-6 border-end text-center">
                                             ผู้ขาย<br />
                                             <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                                          </div>
                                          <div class="col-6 text-center">ราคา <br />฿<?php echo number_format($data1['Product_price']); ?></div>
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
                              <!-- START MODAL -->
                              <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="type3<?php echo $data1['Product_ID']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="type3<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

                                 <div class="p-0 m-0 text-center pt-3">
                                    <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
                                 </div>
                                 <div class="modal-dialog pt-1">

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
                                             <div class="card-body p-0 text-start">
                                                <h4>ผลรวม - <?php echo info_phone_sum($data1['Product_ID']); ?></h4>
                                                <?php echo info_sum2(info_phone_sum($data1['Product_ID']))['horo_sum_text'] ?>
                                                <hr />
                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num9'] . $data1['product_num10']; ?></h5>
                                                <?php echo info_number2($data1['product_num9'] . $data1['product_num10'])['horo_text'] ?>

                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num8'] . $data1['product_num9']; ?></h5>
                                                <?php echo info_number2($data1['product_num8'] . $data1['product_num9'])['horo_text'] ?>

                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num7'] . $data1['product_num8']; ?></h5>
                                                <?php echo info_number2($data1['product_num7'] . $data1['product_num8'])['horo_text'] ?>

                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num6'] . $data1['product_num7']; ?></h5>
                                                <?php echo info_number2($data1['product_num6'] . $data1['product_num7'])['horo_text'] ?>

                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num5'] . $data1['product_num6']; ?></h5>
                                                <?php echo info_number2($data1['product_num5'] . $data1['product_num6'])['horo_text'] ?>

                                                <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num4'] . $data1['product_num5']; ?></h5>
                                                <?php echo info_number2($data1['product_num4'] . $data1['product_num5'])['horo_text'] ?>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="modal-footer py-1 px-1 bg-dark">
                                          <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                                             <button type="button" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</button>
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
                        </div>
                     <?php
                  }
                     ?>

                     </div>
                     <!-- END / DETAIL NUMBER !-->
               </div>
               <div class="tab-pane fade" id="nav-tab4" role="tabpanel" aria-labelledby="nav-tab4-tab">
                  <!-- DETAIL NUMBER !-->
                  <div class="row py-3 px-1">

                     <?php
                     $sqlquery_data4 = "SELECT * FROM Product WHERE Product_status !='close' AND Product_typeID='4'";
                     $resultquery_data4 = dbQuery($sqlquery_data4);
                     while ($data1 = dbFetchAssoc($resultquery_data4)) {
                     ?>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 px-1 py-2">

                           <div data-bs-toggle="modal" data-bs-target="#type4<?php echo $data1['Product_ID']; ?>" class="card img-shine px-0 text-center border-gold-x2 rounded-4 shadow" style="background-color: #b40000;">
                              <?php if ($data1['Product_status'] != 'free') { ?>
                                 <div class="bg-dark text-light w-100 h-100 rounded-3" style="opacity: 0.6;z-index:1;position: absolute;">
                                    <h1 class="my-auto" style="padding: 50px 0;"><i class="fas fa-lock"></i> จองแล้ว</h1>
                                 </div>
                                 <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-dark border-gold text-muted position-absolute top-0 start-50 translate-middle">
                                 <?php } else { ?>
                                    <div class="badge p-0 px-2 m-0 rounded-pill fw-light bg-light border-gold text-dark position-absolute top-0 start-50 translate-middle">
                                    <?php } ?>
                                    <img class="p-1 align-middle" alt="<?php echo info_Network($data1['Product_networkID'])['Product_networkName']; ?>" src="<?php echo info_Network($data1['Product_networkID'])['Product_networkPicture']; ?>" width="45px">
                                    <label class="fw-bolder align-middle" style="font-size:12px;">- <?php echo info_topup($data1['Product_topup']); ?></label>
                                    </div>
                                    <figure>
                                       <div class="card-body p-0 m-0">
                                          <h4 class="p-0 pt-3 m-0 fw-bolder text-gold">
                                             <i class="fas fa-mobile-alt fa-sm"></i>
                                             0<?php echo $data1['product_num2'] . $data1['product_num3'] . "-" . $data1['product_num4'] . $data1['product_num5'] . $data1['product_num6'] . "-" . $data1['product_num7'] . $data1['product_num8'] . $data1['product_num9'] . $data1['product_num10']; ?>
                                          </h4>
                                          <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">ผลรวม :
                                             <label class=" text-success fw-bold"><?php echo info_phone_sum($data1['Product_ID']); ?></label>
                                          </span>
                                          <br />
                                          <span class="small badge rounded-pill bg-light fw-normal text-dark shadow">
                                             <label class="small text-success fw-bold"><?php echo info_ability($data1['Product_ability1']); ?>,</label>
                                             <label class="small fw-bold text-success"><?php echo info_ability($data1['Product_ability2']); ?></label>
                                          </span>
                                          <div class="row text-light p-1">
                                             <div class="col-6 border-end text-center">
                                                ผู้ขาย<br />
                                                <label class="fs-6"><?php echo info_emp_sale($data1['NoEID'])['Emp_Name']; ?></label>
                                             </div>
                                             <div class="col-6 text-center">ราคา <br />฿<?php echo number_format($data1['Product_price']); ?></div>
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
                                 <!-- START MODAL -->
                                 <div class="modal fade" style="background: rgba(60, 60, 60, 0.8);" id="type4<?php echo $data1['Product_ID']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="type4<?php echo $data1['Product_ID']; ?>" aria-hidden="true">

                                    <div class="p-0 m-0 text-center pt-3">
                                       <img src="images/logokt.gif" alt="logo" width="250px" class="text-center rounded-pill">
                                    </div>
                                    <div class="modal-dialog pt-1">

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
                                                <div class="card-body p-0 text-start">
                                                   <h4>ผลรวม - <?php echo info_phone_sum($data1['Product_ID']); ?></h4>
                                                   <?php echo info_sum2(info_phone_sum($data1['Product_ID']))['horo_sum_text'] ?>
                                                   <hr />
                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num9'] . $data1['product_num10']; ?></h5>
                                                   <?php echo info_number2($data1['product_num9'] . $data1['product_num10'])['horo_text'] ?>

                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num8'] . $data1['product_num9']; ?></h5>
                                                   <?php echo info_number2($data1['product_num8'] . $data1['product_num9'])['horo_text'] ?>

                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num7'] . $data1['product_num8']; ?></h5>
                                                   <?php echo info_number2($data1['product_num7'] . $data1['product_num8'])['horo_text'] ?>

                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num6'] . $data1['product_num7']; ?></h5>
                                                   <?php echo info_number2($data1['product_num6'] . $data1['product_num7'])['horo_text'] ?>

                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num5'] . $data1['product_num6']; ?></h5>
                                                   <?php echo info_number2($data1['product_num5'] . $data1['product_num6'])['horo_text'] ?>

                                                   <h5><i class="fas fa-hand-point-right"></i> เลขคู่ <?php echo $data1['product_num4'] . $data1['product_num5']; ?></h5>
                                                   <?php echo info_number2($data1['product_num4'] . $data1['product_num5'])['horo_text'] ?>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="modal-footer py-1 px-1 bg-dark">
                                             <div class="btn-group w-100 text-white" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-warning fs-5"><i class="fas fa-info-circle"></i> เช็คดวง</button>
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
                           </div>
                        <?php
                     }
                        ?>

                        </div>
                        <!-- END / DETAIL NUMBER !-->
                  </div>
               </div>

            </div>




            <div class="b-example-divider"></div>