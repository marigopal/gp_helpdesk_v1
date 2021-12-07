<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "select tbl_account.id, tbl_account.vendor,tbl_vendor.id,tbl_vendor.name,tbl_account.accountno,tbl_account.mobileno,tbl_account.email,tbl_account.username,tbl_account.password,tbl_account.service_used,tbl_account.authendication,tbl_account.remarks,tbl_account.status from tbl_account INNER JOIN tbl_vendor ON tbl_vendor.id=tbl_account.vendor and tbl_account.status= '1' ORDER BY tbl_vendor.name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[9]; ?></td>
            <td>
                <a  data-toggle="modal" data-target="#show_password_model_box" onclick="$('#pass').val('<?php echo decrypt($row[8]); ?>')"><i class="fa fa-eye"></i></a>
                <a href="../edit_vendor/index?id=<?php echo encrypt($row[0]); ?> "><i class="fa fa-edit"></i></a>
                <a  data-toggle="modal" data-target="#delete_model_box" onclick="$('#delete_id').val('<?php echo $row[0]; ?>')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
    }
}
mysqli_close($conn);
?>  