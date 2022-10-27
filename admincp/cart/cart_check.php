<?php 
if (!$_GET['Gpid']) {
    $_GET['Gpid'] = ''; //Wow Wow
 } elseif ($_GET['Gpid'] != null) {
    foreach ($_GET as $key => $value) {
       $_GET[$key] = addslashes(strip_tags(trim($value)));
    }
    if ($_GET['id'] != '') {
       $_GET['id'] = (int) $_GET['id'];
    }
    extract($_GET);
 } else {
    $_GET['Gpid'] = '';
 }
 $str = $_GET['Gpid'];
?>
<script>
   $(document).ready(function() {
      $('#cartcart').DataTable({
         lengthMenu: [
            [10, 50, 100, -1],
            [10, 50, 100, 'All'],
         ],

         language: {
            lengthMenu: 'แสดงข้อมูล _MENU_ ในหน้า',
            zeroRecords: 'ขออภัย ไม่พบข้อมูลที่ค้นหา',
            info: 'แสดงข้อมูล _PAGE_ ใน _PAGES_',
            infoEmpty: 'ไม่มีข้อมูลพร้อมใช้งาน',
            infoFiltered: '(ค้นหาจาก _MAX_ ข้อมูล)',
            sSearch: 'ค้นหา:',
            sProcessing: 'กำลังดำเนินการ...',
            oPaginate: {
               'sFirst': 'เริ่มต้น',
               'sPrevious': 'ก่อนหน้า',
               'sNext': 'ถัดไป',
               'sLast': 'สุดท้าย'
            },
         },
         processing: true,
         columnDefs: [{
            className: "dt-center",
            targets: [0, 1, 2, 3, 4, 5, 6]
         }],
      });
   });
</script>
<div class="container-fluid">
   <div class="card my-3">
      <div class="card-body py-2 px-2 fw-bolder text-muted">
         <i class="fas fa-angle-right"></i> เบอร์ทั้งหมด
      </div>
   </div>
   <div class="alert alert-secondary my-3" role="alert">
      <i class="fas fa-bomb fa-lg"></i> ตัวแทนขายจะเห็นแค่<u>หมายเลขเบอร์ที่ตัวเองลงขาย</u>เท่านั้น เพื่อความสะดวกในการแก้ไข
      <label class="text-danger">แต่ไม่สามารถเพิ่มหมายเลขซ้ำกับตัวแทนรายอื่นได้เช่นเดิม</label>
      <hr class="p-0 my-1">
      <label class="small">
         **ทางผู้ดูแลระบบ สามารถแก้ไขเบอร์และลบออกจากระบบได้โดยไม่ต้องแจ้งล่วงหน้า หากตัวแทนทำผิดกฏใดๆ
      </label>
   </div>
   <div class="card my-3 p-2 shadow-sm">
      <table id="cartcart" class="table text-center align-middle table-sm table-striped table-hover border border-light" style="width:100%">
         <thead>
            <tr>
               <th>เครือข่าย</th>
               <th>เบอร์</th>
               <th>รูปแบบ</th>
               <th>ราคาขาย</th>
               <th>หมวด</th>
               <th>เจ้าของ</th>
               <th>เวลาจอง</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $resultuser = info_view_book_byGroup($str);
            while ($row = dbFetchArray($resultuser,1)) {
               $tmp_edit = '<a class="btn btn-warning btn-sm fw-bold" href="edit/' . $row["Group_cart"] . '"><i class="fas fa-edit"></i></a>';
               $tmp_remove = '<a class="btn btn-danger btn-sm fw-bold" href="remove/' . $row["Group_cart"] . '"><i class="fas fa-trash"></i></a>';
               $image = info_Network($row["Product_networkID"])['Product_networkPicture'];
            ?>
               <tr>
                  <td><img src="<?php echo $image ?>" style="width:40px"></td>
                  <td><label class="fw-bold fs-3">
                        <?php echo $row["fullphone"]
                           . '</label>';
                        ?></td>
                  <td><?php echo info_topup($row["Product_topup"]); ?></td>
                  <td>฿<?php echo number_format($row["Product_price"]); ?></td>
                  <td>
                     <div class="badge bg-light text-dark"><?php echo info_producttype($row["Product_typeID"])['Product_typeName']; ?></div>
                  </td>
                  <td><?php echo info_emp_sale($row['NoEID'])['Emp_Name']; ?></td>
                  <td><?php echo $row["Product_cart_datetime"]; ?></td>
                  <td><?php echo $tmp_edit . ' ' . $tmp_remove; ?></td>
               </tr>
            <?php
            }
            ?>
         </tbody>
      </table>
   </div>
</div>
