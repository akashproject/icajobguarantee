<?php

$conn = mysqli_connect("localhost", "icajobguarantee", "e9~+s.JRcJ-h", "icajobguarantee");
$filename = "bp-list-records.csv";
$fp = fopen('php://output', 'w');

$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA='icajobguarantee' AND TABLE_NAME='training_ragistration'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_row($result)) {
	$header[] = $row[0];
}	
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);
$query = "SELECT * FROM `training_ragistration`";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>