<?php
include '../../include/lib_page.php';
if (!empty($_POST['filter']))
{
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    $and = "and tbl_server_logs.status = '$filter'";
     
}else {
    $and = "and tbl_server_logs.status = '3'";
}
$sno = 0;
$sql = "SELECT tbl_server_logs.id,tbl_server_logs.vendor,tbl_vendor.id,tbl_vendor.name,tbl_server_logs.account_no,tbl_account.id,tbl_account.username,tbl_server_logs.server_type,tbl_server_type.id,tbl_server_type.server_type,tbl_server_logs.server_name,tbl_server_logs.server_ip,tbl_server_logs.expiration_date,tbl_server_logs.date_global,tbl_server_logs.status,tbl_server_status.id,tbl_server_status.server_status,tbl_server_logs.done_by,tbl_users.id,tbl_users.firstname,tbl_server_logs.done_on from tbl_server_logs INNER JOIN tbl_vendor on tbl_vendor.id = tbl_server_logs.vendor INNER JOIN tbl_account on tbl_account.id = tbl_server_logs.account_no INNER JOIN tbl_server_type on tbl_server_type.id = tbl_server_logs.server_type INNER JOIN tbl_server_status on tbl_server_status.id = tbl_server_logs.status INNER JOIN tbl_users on tbl_users.id = tbl_server_logs.done_by $and";
$result = $con->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>	
    <tr>
        <td><?= ++$sno; ?></td>
        <td hidden=""><?=$row['id'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['username'];?></td>
        <td><?=$row['server_type'];?></td>
        <td><?=$row['server_name'];?></td>
        <td><?=$row['server_ip'];?></td>
        <td><?=$row['expiration_date'];?></td>
        <td><?=$row['date_global'];?></td>
        <td><?=$row['server_status'];?></td>
        <td><?=ucfirst($row['firstname']);?></td>
        <td><?=$row['done_on'];?></td>
    </tr>
<?php	
	}
	}
	mysqli_close($con);
?>
  