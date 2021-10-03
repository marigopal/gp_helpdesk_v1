<?php
session_start();
include "../../include/lib_page.php";
$username = $_POST['username'];
$id = $_POST['id'];
$sql = "SELECT * FROM tbl_users where username ='$username' and id !='$id'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) 
{
    echo 1;
} 
else 
{
    echo 0;
}
?>
