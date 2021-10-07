<?php
session_start();
include '../../include/lib_page.php';
$id = $_POST['id'];
$user_uid = $_SESSION['user_uid'];
$sql_log = "INSERT INTO `tbl_account_log`(`vendor`, `accountno`, `mobileno`, `email`, `username`, `password`, `service_used`, `authendication`, `remarks`, `status`, `created_by`, `done_on`) "
        . "SELECT vendor, accountno, mobileno, email, username, password, service_used, authendication, remarks,'2', '$user_uid',now()
FROM tbl_account
WHERE id='$id'";
if (mysqli_query($con, $sql_log)) {
    $sql_delete = "DELETE FROM tbl_account WHERE id = '$id'";
    if (mysqli_query($con, $sql_delete)) {
        echo "1";
    } else {
        echo "0";
    }
}
?>