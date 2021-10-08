<?php
session_start();
include('../../include/lib_page.php');
$u_id = $_POST['u_id'];
$next_renewal = $_POST['server_next_renewal'];
$user_uid = $_SESSION['user_uid'];
$next_renewal = strtotime($next_renewal);
$next_renewal = date('Y-m-d H:i:s',$next_renewal);

$sql = "INSERT INTO tbl_server_logs (vendor,account_no,server_type,server_name,server_ip,username,password,"
        . "expiration_date,application,purpose,spec,remarks,date_global,status,done_by,done_on) "
        . "SELECT vendor,account_no,server_type,server_name,server_ip,username,password,expiration_date,"
        . "application,purpose,spec,remarks,'$next_renewal','3','$user_uid',now() from tbl_server "
        . "WHERE tbl_server.id = '$u_id'";

if ($result = $con->query($sql)) {
    $update = "UPDATE `tbl_server` SET `expiration_date`='$next_renewal' WHERE `id` ='$u_id' ";
    if ($result1 = $con->query($update)) {
        echo '1';
    }
} 
?>
