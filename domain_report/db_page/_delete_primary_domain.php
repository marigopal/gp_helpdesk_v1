<?php

session_start();
include('../../include/lib_page.php');
$id = decrypt($_GET['id']);
$domain_name = decrypt($_GET['domain']);
$user_uid = $_SESSION['user_uid'];
$sql = "SELECT tbl_domain.domainname,tbl_domain.type from tbl_domain where tbl_domain.domainname = '$domain_name' and tbl_domain.type != '1'";
if ($result = mysqli_query($con, $sql)) {
    $rowcount = mysqli_num_rows($result);
    if ($rowcount > 0) {
        echo "<script>
                alert('You are selected Domain contains Sub Records. Please Delete it first..!');
                window.location.href='/domain_report/index_page/index';
                </script>";
    } else {
        $sql_log = "INSERT INTO tbl_domain_log (created_on, vendor, account, type, domainname, host, point_to,expiredate, domain_autorenewal, domain_status, remarks, renewed_on, next_renewal_date,updated_by)
SELECT created_on, vendor, account, type, domainname, host, point_to, expiredate, domain_autorenewal, '3', remarks,now(),now(),'$user_uid'
FROM tbl_domain
WHERE id='$id'";
        if (mysqli_query($con, $sql_log)) {
            $sql_delete = "DELETE FROM tbl_domain WHERE id = '$id'";
            if (mysqli_query($con, $sql_delete)) {
                echo "<script>
                alert('Domain Deleted Successfully');
                window.location.href='/domain_report/index_page/index';
                </script>";
            } else {
                echo "<script>
                alert('Something went wrong..! Contact your Developer..!');
                window.location.href='/domain_report/index_page/index';
                </script>";
            }
        }
    }
}
mysqli_close($con);
?>