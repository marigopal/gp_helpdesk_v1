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
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a  data-toggle="modal" data-target="#report_ticket_model_box"
                                onclick="
                                        $('#report_ticket_category').val('<?= $row[3]; ?>');
                                        $('#report_ticket_priority').val('<?= $row[6]; ?>');
                                        $('#report_ticket_status').val('<?= $row[29]; ?>');
                                        $('#report_ticket_time_taken').val('<?= $row[26]; ?>');
                                        $('#report_ticket_created_on').val('<?= $row[10]; ?>');
                                        $('#report_ticket_created_by').val('<?php echo ${strtoupper($row['created_by']) . 'firstname'};?>');
                                        $('#report_ticket_assigned_by').val('<?php echo ${strtoupper($row['assigned_by']) . 'firstname'};?>');
                                        $('#report_ticket_assigned_to').val('<?php echo ${strtoupper($row['assigned_to']) . 'firstname'};?>');
                                        $('#report_ticket_subject').val('<?= $row[7]; ?>');
                                        $('#report_ticket_description').val('<?= $row[8]; ?>');
                                        $('#report_ticket_hold_on').val('<?= $row[15]; ?>');
                                        $('#report_ticket_hold_reason').val('<?= $row[16]; ?>');
                                        $('#report_ticket_observation_time').val('<?= $row[18]; ?>');
                                        $('#report_ticket_observation_reason').val('<?= $row[19]; ?>');
                                        $('#report_ticket_resolved_on').val('<?= $row[25]; ?>');
                                        $('#report_ticket_resolved_reason').val('<?= $row[23]; ?>');
                                        ">Report</a></li>
                            <?php if ($row[27] == '1' && $_SESSION['accessid'] == '3') { ?>
                                <li><a href="../edit_ticket/index?id=<?php echo encrypt($row[0]); ?>">Edit</a></li>
                            <li><a  data-toggle="modal" data-target="#delete_ticket_model_box"
                                    onclick="
                                            $('#delete_ticket_id').val('<?= $row[0]; ?>');
                                    ">Delete</a></li>
                            <?php } ?>
                            <?php if ($_SESSION['accessid'] == '5') { ?>
                            <li><a href="../edit_ticket/index?id=<?php echo encrypt($row[0]); ?>">Edit</a></li>
                            <li><a  data-toggle="modal" data-target="#assign_ticket_model_box"
                                    onclick="
                                            $('#assignto_ticket_id').val('<?= $row[0]; ?>');
                                    ">Assign</a></li>
                            <?php 
                            if ($row['assigned_to'] != '')
                            {
                            ?>        
                            <li><a  data-toggle="modal" data-target="#hold_ticket_model_box"
                                    onclick="
                                            $('#hold_ticket_id').val('<?= $row[0]; ?>');
                                    ">Hold</a></li>
                            <li><a  data-toggle="modal" data-target="#observation_ticket_model_box"
                                    onclick="
                                            $('#observation_ticket_id').val('<?= $row[0]; ?>');
                                    ">Observation</a></li>  
                            <li><a  data-toggle="modal" data-target="#resolved_ticket_model_box"
                                    onclick="
                                            $('#resolved_ticket_id').val('<?= $row[0]; ?>');
                                             $('#resolved_ticket_created_on').val('<?= $row[12]; ?>');
                                    ">Resolved</a></li>  
                            <?php }?>                            <li><a  data-toggle="modal" data-target="#delete_ticket_model_box"
                                    onclick="
                                            $('#delete_ticket_id').val('<?= $row[0]; ?>');
                                    ">Delete</a></li>
                            <?php } ?>
                    </ul>
                </div> 
            </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
  