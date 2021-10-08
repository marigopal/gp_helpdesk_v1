<?php

include '../../include/lib_page.php';
$vendor = $_POST['vendor'];
$id = $_POST['id'];
$sql = "select id,name from tbl_vendor where `name` = '$vendor' and `id` !='$id'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>
