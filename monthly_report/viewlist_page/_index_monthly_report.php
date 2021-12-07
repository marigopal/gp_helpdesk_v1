<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT tbl_monthly_list.id,tbl_monthly_list.vendor,tbl_vendor.id,tbl_vendor.name,tbl_vendor.web_link,tbl_monthly_list.billed_for,tbl_monthly_list.payment_method,tbl_payment_method.payment_uid,tbl_payment_method.payment_vendor,tbl_monthly_list.expiration_date,tbl_monthly_list.status_id,tbl_montly_status.status_uid,tbl_montly_status.status_name FROM tbl_monthly_list INNER JOIN tbl_vendor on tbl_vendor.id = tbl_monthly_list.vendor INNER JOIN tbl_payment_method on tbl_payment_method.payment_uid = tbl_monthly_list.payment_method INNER JOIN tbl_montly_status on tbl_montly_status.status_uid = tbl_monthly_list.status_id AND tbl_monthly_list.status_id != '3' ORDER BY tbl_monthly_list.expiration_date ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><input type="checkbox" name="monthly_list[]" id="monthly_list" value="<?php echo $row[0]; ?>" /></td>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[8]; ?></td>
            <td><?php echo $row[9]; ?></td>
            <td>
                <a  data-toggle="modal" data-target="#renewed_monthly_model_box" onclick="
                                $('#monthly_renewal_id').val('<?= $row[0]; ?>')
                                $('#monthly_next_renewal').val('<?= $row[9] ?>');
                    "><i class="fa fa-retweet"></i></a>
                <a href="../edit_page/index?id=<?php echo encrypt($row[0]); ?>"><i class="fa fa-edit"></i></a>
                <a  data-toggle="modal" data-target="#delete_monthly_renewal_model_box" onclick="
                                $('#delete_monthly_renewal_id').val('<?php echo $row[0]; ?>');
                    "><i class="fa fa-trash"></i></a> 
            </td>
        </tr>
        <?php
    }
}
mysqli_close($conn);
?> 