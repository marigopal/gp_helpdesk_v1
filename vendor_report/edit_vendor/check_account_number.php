<?php
include '../../include/lib_page.php';
$account_no = $_POST['account_no'];
$vendor = $_POST['vendor'];
$u_id = $_POST['u_id'];
$sql = "SELECT tbl_account.vendor,tbl_account.accountno,tbl_account.id FROM tbl_account WHERE tbl_account.vendor = '$vendor' AND tbl_account.accountno = '$account_no' and tbl_account.id != '$u_id'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>