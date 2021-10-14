<?php
include '../../include/lib_page.php';
        $sno = 0;
	$sql = "SELECT tbl_ssl_product_list.ssl_uid,tbl_ssl_product_list.created_on,tbl_ssl_product_list.purchased_on,tbl_ssl_product_list.vendor_id,tbl_vendor.id,tbl_vendor.name,tbl_ssl_product_list.account_number,tbl_account.id,tbl_account.username,tbl_ssl_product_list.ssl_id,tbl_ssl_product_list.order_id,tbl_ssl_product_list.ca_order_id,tbl_ssl_product_list.ssl_product_type,tbl_ssl_product.product_uid,tbl_ssl_product.product_name,tbl_ssl_product_list.expire_year,tbl_ssl_product_list.number_of_domain,tbl_ssl_product_list.expiration_date,tbl_ssl_product_list.admin_mail,tbl_ssl_product_list.remarks,tbl_ssl_product_list.status_id,tbl_ssl_status.uid,tbl_ssl_status.status_name FROM tbl_ssl_product_list INNER JOIN tbl_vendor on tbl_vendor.id = tbl_ssl_product_list.vendor_id INNER JOIN tbl_account on tbl_account.id = tbl_ssl_product_list.account_number INNER JOIN tbl_ssl_product on tbl_ssl_product.product_uid = tbl_ssl_product_list.ssl_product_type INNER JOIN tbl_ssl_status on tbl_ssl_status.uid = tbl_ssl_product_list.status_id";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_BOTH)) {
                    ?>	
		<tr>
                        <td><input type="checkbox" name="server_list[]" id="server_list" value="<?php echo $row[0];?>" /></td>
                        <td><?= ++$sno; ?></td>
                        <td hidden=""><?php echo $row[0];?></td>
			<td><?php echo $row[5];?></td>
                        <td><?php echo $row[8];?></td>
                        <td><?php echo $row[14];?></td>
                        <td><?php 
                        $domain_count = $row[0];
                        $maximum_ssl = $row[16];
                        $sql1 = "SELECT `ssl_product_list_id` FROM tbl_ssl_domain_list WHERE `ssl_product_list_id` = '$domain_count'";
                        if ($result1 = mysqli_query($con, $sql1)) {
                        $rowcount = mysqli_num_rows($result1);
                        }
                        echo $rowcount;
                        echo " of ";
                        echo $maximum_ssl;
                        echo " Used";
                        ?></td>
                        <td><?php echo $row[17];?></td>
                        <td><?php echo $row[22];?></td>
                         
                       
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <?php if($rowcount < $maximum_ssl)
                                            {?>
                                            <li><a  data-toggle="modal" data-target="#add_domain_ssl_model_box"
                                                    onclick="add_domain_modal('<?php echo $row[0]; ?>','<?php echo $row[17]; ?>')
                                                        
                                            ">Add Domain</a></li>
                                            <?php }?>
                                            
                                            <li><a href="../edit_page/index?id=<?php echo encrypt($row[0]); ?> ">Edit</a></li>
                                             <li><a  data-toggle="modal" data-target="#delete_model_box_server" 
                                onclick="
                                        $('#delete_id_server').val('<?php echo $row[0]; ?>');
                                         
                                            ">
                                       
                                Expired</a></li>
                                            <li><a  data-toggle="modal" data-target="#delete_model_box_server" 
                                onclick="
                                        $('#delete_id_server').val('<?php echo $row[0]; ?>');
                                         
                                            ">
                                       
                                Delete</a></li>
                                            <!--<li><a href="index_delete_account?id=<?php echo encrypt($row[0]); ?> ">Delete</a></li>-->
                                        </ul>
                                    </div> 
                        </td>
                        
                </tr>
<?php	
	}
	}
	mysqli_close($conn);
?>  