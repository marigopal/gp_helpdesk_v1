<?php

include '../../include/lib_page.php';
$domain_name = $_POST['domain_name'];
$sql = "SELECT `domain_name` FROM `tbl_ssl_domain_list` WHERE `domain_name` ='" . $domain_name . "'";

$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {

    echo 0;
} else {
    echo 1;
}
?>
