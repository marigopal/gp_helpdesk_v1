<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$id =  $_POST['id'];
$vendor = $_POST['vendor'];
$account = $_POST['account'];
$server_type = $_POST['server_type'];
$server_name = $_POST['server_name'];
$ip_address = $_POST['ip_address'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$exp_date = $_POST['exp_date'];
$application = $_POST['application'];
$purpose = $_POST['purpose'];
$spec = $_POST['spec'];
$remarks = $_POST['remarks'];
$query = "UPDATE `tbl_server` SET `vendor`='$vendor',`account_no`='$account',`server_type`='$server_type',`server_name`='$server_name',"
        . "`server_ip`='$ip_address',`username`='$username',`password`='$password',`expiration_date`='$exp_date',`application`='$application',"
        . "`purpose`='$purpose',`spec`='$spec',`remarks`='$remarks' WHERE `id` = '$id'";
            if ($result = $con->query($query)) 
            {
                 echo "1";
            }
?>