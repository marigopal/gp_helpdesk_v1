<?php
include '../../include/lib_page.php';
$day = date('Y-m-d', strtotime(' +10 day'));
$sno = 0;
$sql = "SELECT tbl_server.vendor,tbl_vendor.id,tbl_vendor.name,tbl_server.account_no,tbl_account.id,tbl_account.username,tbl_server.server_name,tbl_server.expiration_date from tbl_server INNER JOIN tbl_vendor on tbl_vendor.id = tbl_server.vendor INNER JOIN tbl_account on tbl_account.id = tbl_server.account_no and tbl_server.expiration_date < '$day' and tbl_server.expiration_date != '0000-00-00'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
        </tr>
        <?php
    }
} mysqli_close($con);
?>  