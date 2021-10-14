<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$vendor = $_POST['vendor'];
$account = $_POST['account'];
$purchase_on = $_POST['purchase_on'];
$ssl_id = $_POST['ssl_id'];
$order_id = $_POST['order_id'];
$ca_order_id = $_POST['ca_order_id'];
$product_list = $_POST['product_list'];
$product_expires = $_POST['product_expires'];
$no_of_domnain = $_POST['no_of_domnain'];
$expiration_date = $_POST['expiration_date'];
$email = $_POST['email'];
$remarks = $_POST['remarks'];
//echo $vendor; echo '</br>'; echo $account; echo '</br>'; echo $purchase_on;
//echo '</br>'; echo $ssl_id; echo '</br>'; echo $order_id; echo '</br>'; echo $ca_order_id;
//echo '</br>'; echo $product_list; echo '</br>'; echo $product_expires; echo '</br>';
//echo $no_of_domnain; echo '</br>'; echo $expiration_date; echo '</br>'; echo $email; echo '</br>'; echo $remarks;
//
//echo '</br>'; 
$query = "INSERT INTO `tbl_ssl_product_list`(`created_on`, `purchased_on`, `vendor_id`, "
        . "`account_number`, `ssl_id`, `order_id`, `ca_order_id`, "
        . "`ssl_product_type`, `expire_year`, `number_of_domain`, `expiration_date`, "
        . "`admin_mail`, `remarks`, `status_id`) "
        . "VALUES (now(),'$purchase_on','$vendor','$account','$ssl_id','$order_id','$ca_order_id',"
        . "'$product_list','$product_expires','$no_of_domnain','$expiration_date','$email','$remarks','1')";
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