<?php
include '../../include/lib_page.php';
$day = date('Y-m-d', strtotime(' +10 day'));
$sno = 0;
$sql = "SELECT tbl_ssl_domain_list.ssl_domain_uid,tbl_ssl_domain_list.ssl_product_list_id,tbl_ssl_domain_list.domain_name,tbl_ssl_product_list.ssl_uid,tbl_ssl_product_list.vendor_id,tbl_vendor.id,tbl_vendor.name,tbl_ssl_product_list.account_number,tbl_account.id,tbl_account.username,tbl_ssl_product_list.ssl_product_type,tbl_ssl_product.product_uid,tbl_ssl_product.product_name,tbl_ssl_product_list.status_id,tbl_ssl_status.uid,tbl_ssl_status.status_name,tbl_ssl_product_list.ssl_id,tbl_ssl_product_list.expiration_date,tbl_vendor.web_link FROM tbl_ssl_domain_list INNER JOIN tbl_ssl_product_list on tbl_ssl_product_list.ssl_uid = tbl_ssl_domain_list.ssl_product_list_id INNER JOIN tbl_vendor on tbl_vendor.id = tbl_ssl_product_list.vendor_id INNER JOIN tbl_account on tbl_account.id = tbl_ssl_product_list.account_number INNER JOIN tbl_ssl_status on tbl_ssl_status.uid = tbl_ssl_product_list.status_id INNER JOIN tbl_ssl_product on tbl_ssl_product.product_uid = tbl_ssl_product_list.ssl_product_type AND tbl_ssl_product_list.status_id = '2' and tbl_ssl_product_list.expiration_date < '$day' ";

$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td><?php echo $row[16]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[9]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[17]; ?></td>
            <td> <a target="_blank" href="<?php echo $row[18]; ?>"><i class="fa fa-internet-explorer "></i></a> </td>
        </tr>
        <?php
    }
} mysqli_close($con);
?>  