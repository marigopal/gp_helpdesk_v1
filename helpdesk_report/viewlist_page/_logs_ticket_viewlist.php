<?php
include '../../include/lib_page.php';
$user_uid = $_SESSION['user_uid'];
if (!empty($_POST['filter'])) {
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    if ($_SESSION['accessid'] == '5') {
        $and = "and tbl_helpdesk.status_id = '$filter'";
    } else {
        $and = "and tbl_helpdesk.created_by = '$user_uid' and tbl_helpdesk.status_id = '$filter'";
    }
} else {
    if ($_SESSION['accessid'] == '5') {
        $and = "and tbl_helpdesk.status_id != '4' and tbl_helpdesk.status_id != '3'";
    } else {
        $and = "and tbl_helpdesk.created_by = '$user_uid' and tbl_helpdesk.status_id != '4'";
    }
}
$sno = 0;
$sql = "SELECT tbl_helpdesk_log.id,tbl_helpdesk_log.helpdesk_id,tbl_helpdesk_log.status_id,tbl_helpdesk_status.id,tbl_helpdesk_status.statusname,tbl_helpdesk_log.done_by,tbl_helpdesk_log.done_on,tbl_helpdesk.id,tbl_helpdesk.ticket_id from tbl_helpdesk_log INNER JOIN tbl_helpdesk_status on tbl_helpdesk_status.id = tbl_helpdesk_log.status_id INNER JOIN tbl_helpdesk on tbl_helpdesk.id = tbl_helpdesk_log.helpdesk_id ORDER BY tbl_helpdesk_log.helpdesk_id ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td><?php echo $row[8]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo ${strtoupper($row['done_by']) . 'firstname'};?></td>
            <td><?php echo $row[6]; ?></td>
            
        </tr>
        <?php
    }
} 
mysqli_close($con);
?>
  