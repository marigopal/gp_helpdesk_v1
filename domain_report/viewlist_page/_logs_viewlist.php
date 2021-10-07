<?php
include '../../include/lib_page.php';
if (!empty($_POST['filter'])) {
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    $and = "and tbl_domain_log.domain_status = '$filter'";
} else {
    $and = "and tbl_domain_log.domain_status = '4'";
}
$sno = 0;
$sql = "select tbl_domain_log.renewed_on,tbl_domain_log.next_renewal_date,tbl_domain_log.created_on,"
        . "tbl_domain_log.vendor,tbl_vendor.id,tbl_vendor.name,tbl_domain_log.account,"
        . "tbl_account.id,tbl_account.username,tbl_domain_log.type,tbl_domaintype.id,tbl_domaintype.domaintype,"
        . "tbl_domain_log.domainname,tbl_domain_log.host,tbl_domain_log.expiredate,tbl_domain_log.domain_autorenewal,"
        . "tbl_autorenewal.id,tbl_autorenewal.autorenewal,tbl_domain_log.domain_status,tbl_domainstatus.id,"
        . "tbl_domainstatus.status,tbl_domain_log.remarks,tbl_domain_log.updated_by, tbl_users.id,"
        . "tbl_users.username from tbl_domain_log "
        . "INNER JOIN tbl_vendor on tbl_vendor.id = tbl_domain_log.vendor "
        . "INNER JOIN tbl_account on tbl_account.id = tbl_domain_log.account "
        . "INNER JOIN tbl_domaintype on tbl_domaintype.id = tbl_domain_log.type "
        . "INNER JOIN tbl_autorenewal on tbl_autorenewal.id = tbl_domain_log.domain_autorenewal "
        . "INNER JOIN tbl_domainstatus on tbl_domainstatus.id = tbl_domain_log.domain_status "
        . "INNER JOIN tbl_users on tbl_users.id = tbl_domain_log.updated_by $and";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['domaintype']; ?></td>
            <td><?= $row['domainname']; ?></td>
            <td><?= $row['host']; ?></td>
            <td><?= $row['expiredate']; ?></td>
            <td><?= $row['autorenewal']; ?></td>
            <td><?= $row['next_renewal_date']; ?></td>
            <td><?= $row['status']; ?></td>
            <td><?= ucfirst($row['username']); ?></td>
            <td><?= $row['renewed_on']; ?></td>
        </tr>
        <?php
    }
} mysqli_close($con);
?>
  