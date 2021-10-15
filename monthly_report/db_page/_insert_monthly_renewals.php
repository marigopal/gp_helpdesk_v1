<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$vendor = $_POST['vendor'];
$billed_for = $_POST['billed_for'];
$payment_method = $_POST['payment_method'];
$exp_date = $_POST['exp_date'];

//echo $vendor; echo '</br>'; echo $account; echo '</br>'; echo $purchase_on;
//echo '</br>'; echo $ssl_id; echo '</br>'; echo $order_id; echo '</br>'; echo $ca_order_id;
//echo '</br>'; echo $product_list; echo '</br>'; echo $product_expires; echo '</br>';
//echo $no_of_domnain; echo '</br>'; echo $expiration_date; echo '</br>'; echo $email; echo '</br>'; echo $remarks;
//
//echo '</br>'; 
$query = "INSERT INTO `tbl_monthly_list`(`vendor`, `billed_for`, `payment_method`, `expiration_date`, "
        . "`status_id`) VALUES ('$vendor','$billed_for','$payment_method','$exp_date','1')";
            if ($result = $con->query($query)) 
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