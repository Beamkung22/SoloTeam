<?php
include('../../lib/function_admin.php');

$requestData = $_REQUEST;
$columns = ['Product_price', 'NoEID'];

$sql = "SELECT * FROM Product";
$query = dbQuery($sql);
$totalData = dbNumRows($query);
$totalFiltered = $totalData;

$data = [];
while ($row = dbFetchArray($query, 1)) {
   $tmp_edit = '<a class="btn btn-warning btn-sm fw-bold" href="edit/' . $row["Product_ID"] . '"><i class="fas fa-edit"></i></a>';
   $tmp_remove = '<a class="btn btn-danger btn-sm fw-bold" href="remove/' . $row["Product_ID"] . '"><i class="fas fa-trash"></i></a>';
   $nestedData = [];
   $image = info_Network($row["Product_networkID"])['Product_networkPicture'];
   $nestedData[] = '<img src="' . $image . '" style="width:40px">';
   $nestedData[] = '<label class="fw-bold fs-3">'
      . '0'
      . $row["product_num2"]
      . $row["product_num3"]
      . '-'
      . $row["product_num4"]
      . $row["product_num5"]
      . $row["product_num6"]
      . '-'
      . $row["product_num7"]
      . $row["product_num8"]
      . $row["product_num9"]
      . $row["product_num10"]
      . '</label>';
   $nestedData[] = '฿' . number_format($row["Product_price"]);
   $nestedData[] = info_topup($row["Product_topup"]);
   $nestedData[] = $row["NoEID"];
   $nestedData[] = info_productstatus($row["Product_status"]);
   $nestedData[] = $tmp_edit . ' ' . $tmp_remove;
   $data[] = $nestedData;
}

$json_data = [
   "draw" => intval($requestData['draw']),
   "recordsTotal" => intval($totalData),
   "recordsFiltered" => intval($totalFiltered),
   "data"            => $data
];


echo json_encode($json_data);
