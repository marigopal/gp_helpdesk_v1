<?php
session_start();
include('../../include/lib_page.php');
$user_uid = $_SESSION['user_uid'];
if (isset($_POST["id"])) {
    $bulk_delete_expired_date = $_POST['bulk_delete_expired_date'];
    $bulk_delete_expired_date = strtotime($bulk_delete_expired_date);
    $bulk_delete_expired_date = date('Y-m-d H:i:s', $bulk_delete_expired_date);
    $count = 0;
    foreach ($_POST["id"] as $id) {
            $update = "UPDATE `tbl_monthly_list` SET `expiration_date`='$bulk_delete_expired_date' WHERE `id` =  '$id'";
            if ($result1 = $con->query($update)) {
               ++$count;
               echo $count;
            }
      
 else {
     echo '0';
 }
    }
}
?>