<?php
include '../../include/lib_page.php';
$u_id = $_POST['id'];
$domainame = $_POST['domain_name'];
$point_to = $_POST['point_to'];
$host =$_POST['host'];
$remarks = $_POST['remarks'];
$sql = "UPDATE `tbl_domain` SET `point_to`='$point_to',`host`='$host',`remarks`='$remarks' WHERE `id` = '$u_id'";

if (mysqli_query($con, $sql)) {
    echo "1";
} else {
   echo "0";
}
mysqli_close($con);
?>