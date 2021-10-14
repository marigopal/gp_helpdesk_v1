<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$id =  $_POST['uid'];
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
//echo $id;
//echo '</br>'; 
//echo $vendor; echo '</br>'; echo $account; echo '</br>'; echo $purchase_on;
//echo '</br>'; echo $ssl_id; echo '</br>'; echo $order_id; echo '</br>'; echo $ca_order_id;
//echo '</br>'; echo $product_list; echo '</br>'; echo $product_expires; echo '</br>';
//echo $no_of_domnain; echo '</br>'; echo $expiration_date; echo '</br>'; echo $email; echo '</br>'; echo $remarks;
//
//echo '</br>'; 

$query = "UPDATE `tbl_ssl_product_list` SET `purchased_on`='$purchase_on',`vendor_id`='$vendor',"
        . "`account_number`='$account',`ssl_id`='$ssl_id',`order_id`='$order_id',"
        . "`ca_order_id`='$ca_order_id',`ssl_product_type`='$product_list',"
        . "`expire_year`='$product_expires',`number_of_domain`='$no_of_domnain',"
        . "`expiration_date`='$expiration_date',`admin_mail`='$email',`remarks`='$remarks' WHERE `ssl_uid`= '$id'";

            if ($result = $con->query($query)) 
            {
                 echo "1";
            }
?>