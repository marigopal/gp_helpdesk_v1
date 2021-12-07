<?php
include '../../include/lib_page.php';
        $sno = 0;
        if (!empty($_POST['filter'])) {
    $filter = decrypt($_POST['filter']);
 
    $and = "and tbl_ssl_domain_list.ssl_product_list_id = '$filter'";
    
} else {
    $and = "";
}
	$sql = "SELECT tbl_ssl_domain_list.ssl_domain_uid,tbl_ssl_domain_list.ssl_product_list_id,tbl_ssl_domain_list.domain_name,tbl_ssl_product_list.ssl_uid,tbl_ssl_product_list.vendor_id,tbl_vendor.id,tbl_vendor.name,tbl_ssl_product_list.account_number,tbl_account.id,tbl_account.username,tbl_ssl_product_list.ssl_product_type,tbl_ssl_product.product_uid,tbl_ssl_product.product_name,tbl_ssl_product_list.status_id,tbl_ssl_status.uid,tbl_ssl_status.status_name,tbl_ssl_product_list.ssl_id FROM tbl_ssl_domain_list INNER JOIN tbl_ssl_product_list on tbl_ssl_product_list.ssl_uid = tbl_ssl_domain_list.ssl_product_list_id INNER JOIN tbl_vendor on tbl_vendor.id = tbl_ssl_product_list.vendor_id INNER JOIN tbl_account on tbl_account.id = tbl_ssl_product_list.account_number INNER JOIN tbl_ssl_status on tbl_ssl_status.uid = tbl_ssl_product_list.status_id INNER JOIN tbl_ssl_product on tbl_ssl_product.product_uid = tbl_ssl_product_list.ssl_product_type and tbl_ssl_product_list.status_id != '3' $and";
     
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_BOTH)) {
                    ?>	
		<tr>
                        <td><input type="checkbox" name="server_list[]" id="server_list" value="<?php echo $row[0];?>" /></td>
                        <td><?= ++$sno; ?></td>
                        <td hidden=""><?php echo $row[0];?></td>
			<td><?php echo $row[16];?></td>
			<td><?php echo $row[6];?></td>
                        <td><?php echo $row[9];?></td>
                        <td><?php echo $row[12];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[15];?></td>
                         
                       
                        <td>
                            <a  data-toggle="modal" data-target="#change_ssl_domain_name_model_box_server" 
                                                onclick="
                                                    $('#change_ssl_domain_name_id').val('<?php echo $row[0]; ?>');
                                                    $('#change_ssl_domain_name').val('<?php echo $row[2]; ?>');
                                                "><i class="fa fa-retweet"></i></a>
                             
                        </td>
                </tr>
<?php	
	}
	}
        
	mysqli_close($conn);
?>  