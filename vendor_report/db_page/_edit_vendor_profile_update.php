<?php
include '../../include/lib_page.php';
$u_id = $_POST['id'];
$vendor = $_POST['vendor'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$address = $_POST['address'];
$web_site = $_POST['web_site'];
$sql = "UPDATE `tbl_vendor` SET `name`='$vendor',`contact_no`='$contact_no',`email`='$email',`address`='$address',`web_link`='$web_site' WHERE `id` = '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
    echo "0";
}
mysqli_close($con);
?>