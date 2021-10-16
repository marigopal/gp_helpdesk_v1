<?php
include '../../include/lib_page.php';
$u_id = $_POST['id'];
$monthly_next_renewal = $_POST['monthly_next_renewal'];


$sql = "UPDATE `tbl_monthly_list` SET `expiration_date`='$monthly_next_renewal' WHERE `id` =  '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
   echo "0";
}
mysqli_close($con);
?>