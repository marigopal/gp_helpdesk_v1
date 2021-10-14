<?php
include('../../include/lib_page.php');
$vendor = $_POST['vendor'];
$sql = "SELECT id,vendor,username from tbl_account WHERE tbl_account.vendor='$vendor'";
$result = mysqli_query($con,$sql);
$users_arr = array();
while( $row = mysqli_fetch_array($result) ){
    $id = $row['id'];
    $name = $row['username'];
    $users_arr[] = array("id" => $id, "name" => $name);
}
echo json_encode($users_arr);
?>