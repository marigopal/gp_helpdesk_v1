<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$id = $_POST['id'];
$add_domain_name_ssl_val = $_POST['add_domain_name_ssl_val'];
$add_domain_ssl_expiration_date_val = $_POST['add_domain_ssl_expiration_date_val'];
$insert_domain = "INSERT INTO `tbl_ssl_domain_list`( `ssl_product_list_id`, `domain_name`) VALUES ('$id','$add_domain_name_ssl_val')";
$update_product_list = "UPDATE `tbl_ssl_product_list` SET `expiration_date`='$add_domain_ssl_expiration_date_val',`status_id`='2' WHERE `ssl_uid` = '$id'";
if (($result = $con->query($insert_domain))&&($result = $con->query($update_product_list))) 
            {
//                $query_log = "INSERT INTO `tbl_server_logs` (`vendor`, `account_no`, `server_type`, `server_name`, `server_ip`, "
//        . "`username`, `password`, `expiration_date`, `application`, `purpose`, `spec`, `remarks`, `status`, `done_by`, `done_on`, date_global) "
//        . "VALUES ('$vendor','$account','$server_type','$server_name','$ip_address','$username',"
//        . "'$password','$exp_date','$application','$purpose','$spec','$remarks','1','$user_uid',now(),now())";
//        if ($result = $con->query($query_log)) 
//            {
//               echo "1"; 
//            }  
                echo "1";
            }
?>
