<?php
include '../../include/lib_page.php';
$username = $_POST['username'];
$vendor = $_POST['vendor'];
$id = $_POST['id'];
$sql = "SELECT tbl_account.vendor,tbl_account.username,tbl_account.id FROM tbl_account WHERE tbl_account.vendor = '$vendor' AND tbl_account.username = '$username' and tbl_account.id != '$id'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 0;
} else {
    echo 1;
}
?>