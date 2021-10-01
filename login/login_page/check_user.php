<?php
session_start();
include "../../include/db_config.php";
include '../../include/encryption_function.php';
$username = $_POST['login_username'];
$password = encrypt($_POST['login_password']);
$sql = "SELECT * FROM tbl_users where username ='$username' and password ='$password'";
$query = $con->query($sql);
$result_array = mysqli_fetch_array($query);
$result_numrows = mysqli_num_rows($query);
if ($result_numrows != 0) 
{
    $_SESSION['user_id'] = $username;
    $_SESSION['accessid'] = $result_array['accessid'];
    $_SESSION['user_uid'] = $result_array['id'];
    echo $_SESSION['accessid'];
    header("Location: /home/index");
} 
else 
{
    echo "<script>
                alert('Login Credential Wrong..! Please try again..!');
                window.location.href=' /login/login_page/index';
                </script>";
}
?>
