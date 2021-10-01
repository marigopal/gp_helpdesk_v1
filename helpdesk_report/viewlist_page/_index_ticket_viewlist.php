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
$sql = "SELECT tbl_helpdesk.id,tbl_helpdesk.category_id,tbl_helpdesk_category.id,tbl_helpdesk_category.category_name,tbl_helpdesk.priority_id,tbl_helpdesk_priority.id,tbl_helpdesk_priority.priority_name,tbl_helpdesk.subject,tbl_helpdesk.description,tbl_helpdesk.created_by,tbl_users.id,tbl_users.firstname,tbl_helpdesk.created_on,tbl_helpdesk.status_id,tbl_helpdesk_status.id,tbl_helpdesk_status.statusname,tbl_helpdesk.screenshot_name FROM tbl_helpdesk INNER JOIN tbl_helpdesk_category on tbl_helpdesk_category.id = tbl_helpdesk.category_id INNER JOIN tbl_helpdesk_priority on tbl_helpdesk_priority.id = tbl_helpdesk.priority_id INNER JOIN tbl_users on tbl_users.id = tbl_helpdesk.created_by INNER JOIN tbl_helpdesk_status on tbl_helpdesk_status.id = tbl_helpdesk.status_id $and";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[12]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[11]; ?></td>
            <td><?php echo $row[15]; ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a  data-toggle="modal" data-target="#"
                                onclick="
                                        $('#u_id').val('<?= $row[0]; ?>')
                                        $('#next_renewal').val('<?= $row['expiredate'] ?>');
                                ">Report</a></li>
                            <?php if ($row[13] == '1' && $_SESSION['accessid'] == '3') { ?>
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
                                    ">Resolved</a></li>  
                            <li><a  data-toggle="modal" data-target="#delete_ticket_model_box"
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
} else {
    echo '<span style="color:red;text-align:center;">There is no ticket available..!</span>';
}
mysqli_close($con);
?>
  