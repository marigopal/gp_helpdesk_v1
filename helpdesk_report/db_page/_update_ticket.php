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
    echo "<script>
                alert('Ticket Updated Successfully');
                window.location.href=' /helpdesk_report/index';
                </script>";
} else {
    echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href=' /helpdesk_report/index';
                </script>";
}
mysqli_close($con);
?>