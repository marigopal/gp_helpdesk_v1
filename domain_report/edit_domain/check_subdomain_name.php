<?php

include '../../include/lib_page.php';
$domain_name = $_POST['domain_name'];
$host = $_POST['host'];
$id = $_POST['id'];
$sql = "select domainname,subdomain,id from tbl_domain where domainname='" . $domain_name . "' and subdomain ='" . $sub_domain_name . "' and id != '" . $id . "'";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {
    echo 1;
} else {
    echo 0;
}
?>
