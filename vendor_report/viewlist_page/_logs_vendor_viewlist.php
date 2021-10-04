<?php
include '../../include/lib_page.php';
if (!empty($_POST['filter'])) {
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    $and = "and tbl_account_log.status = '$filter'";
} else {
    $and = "";
}
$sno = 0;
$sql = "select tbl_account_log.id, tbl_account_log.vendor,tbl_vendor.id,tbl_vendor.name,tbl_account_log.accountno,tbl_account_log.mobileno,tbl_account_log.email,tbl_account_log.username,tbl_account_log.password,tbl_account_log.service_used,tbl_account_log.authendication,tbl_account_log.remarks,tbl_account_log.status,tbl_accountstatus.id,tbl_accountstatus.statusname, tbl_account_log.created_by,tbl_users.id,tbl_users.username,tbl_account_log.done_on from tbl_account_log INNER JOIN tbl_vendor ON tbl_vendor.id=tbl_account_log.vendor INNER JOIN tbl_accountstatus on tbl_accountstatus.id = tbl_account_log.status INNER JOIN tbl_users on tbl_users.id = tbl_account_log.created_by $and";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[14]; ?></td>
            <td><?php echo $row[17]; ?></td>
            <td><?php echo $row[18]; ?></td>
        </tr>
        <?php
    }
} 
mysqli_close($conn);
?>  