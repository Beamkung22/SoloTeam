<script>
   $(document).ready(function() {
      $('#berber').DataTable({
         lengthMenu: [
            [20, 50, 100, -1],
            [20, 50, 100, 'All'],
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
            targets: [0, 1, 2, 3]
         }],
      });
   });
</script>
<div class="container-fluid">
   <div class="card my-3">
      <div class="card-body py-2 px-2 fw-bolder text-muted">
         <i class="fas fa-angle-right"></i> คำทำนายเลขคู่
      </div>
   </div>
   <div class="card my-3 p-2 shadow-sm">
      <table id="berber" class="table text-center align-middle table-sm table-striped table-hover border border-light" style="width:100%">
         <thead>
            <tr>
               <th>เลขคู่</th>
               <th>คำทำนาย</th>
               <th>คะแนน</th>
               <th>จัดการ</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $sql = "SELECT * FROM horo_number";
            $query = dbQuery($sql);
            while ($row = dbFetchArray($query, 1)) {
               $tmp_edit = '<a class="btn btn-warning btn-sm fw-bold" href="edit/' . $row["horo_number"] . '"><i class="fas fa-edit"></i></a>';
               $tmp_remove = '<a class="btn btn-danger btn-sm fw-bold" href="remove/' . $row["horo_number"] . '"><i class="fas fa-trash"></i></a>';
            ?>
               <tr>
                  <td><label class="fw-bold fs-3">
                        <?php echo
                        $row["horo_number"]
                           . '</label>';
                        ?></td>
                  <td class="text-start"><?php echo $row["horo_text"]; ?></td>
                  <td><?php echo $row["horo_score"]; ?></td>
                  <td><?php echo $tmp_edit . ' ' . $tmp_remove; ?></td>
               </tr>
            <?php
            }
            ?>
         </tbody>
      </table>
   </div>
</div>