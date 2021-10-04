<?php
session_start();
include '../../include/lib_page.php';
$user_uid = $_SESSION['user_uid'];
$vendor = $_POST['vendor'];
$account_no = $_POST['account_no'];
$mob_no = $_POST['mob_no'];
$email_id = $_POST['email_id'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$service_used = $_POST['service_used'];
$authendication = $_POST['authendication'];
$remarks = $_POST['remarks'];
$query = "INSERT INTO `tbl_account`(`vendor`, `accountno`, `mobileno`, `email`, `username`, "
        . "`password`, `service_used`, `authendication`, `remarks`, `status`) "
        . "VALUES ('$vendor','$account_no','$mob_no','$email_id','$username','$password','$service_used','$authendication','$remarks','1')";
if ($result = $con->query($query)) {
    $query_log = "INSERT INTO `tbl_account_log`(`vendor`, `accountno`, `mobileno`, `email`, `username`, "
            . "`password`, `service_used`, `authendication`, `remarks`, `status`, `created_by`, `done_on`) "
            . "VALUES ('$vendor','$account_no','$mob_no','$email_id','$username','$password','$service_used','$authendication','$remarks','3','$user_uid',now())";
    if ($result = $con->query($query_log)) {
        echo "<script>
                alert('Account Added Successfully');
                window.location.href='/vendor_report/index_page/index';
                </script>";
    }
}
?>