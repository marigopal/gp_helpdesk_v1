<?php

include '../../include/db_config.php';
include '../../include/encryption_function.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email_id = $_POST['email_id'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$query = "INSERT INTO `tbl_users`(`firstname`, `lastname`, `email`, `username`, `password`, `created_on`, `accessid`) VALUES ('$firstname','$lastname','$email_id','$username','$password',now(),'3')";
if ($result = $con->query($query)) {
    $query_log = "INSERT INTO `tbl_users_log`(`firstname`, `lastname`, `email`, `username`, `password`, `created_on`, `accessid`, `status`) VALUES ('$firstname','$lastname','$email_id','$username','$password',now(),'3','1')";

    if ($result = $con->query($query_log)) {
        echo "<script>
                alert('User Creation Successfully..! Please Login..!');
                window.location.href=' /login/login_page/index';
                </script>";
    }
}
?>