<?php
include '../../include/lib_page.php';
$id = $_POST['id'];
$action = $_POST['user_property_action'];
$temp_password = encrypt('123456');
if($action == 'Delete')
{
$sql = "UPDATE `tbl_users` SET `status_id`='2' WHERE `id` = '$id'";
}
if($action == 'Disable')
{
$sql = "UPDATE `tbl_users` SET `status_id`='3' WHERE `id` = '$id'";
}
if ($action == 'Reset_password')
{
  $sql = "UPDATE `tbl_users` SET `password`='$temp_password',`reset_password`='1' WHERE `id` = '$id'"; 
}
if($action == 'Enable')
{
$sql = "UPDATE `tbl_users` SET `status_id`='1' WHERE `id` = '$id'";
}
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
    echo "0";
}
mysqli_close($con);
?>