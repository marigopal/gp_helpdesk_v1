<?php
session_start();
include '../../include/lib_page.php';
$id = decrypt($_GET['id']);
$user_uid = $_SESSION['user_uid'];
$sql_log = "INSERT INTO `tbl_account_log`(`vendor`, `accountno`, `mobileno`, `email`, `username`, `password`, `service_used`, `authendication`, `remarks`, `status`, `created_by`, `done_on`) "
        . "SELECT vendor, accountno, mobileno, email, username, password, service_used, authendication, remarks,'2', '$user_uid',now()
FROM tbl_account
WHERE id='$id'";
if (mysqli_query($con, $sql_log)) {
    $sql_delete = "DELETE FROM tbl_account WHERE id = '$id'";
    if (mysqli_query($con, $sql_delete)) {
        echo "<script>
                alert('Account Deleted Successfully');
                window.location.href='/vendor_report/index_page/index';
                </script>";
    } else {
        echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href='/vendor_report/index_page/index';
                </script>";
    }
}
?>