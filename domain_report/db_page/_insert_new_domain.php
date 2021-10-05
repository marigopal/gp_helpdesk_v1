<?php
session_start();
include '../../include/lib_page.php';
$type = $_POST['type'];
$domain_name = $_POST['domain_name'];
$host = $_POST['host'];
$point_to = $_POST['point_to'];
$vendor = $_POST['vendor'];
$account = $_POST['account'];
$exp_date = $_POST['exp_date'];
$auto_renewal_add = $_POST['auto_renewal_add'];
$remarks = $_POST['remarks'];
$user_uid = $_SESSION['user_uid'];
$current_date_time = date('Y-m-d H:i:s');
if ($type == 1) {
    $query = "INSERT INTO `tbl_domain`(`created_on`, `vendor`, `account`, `type`, `domainname`, `host`, "
            . "`point_to`,`expiredate`, `domain_autorenewal`, `domain_status`, `remarks`) "
            . "VALUES ('$current_date_time','$vendor','$account','$type','$domain_name','$host','$point_to','$exp_date','$auto_renewal_add','1','$remarks')";

    if ($result = $con->query($query)) {
        $query_log = "INSERT INTO `tbl_domain_log`(`created_on`, `vendor`, `account`, `type`, `domainname`, `host`, "
                . "`point_to`,`expiredate`, `domain_autorenewal`, `domain_status`, `remarks`,updated_by,next_renewal_date,renewed_on) "
                . "VALUES ('$current_date_time','$vendor','$account','$type','$domain_name','$host','$point_to',now(),'$auto_renewal_add','5','$remarks','$user_uid',now(),now())";

        if ($result = $con->query($query_log)) {
            echo '1';
        }
    }
} else  {
    $query = "INSERT INTO `tbl_domain`(`created_on`, `type`, `domainname`, `host`, "
            . "`point_to`, `domain_status`, `remarks`) "
            . "VALUES ('$current_date_time','$type','$domain_name','$host','$point_to','1','$remarks')";
    if ($result = $con->query($query)) {
        $query_log = "INSERT INTO tbl_domain_log (created_on, vendor, account, type, domainname, host, 
            point_to, expiredate, domain_autorenewal, domain_status, remarks, renewed_on, next_renewal_date,
            updated_by)
SELECT '$current_date_time', vendor, account, '$type', domainname, '$host','$point_to', expiredate,"
                . " domain_autorenewal, '5', '$remarks',now(),now(),'$user_uid'
FROM tbl_domain
WHERE domainname='$domain_name' and type = '1'";
        if ($result = $con->query($query_log)) {
           echo '1';
        }
    }
} 
?>
