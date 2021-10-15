<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$id =  $_POST['id'];
$query = "UPDATE `tbl_ssl_product_list` SET `status_id`='3' WHERE `ssl_uid` = '$id'";

            if ($result = $con->query($query)) 
            {
                 echo "1";
            }
?>