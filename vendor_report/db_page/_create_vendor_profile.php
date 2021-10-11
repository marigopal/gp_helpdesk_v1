<?php
session_start();
include '../../include/lib_page.php';
$user_uid = $_SESSION['user_uid'];
$vendor = $_POST['vendor'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$address = $_POST['address'];
$web_site = $_POST['web_site'];
$query = "INSERT INTO `tbl_vendor`(`name`, `contact_no`, `email`, `address`, `web_link`) "
        . "VALUES ('$vendor','$contact_no','$email','$address','$web_site')";
if ($result = $con->query($query)) 
{
    echo "1";
}

?>