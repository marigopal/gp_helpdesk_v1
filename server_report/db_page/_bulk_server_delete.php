<?php
session_start();
include('../../include/lib_page.php');
$user_uid = $_SESSION['user_uid'];
if (isset($_POST["id"])) {
   $count = 0;
    foreach ($_POST["id"] as $id) {
        
            
        $sql_log = "INSERT INTO tbl_server_logs (vendor,account_no,server_type,server_name,server_ip,username,password,"
        . "expiration_date,application,purpose,spec,remarks,date_global,status,done_by,done_on) "
        . "SELECT vendor,account_no,server_type,server_name,server_ip,username,password,expiration_date,"
        . "application,purpose,spec,remarks,now(),'2','$user_uid',now() from tbl_server "
        . "WHERE tbl_server.id = '$id'";

        if (mysqli_query($con, $sql_log)) 
        {
            $sql_delete = "DELETE FROM tbl_server WHERE id = '$id'";
            if (mysqli_query($con, $sql_delete)) {
               ++$count;
               echo $count;
            } else {
                echo "0";
            }
        }
        
        
 
    }
}
?>