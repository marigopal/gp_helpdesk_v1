<?php
include '../../include/lib_page.php';
$id = decrypt($_GET['id']);
$action = decrypt($_GET['action']);
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
    echo "<script>
                alert('Users Details Updated Successfully');
                window.location.href='/users_report/index_page/';
                </script>";
} else {
    echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href='/users_report/index_page/';
                </script>";
}
mysqli_close($con);
?>