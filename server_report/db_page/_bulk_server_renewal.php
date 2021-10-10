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
        
        $sql = "INSERT INTO tbl_server_logs (vendor,account_no,server_type,server_name,server_ip,username,password,"
                . "expiration_date,application,purpose,spec,remarks,date_global,status,done_by,done_on) "
                . "SELECT vendor,account_no,server_type,server_name,server_ip,username,password,expiration_date,"
                . "application,purpose,spec,remarks,'$bulk_delete_expired_date','3','$user_uid',now() from tbl_server "
                . "WHERE tbl_server.id = '$id'";

        if ($result = $con->query($sql)) {
            $update = "UPDATE `tbl_server` SET `expiration_date`='$bulk_delete_expired_date' WHERE `id` ='$id' ";
            if ($result1 = $con->query($update)) {
               ++$count;
               echo $count;
            }
        }
 else {
     echo '0';
 }
    }
}
?>