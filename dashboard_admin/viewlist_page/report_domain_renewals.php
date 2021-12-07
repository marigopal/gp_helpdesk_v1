<?php

include '../../include/lib_page.php';
$day = date('Y-m-d', strtotime(' +10 day'));
$sno = 0;
$sql = "SELECT tbl_domain.vendor,tbl_vendor.id,tbl_vendor.name,tbl_domain.account,tbl_account.id,tbl_account.username,tbl_domain.domainname,tbl_domain.expiredate,tbl_vendor.web_link FROM tbl_domain INNER JOIN tbl_account on tbl_account.id = tbl_domain.account INNER JOIN tbl_vendor on tbl_vendor.id = tbl_domain.vendor and tbl_domain.expiredate < '$day'";
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
           <td> <a target="_blank" href="<?php echo $row[8]; ?>"><i class="fa fa-internet-explorer "></i></a> </td>
        </tr>
        <?php
    }
} mysqli_close($con);
?>  