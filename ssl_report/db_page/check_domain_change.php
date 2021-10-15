<?php

include '../../include/lib_page.php';
$domain_name = $_POST['domain_name'];
$id = $_POST['id'];
$sql = "SELECT * FROM `tbl_ssl_domain_list` WHERE `domain_name` = '" . $domain_name . "' and `ssl_domain_uid` != '" . $id . "'";

$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>
