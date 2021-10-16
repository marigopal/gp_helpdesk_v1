<?php
include '../../include/lib_page.php';
$u_id = $_POST['id'];



$sql = "UPDATE `tbl_monthly_list` SET `status_id`='3' WHERE `id` =  '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
   echo "0";
}
mysqli_close($con);
?>