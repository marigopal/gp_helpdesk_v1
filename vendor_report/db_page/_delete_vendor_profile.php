<?php
session_start();
include '../../include/lib_page.php';
$id = $_POST['id'];
$user_uid = $_SESSION['user_uid'];

    $sql_delete = "DELETE FROM tbl_vendor WHERE id = '$id'";
    if (mysqli_query($con, $sql_delete)) {
        echo "1";
    } else {
        echo "0";
    }

?>