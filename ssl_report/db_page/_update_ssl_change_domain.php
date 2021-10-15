<?php
session_start();
include '../../include/lib_page.php';
$user_uid =  $_SESSION['user_uid'];
$id =  $_POST['id'];
$domain_name = $_POST['domain_name'];
$query = "UPDATE `tbl_ssl_domain_list` SET `domain_name`= '$domain_name' WHERE `ssl_domain_uid` = '$id'";


            if ($result = $con->query($query)) 
            {
                 echo "1";
            }
?>