<?php

include '../../include/lib_page.php';
$type = $_POST['type'];
$domain_name = $_POST['domain_name'];
$host = $_POST['host'];
$sql = "SELECT type,domainname,host from tbl_domain where `type` ='$type' and `domainname` ='$domain_name' and `host`='$host'";

$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>
