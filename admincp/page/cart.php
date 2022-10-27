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
               <th>รายการที่</th>
               <th>ลูกค้า</th>
               <th>สถานะ</th>
               <th>จัดการ</th>
            </tr>
         </thead>
         <tbody>
            <?php
            if(check_cart()){ 
            $resultuser = info_view_book_all_bill();
            while ($row = dbFetchArray($resultuser,1)) {
               $tmp_edit = '<a class="btn btn-warning btn-sm fw-bold" href="edit/' . $row["Group_cart"] . '"><i class="fas fa-edit"></i></a>';
               $tmp_remove = '<a class="btn btn-danger btn-sm fw-bold" href="page.php?id=cart_rm&Gpid=' . $row["Group_cart"] . '"><i class="fas fa-trash"></i></a>';
               $tmp_check = '<a class="btn btn-warning btn-sm fw-bold" href="page.php?id=cart_chk&Gpid=' . $row["Group_cart"] . '"><i class="fas fa-check"></i></a>';
            ?>
               <tr>
                  <td><?php echo $row['Group_cart']; ?></td>
                  <td><?php echo $row['Username']; ?></td>
                  <td><?php echo info_status_cart($row['Cart_status']); ?></td>
                  <td><?php echo $tmp_check . ' ' . $tmp_edit . ' ' . $tmp_remove; ?></td>
               </tr>
            <?php
            }
         }else{
            ?>
            <tr>
            </tr>
            <?php
         }
            ?>
         </tbody>
      </table>
   </div>
</div>