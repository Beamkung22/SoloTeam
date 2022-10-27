<script>
   $(document).ready(function() {
      $('input').on("input", function() {
         if ($(this).val().length == $(this).attr("maxlength")) {
            $(this).next().focus();
         }
      });
   });
</script>
<div class="container-fluid">
   <div class="card my-3">
      <div class="card-body py-2 px-2 fw-bolder text-muted">
         <i class="fas fa-angle-right"></i> เพิ่มเบอร์ใหม่
      </div>
   </div>
   <form name="testline-form" id="testline-form" method="get" target="iframe_target">
      <button type="submit" onclick="return confirm('Test Line?');" name="btnTestline" class="btn btn-danger btn-circle btn-sm">Test Line</button>
   </form>
   <div class="card shadow-sm border-gold mb-5">

      <div class="card-header p-auto text-center" style="background-color: #b40000;">
         <label class="text-gold fw-bold fs-2"><i class=" fas fa-plus-circle"></i> เพิ่มเบอร์ใหม่</label>
      </div>

      <div class="card-body p-1 p-sm-4">
         <ul class="nav nav-tabs mt-0" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
               <button class="nav-link text-dark active" id="add1-tab" data-bs-toggle="tab" data-bs-target="#add1" type="button" role="tab" aria-controls="add1" aria-selected="true"><i class="far fa-hand-point-up"></i> เพิ่มเอง</button>
            </li>
            <li class="nav-item" role="presentation">
               <button class="nav-link text-dark" id="addxlc-tab" data-bs-toggle="tab" data-bs-target="#addxlc" type="button" role="tab" aria-controls="addxlc" aria-selected="false"><i class="fas fa-table"></i> เพิ่มโดย Excel</button>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="add1" role="tabpanel" aria-labelledby="add1-tab">
               <form name="addnumber1-form" id="addnumber1-form" method="post" target="iframe_target">
                  <h4 class="fw-bold form-label my-3 mx-auto"><i class="fas fa-sim-card text-gold fs-lg"></i> เบอร์ 10 หลัก</h4>
                  <div class="input-group">
                     <input type="text" aria-label="num0" maxlength="1" class="form-control text-center p-0 py-2 m-0" value="0" disabled readonly />
                     <input type="text" aria-label="num1" id="num1" name="num1" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num2" id="num2" name="num2" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num3" id="num3" name="num3" maxlength="1" class="form-control text-center  p-0 py-2 m-0" />
                     <input type="text" aria-label="num4" id="num4" name="num4" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num5" id="num5" name="num5" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num6" id="num6" name="num6" maxlength="1" class="form-control text-center  p-0 py-2 m-0" />
                     <input type="text" aria-label="num7" id="num7" name="num7" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num8" id="num8" name="num8" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                     <input type="text" aria-label="num9" id="num9" name="num9" maxlength="1" class="form-control text-center p-0 py-2 m-0" />
                  </div>
                  <h5 class="fw-bold form-label my-3 mx-auto"><i class="fas fa-signal text-gold fs-lg"></i> เครือข่าย/ประเภท</h5>
                  <div class="input-group">
                     <select class="form-select text-center form-select-lg p-0 py-2 m-0" name="networkID" id="networkID" aria-label="">
                        <option value="" selected>- - เลือกเครือข่าย - -</option>
                        <option value="1">AIS</option>
                        <option value="2">True</option>
                        <option value="3">Dtac</option>
                     </select>
                     <select class="form-select text-center form-select-lg p-0 py-2 m-0" name="numtype" id="numtype" aria-label="">
                        <option value="" selected>- - ประเภท - -</option>
                        <option value="0">เติมเงิน</option>
                        <option value="1">รายเดือน</option>
                     </select>
                  </div>
                  <h5 class="fw-bold form-label my-3 mx-auto"><i class="fas fa-wallet text-gold fs-lg"></i> ราคาขาย</h5>
                  <div class="input-group">
                     <input type="number" aria-label="num10" maxlength="9" name="numprice" id="numprice" class="form-control text-center p-0 py-2 m-0" />
                  </div>
                  <h5 class="fw-bold form-label my-3 mx-auto"><i class="fas fa-signal text-gold fs-lg"></i> เบอร์เด่น</h5>
                  <div class="input-group">
                     <select class="form-select text-center form-select-lg p-0 py-2 m-0" name="Product_ability1" id="Product_ability1" aria-label="">
                        <option value="" selected>- - เด่น 1 - -</option>
                        <option value="1">การเงิน</option>
                        <option value="2">ความรัก</option>
                        <option value="3">การงาน</option>
                        <option value="4">โชคลาภ</option>
                        <option value="5">สุขภาพ</option>
                        <option value="6">สติปัญญา</option>
                        <option value="7">อำนาจบารมี</option>
                        <option value="8">เจรจาค้าขาย</option>
                     </select>
                     <select class="form-select text-center form-select-lg p-0 py-2 m-0" name="Product_ability2" id="Product_ability2" aria-label="">
                        <option value="" selected>- - เด่น 2 - -</option>
                        <option value="1">การเงิน</option>
                        <option value="2">ความรัก</option>
                        <option value="3">การงาน</option>
                        <option value="4">โชคลาภ</option>
                        <option value="5">สุขภาพ</option>
                        <option value="6">สติปัญญา</option>
                        <option value="7">อำนาจบารมี</option>
                        <option value="8">เจรจาค้าขาย</option>
                     </select>
                  </div>
                  <div class="text-center mt-3">
                     <button type="submit" onclick="return confirm('ตรวจสอบข้อมูลถูกต้อง?');" name="btn_addnumber1" class="btn btn-lg btn-danger w-100 border-gold-x2 w-10"><label class="fw-bold"><i class="fas fa-plus"></i> เพิ่มเบอร์นี้</label></button>
                  </div>
               </form>
            </div>
            <div class="tab-pane fade" id="addxlc" role="tabpanel" aria-labelledby="addxlc-tab">
               <h3 class="p-3">Coming Soon!</h3>
            </div>
         </div>
      </div>

   </div>
</div>