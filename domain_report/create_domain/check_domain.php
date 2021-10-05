<?php

include '../../include/lib_page.php';
$domain_name = $_POST['domain_name'];
$sql = "select domainname from tbl_domain where domainname='" . $domain_name . "' ";
$res = mysqli_query($con, $sql);
$count = mysqli_num_rows($res);
if ($count > 0) {

    echo 0;
} else {
    echo 1;
}
?>
