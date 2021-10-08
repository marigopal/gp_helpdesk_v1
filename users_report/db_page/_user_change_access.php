<?php
include '../../include/lib_page.php';
$id = $_POST['id'];
$users_change_access_name_value = $_POST['users_change_access_name'];
$sql = "UPDATE `tbl_users` SET `accessid`='$users_change_access_name_value' WHERE `id` = '$id'"; 
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
    echo "0";
}
mysqli_close($con);
?>