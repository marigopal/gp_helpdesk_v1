<?php
include '../../include/lib_page.php';
$u_id = $_POST['u_id'];
$domainame = $_POST['domain_name'];
$point_to = $_POST['point_to'];
$vendor = $_POST['vendor'];
$account = $_POST['account'];
$exp_date = $_POST['exp_date'];
$auto_renewal_add = $_POST['auto_renewal_add'];
$remarks = $_POST['remarks'];
$sql = "UPDATE `tbl_domain` SET `vendor`='$vendor',`account`='$account',`domainname`='$domainame',`point_to`='$point_to',`expiredate`='$exp_date',`domain_autorenewal`='$auto_renewal_add',`remarks`='$remarks' WHERE `id` = '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
   echo "0";
}
mysqli_close($con);
?>