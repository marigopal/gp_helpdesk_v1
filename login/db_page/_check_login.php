<?php
include '../../include/lib_page.php';
$username = $_POST['login_username'];
$password = encrypt($_POST['login_password']);
//$password = encrypt($password);
//echo $username; echo '</br>'; echo $password;
$sql = "SELECT * FROM tbl_users where username ='$username' and password ='$password' and status_id ='1'";
//echo $sql;
$query = $con->query($sql);
$result_array = mysqli_fetch_array($query);
$result_numrows = mysqli_num_rows($query);
//echo $result_numrows;
if ($result_numrows != 0) 
{
    $_SESSION['user_id'] = $username;
    $_SESSION['accessid'] = $result_array['accessid'];
    $_SESSION['user_uid'] = $result_array['id'];
   echo '1';
} 
else 
{
    echo '0';
}
?>