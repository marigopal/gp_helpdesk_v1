<?php
include '../../include/lib_page.php';
$u_id = $_POST['u_id'];
$category = $_POST['category'];
$priority = $_POST['priority'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$sql = "UPDATE `tbl_helpdesk` SET `category_id`='$category',`priority_id`='$priority',"
        . "`subject`='$subject',`description`='$description' WHERE `id` = '$u_id'";
if (mysqli_query($con, $sql)) {
    echo "1";
} else {
    echo "0";
}
mysqli_close($con);
?>