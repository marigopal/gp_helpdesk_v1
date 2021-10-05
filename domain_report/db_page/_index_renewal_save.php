<?php
session_start();
include('../../include/lib_page.php');
$u_id = $_POST['u_id'];
$next_renewal = $_POST['next_renewal'];
$auto_renewal = $_POST['auto_renewal'];
$user_uid = $_SESSION['user_uid'];
$sql = "INSERT INTO tbl_domain_log (created_on, vendor, account, type, domainname, expiredate, domain_autorenewal, domain_status, remarks, renewed_on, next_renewal_date,updated_by)
SELECT created_on, vendor, account, type, domainname, expiredate, domain_autorenewal, '4', remarks,now(),'$next_renewal','$user_uid'
FROM tbl_domain
WHERE id='$u_id' ";
if ($result = $con->query($sql)) {
    $update = "UPDATE `tbl_domain` SET `expiredate`='$next_renewal',`domain_autorenewal`='$auto_renewal' WHERE `id` ='$u_id' ";
    if ($result1 = $con->query($update)) {
        echo '1';
    }
} else {
    echo "You are entered information may be wrong..! Please try againg some times..!";
}
?>
