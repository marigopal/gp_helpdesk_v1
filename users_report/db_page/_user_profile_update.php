<?php
include '../../include/lib_page.php';
$id = $_POST['u_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$designation = $_POST['designation'];
$email = $_POST['email'];
$address = $_POST['address'];
$username = $_POST['username'];
$password_reset = $_POST['password_reset'];
$password = encrypt($_POST['password']);
if($password_reset != 'on')
{
    $sql = "UPDATE `tbl_users` SET `firstname`='$first_name',`lastname`='$last_name',`designation`='$designation',`address`='$address',`username`='$username' WHERE `id` = '$id'"; 
}
 else 
 {
     $sql = "UPDATE `tbl_users` SET `firstname`='$first_name',`lastname`='$last_name',`designation`='$designation',`email`='$email',`address`='$address',`username`='$username',`password`='$password' WHERE `id` = '$id'"; 
     
     
 }
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
    echo "0";
}
mysqli_close($con);
?>