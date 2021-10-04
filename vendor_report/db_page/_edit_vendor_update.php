<?php
include '../../include/lib_page.php';
$u_id = $_POST['id'];
$vendor = $_POST['vendor'];
$account_no = $_POST['account_no'];
$mob_no = $_POST['mob_no'];
$email_id = $_POST['email_id'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$service_used = $_POST['service_used'];
$authendication = $_POST['authendication'];
$remarks = $_POST['remarks'];
$sql = "UPDATE `tbl_account` SET `vendor`='$vendor',`accountno`='$account_no',`mobileno`='$mob_no',`"
        . "email`='$email_id',`username`='$username',`password`='$password',`service_used`='$service_used',"
        . "`authendication`='$authendication',`remarks`='$remarks' WHERE `id` = '$u_id'";
//echo $sql;
//exit();
if (mysqli_query($con, $sql)) {
    echo "<script>
                alert('Account Updated Successfully');
                window.location.href='/vendor_report/index_page/index';
                </script>";
} else {
    echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href='/vendor_report/index_page/index;
                </script>";
}
mysqli_close($con);
?>