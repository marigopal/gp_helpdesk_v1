<?php

include '../../include/lib_page.php';
$username = $_POST['username'];
$vendor = $_POST['vendor'];
$sql = "SELECT tbl_account.vendor,tbl_account.username FROM tbl_account WHERE tbl_account.vendor = '$vendor' AND tbl_account.username = '$username'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>