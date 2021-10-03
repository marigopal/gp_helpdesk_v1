<?php
include '../../include/lib_page.php';
$id = $_POST['u_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = encrypt($_POST['password']);
$sql = "UPDATE `tbl_users` SET `firstname`='$first_name',`lastname`='$last_name',`email`='$email',`username`='$username',`password`='$password' WHERE `id` = '$id'"; 
if (mysqli_query($con, $sql)) {
    echo "<script>
                alert('Users Profile Updated Successfully');
                window.location.href='/home/index';
                </script>";
} else {
    echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href='/home/index';
                </script>";
}
mysqli_close($con);
?>