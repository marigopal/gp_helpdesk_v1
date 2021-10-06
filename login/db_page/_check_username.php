<?php
include '../../include/lib_page.php';
$username = $_POST['username'];
$sql = "SELECT username FROM tbl_users WHERE username = '$username'";
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