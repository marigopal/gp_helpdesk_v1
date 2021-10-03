<?php
include '../../include/lib_page.php';
$id = $_POST['id'];
$users_change_access_name_value = $_POST['users_change_access_name_value'];
$sql = "UPDATE `tbl_users` SET `accessid`='$users_change_access_name_value' WHERE `id` = '$id'"; 
if (mysqli_query($con, $sql)) {
    echo "<script>
                alert('Users Access Updated Successfully');
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