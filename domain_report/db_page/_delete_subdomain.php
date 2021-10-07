<?php

session_start();
include '../../include/lib_page.php';
$id = $_POST['id'];
$domain = $_POST['domain'];
$subdomain = $_POST['sub_domain'];
$user_uid = $_SESSION['user_uid'];
$sql_log = "INSERT INTO tbl_domain_log (created_on, vendor, account, type, domainname, host, expiredate, domain_autorenewal, domain_status, remarks, renewed_on, next_renewal_date,updated_by)
SELECT created_on, vendor, account, '2', domainname, '$subdomain', expiredate, domain_autorenewal, '3', remarks,now(),now(),'$user_uid'
FROM tbl_domain
WHERE domainname='$domain' and type ='1'";

if (mysqli_query($con, $sql_log)) {
    $sql_delete = "DELETE FROM tbl_domain WHERE id = '$id'";
    if (mysqli_query($con, $sql_delete)) {
        echo "1";
    } else {
        echo "0";
    }
}
mysqli_close($con);
?>
