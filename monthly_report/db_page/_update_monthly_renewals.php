<?php
include '../../include/lib_page.php';
$u_id = $_POST['u_id'];
$vendor = $_POST['vendor'];
$billed_for = $_POST['billed_for'];
$payment_method = $_POST['payment_method'];
$exp_date = $_POST['exp_date'];

$sql = "UPDATE `tbl_monthly_list` SET `vendor`='$vendor',`billed_for`='$billed_for',`payment_method`='$payment_method',`expiration_date`='$exp_date' WHERE `id` =  '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
   echo "0";
}
mysqli_close($con);
?>