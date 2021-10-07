<?php
include '../../include/lib_page.php';
$user_uid = $_SESSION['user_uid'];
if (!empty($_POST['filter'])) 
{
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    if ($_SESSION['accessid'] == '5') 
    {
        $and = "and tbl_helpdesk.status_id = '$filter'";
    } 
    else 
    {
        $and = "and tbl_helpdesk.created_by = '$user_uid' and tbl_helpdesk.status_id = '$filter'";
    }
} 
else 
{
    if ($_SESSION['accessid'] == '5') 
    {
        $and = "and tbl_helpdesk.status_id != '4' and tbl_helpdesk.status_id != '3'";
    } 
    else 
    {
        $and = "and tbl_helpdesk.created_by = '$user_uid' and tbl_helpdesk.status_id != '4'";
    }
}
$sno = 0;
$sql = "SELECT tbl_helpdesk.id,tbl_helpdesk.category_id,tbl_helpdesk_category.id,tbl_helpdesk_category.category_name,tbl_helpdesk.priority_id,tbl_helpdesk_priority.id,tbl_helpdesk_priority.priority_name,tbl_helpdesk.subject,tbl_helpdesk.description,tbl_helpdesk.created_by,tbl_helpdesk.created_on,tbl_helpdesk.assigned_by,tbl_helpdesk.assigned_on,tbl_helpdesk.assigned_to,tbl_helpdesk.hold_by,tbl_helpdesk.hold_on,tbl_helpdesk.hold_reason,tbl_helpdesk.observation_by,tbl_helpdesk.observation_on,tbl_helpdesk.observation_reason,tbl_helpdesk.deleted_by,tbl_helpdesk.deleted_on,tbl_helpdesk.deleted_reason,tbl_helpdesk.solution,tbl_helpdesk.resolved_by,tbl_helpdesk.resolved_on,tbl_helpdesk.time_taken,tbl_helpdesk.status_id,tbl_helpdesk_status.id,tbl_helpdesk_status.statusname,tbl_helpdesk.screenshot_name,tbl_helpdesk.ticket_id FROM tbl_helpdesk INNER JOIN tbl_helpdesk_category on tbl_helpdesk_category.id = tbl_helpdesk.category_id INNER JOIN tbl_helpdesk_priority on tbl_helpdesk_priority.id = tbl_helpdesk.priority_id INNER JOIN tbl_helpdesk_status on tbl_helpdesk_status.id = tbl_helpdesk.status_id $and";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_array(MYSQLI_BOTH)) 
    {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[31]; ?></td>
            <td><?php echo $row[10]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo ${strtoupper($row['created_by']) . 'firstname'};?></td>
            <td><?php echo ${strtoupper($row['assigned_to']) . 'firstname'};?></td>
            <td><?php echo $row[29]; ?></td>
            
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
  