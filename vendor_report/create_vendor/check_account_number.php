<?php

include '../../include/lib_page.php';
$account_no = $_POST['account_no'];
$vendor = $_POST['vendor'];
$sql = "SELECT tbl_account.vendor,tbl_account.accountno FROM tbl_account WHERE tbl_account.vendor = '$vendor' AND tbl_account.accountno = '$account_no'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>