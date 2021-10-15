<?php
include '../../include/lib_page.php';
        $sno = 0;

	$sql = "SELECT tbl_monthly_list.id,tbl_monthly_list.vendor,tbl_vendor.id,tbl_vendor.name,tbl_vendor.web_link,tbl_monthly_list.billed_for,tbl_monthly_list.payment_method,tbl_payment_method.payment_uid,tbl_payment_method.payment_vendor,tbl_monthly_list.expiration_date,tbl_monthly_list.status_id,tbl_montly_status.status_uid,tbl_montly_status.status_name FROM tbl_monthly_list INNER JOIN tbl_vendor on tbl_vendor.id = tbl_monthly_list.vendor INNER JOIN tbl_payment_method on tbl_payment_method.payment_uid = tbl_monthly_list.payment_method INNER JOIN tbl_montly_status on tbl_montly_status.status_uid = tbl_monthly_list.status_id";
     
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_BOTH)) {
                    ?>	
		<tr>
                        
                        <td><?= ++$sno; ?></td>
                        <td hidden=""><?php echo $row[0];?></td>
			<td><?php echo $row[3];?></td>
			<td><?php echo $row[5];?></td>
                        <td><?php echo $row[8];?></td>
                        <td><?php echo $row[9];?></td>
                        
                         
                       
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a  data-toggle="modal" data-target="#change_ssl_domain_name_model_box_server" 
                                                onclick="
                                                    $('#change_ssl_domain_name_id').val('<?php echo $row[0]; ?>');
                                                    $('#change_ssl_domain_name').val('<?php echo $row[2]; ?>');
                                                ">Renewal
                                                </a>
                                            </li>
                                            <li><a  data-toggle="modal" data-target="#change_ssl_domain_name_model_box_server" 
                                                onclick="
                                                    $('#change_ssl_domain_name_id').val('<?php echo $row[0]; ?>');
                                                    $('#change_ssl_domain_name').val('<?php echo $row[2]; ?>');
                                                ">Edit
                                                </a>
                                            </li>
                                            <li><a  data-toggle="modal" data-target="#change_ssl_domain_name_model_box_server" 
                                                onclick="
                                                    $('#change_ssl_domain_name_id').val('<?php echo $row[0]; ?>');
                                                    $('#change_ssl_domain_name').val('<?php echo $row[2]; ?>');
                                                ">Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div> 
                        </td>
                </tr>
<?php	
	}
	}
        
	mysqli_close($conn);
?>  