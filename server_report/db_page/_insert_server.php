<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
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
$query = "INSERT INTO `tbl_server`(`vendor`, `account_no`, `server_type`, `server_name`, `server_ip`, "
        . "`username`, `password`, `expiration_date`, `application`, `purpose`, `spec`, `remarks`) "
        . "VALUES ('$vendor','$account','$server_type','$server_name','$ip_address','$username',"
        . "'$password','$exp_date','$application','$purpose','$spec','$remarks')";

            if ($result = $con->query($query)) 
            {
                $query_log = "INSERT INTO `tbl_server_logs` (`vendor`, `account_no`, `server_type`, `server_name`, `server_ip`, "
        . "`username`, `password`, `expiration_date`, `application`, `purpose`, `spec`, `remarks`, `status`, `done_by`, `done_on`, date_global) "
        . "VALUES ('$vendor','$account','$server_type','$server_name','$ip_address','$username',"
        . "'$password','$exp_date','$application','$purpose','$spec','$remarks','1','$user_uid',now(),now())";
        if ($result = $con->query($query_log)) 
            {
               echo "1"; 
            }  
            }
?>