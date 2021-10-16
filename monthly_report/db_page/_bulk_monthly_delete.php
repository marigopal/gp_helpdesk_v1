<?php
session_start();
include('../../include/lib_page.php');
$user_uid = $_SESSION['user_uid'];
if (isset($_POST["id"])) {
   $count = 0;
    foreach ($_POST["id"] as $id) {
        
            
        
            $sql_delete = "UPDATE `tbl_monthly_list` SET `status_id`='3' WHERE `id` =  '$id'";
            if (mysqli_query($con, $sql_delete)) {
               ++$count;
               echo $count;
            } else {
                echo "0";
            }
     
        
        
 
    }
}
?>