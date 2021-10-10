<?php
include '../../include/lib_page.php';
        $sno = 0;
	$sql = "SELECT tbl_server.id,tbl_server.vendor,tbl_vendor.id,tbl_vendor.name,tbl_server.account_no,tbl_account.id,tbl_account.username,tbl_server.server_type,tbl_server_type.id,tbl_server_type.server_type,tbl_server.server_name,tbl_server.server_ip,tbl_server.username,tbl_server.password,tbl_server.expiration_date,tbl_server.application,tbl_server.purpose,tbl_server.spec,tbl_server.remarks FROM tbl_server INNER JOIN tbl_vendor on tbl_vendor.id = tbl_server.vendor INNER JOIN tbl_account on tbl_account.id = tbl_server.account_no INNER JOIN tbl_server_type on tbl_server_type.id = tbl_server.server_type";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array(MYSQLI_BOTH)) {
?>	
		<tr>
                        <td><input type="checkbox" name="server_list[]" id="server_list" value="<?php echo $row[0];?>" /></td>
                        <td><?= ++$sno; ?></td>
                        <td hidden=""><?php echo $row[0];?></td>
			<td><?php echo $row[3];?></td>
                        <td><?php echo $row[6];?></td>
                        <td><?php echo $row[9];?></td>
                        <td><?php echo $row[10];?></td>
                        <td><?php echo $row[11];?></td>
                         <td><?php echo $row[14];?></td>
                        <td><?php echo $row[12];?></td>
                       
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a  data-toggle="modal" data-target="#show_password_model_box"
                                                    onclick="
                                                        $('#pass').val('<?php echo decrypt($row[13]); ?>')">Show Password</a></li>
                                            <li><a  data-toggle="modal" data-target="#_server_renewed_model_box"
                                        onclick="
                                                $('#server_renewal_id').val('<?= $row[0]; ?>')
                                                $('#server_next_renewal').val('<?= $row['expiration_date'] ?>');
                                        ">Renewed</a></li>
                                            <li><a href="../edit_page/index?id=<?php echo encrypt($row[0]); ?> ">Edit</a></li>
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