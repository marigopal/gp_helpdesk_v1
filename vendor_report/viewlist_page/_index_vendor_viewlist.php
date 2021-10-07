<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "select tbl_account.id, tbl_account.vendor,tbl_vendor.id,tbl_vendor.name,tbl_account.accountno,tbl_account.mobileno,tbl_account.email,tbl_account.username,tbl_account.password,tbl_account.service_used,tbl_account.authendication,tbl_account.remarks,tbl_account.status from tbl_account INNER JOIN tbl_vendor ON tbl_vendor.id=tbl_account.vendor and tbl_account.status= '1' ORDER BY tbl_account.vendor ASC";
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
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a  data-toggle="modal" data-target="#show_password_model_box" 
                                onclick="
                                        $('#pass').val('<?php echo decrypt($row[8]); ?>')">
                                Show Password</a></li>
                                <li><a href="../edit_vendor/index?id=<?php echo encrypt($row[0]); ?> ">Edit</a></li>
                                <li><a  data-toggle="modal" data-target="#delete_model_box" 
                                onclick="
                                        $('#delete_id').val('<?php echo $row[0]; ?>')">
                                Delete</a></li>
                                <!-- <li><a href="../db_page/_delete_vendor_update?id=<?php echo encrypt($row[0]); ?> ">Delete</a></li> -->
                    </ul>
                </div> 
            </td>
        </tr>
        <?php
    }
}
mysqli_close($conn);
?>  