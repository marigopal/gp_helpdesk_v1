<?php
include '../../include/lib_page.php';
if (!empty($_POST['filter'])) 
{
    $filter = $_POST['filter'];
    $filter = decrypt($filter);
    $and = "AND tbl_users.status_id ='$filter'";
    } 
    else 
    {
        $and = "AND tbl_users.status_id !='2' AND tbl_users.status_id !='3'";
    }

$sno = 0;
$sql = "SELECT tbl_users.id,tbl_users.firstname,tbl_users.lastname,tbl_users.email,tbl_users.username,tbl_users.password,tbl_users.created_on,tbl_users.accessid,tbl_users_access.users_accessid,tbl_users_access.access_name,tbl_users.status_id,tbl_users_status.id,tbl_users_status.users_status from tbl_users INNER JOIN tbl_users_access on tbl_users_access.users_accessid = tbl_users.accessid INNER JOIN tbl_users_status on tbl_users_status.id = tbl_users.status_id $and and tbl_users.id != ".$_SESSION['user_uid']."";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_array(MYSQLI_BOTH)) 
    {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[9]; ?></td>
            <td><?php echo $row[12]; ?></td>
            <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose<span class="caret"></span></button>
                            
                            <ul class="dropdown-menu">
                                <?php if($filter != '2') {
                                   
                                    ?>

                                <li><a  data-toggle="modal" data-target="#users_default_access_model_box"
                                        onclick="
                                            $('#users_change_access_uid').val('<?= $row[0]; ?>');
                                            // $('#users_change_access_name').val('<?= $row[8] ?>');
                                        ">Change Access</a>
                                </li>
                                <li><a  data-toggle="modal" data-target="#users_property_change_model_box"
                                        onclick="
                                            $('#user_property_id').val('<?= $row[0]; ?>');
                                             $('#user_property_action').val('Reset_password');
                                        ">Reset Password</a>
                                </li>
                                <?php if($filter != '3') {?>
                                <li><a  data-toggle="modal" data-target="#users_property_change_model_box"
                                        onclick="
                                            $('#user_property_id').val('<?= $row[0]; ?>');
                                             $('#user_property_action').val('Disable');
                                        ">Disable</a>
                                </li>
                                <?php }
                                if($filter == '3') {?>
                                <li><a  data-toggle="modal" data-target="#users_property_change_model_box"
                                        onclick="
                                            $('#user_property_id').val('<?= $row[0]; ?>');
                                             $('#user_property_action').val('Enable');
                                        ">Enable</a>
                                </li>
                                 <?php }?>
                                <li><a  data-toggle="modal" data-target="#users_property_change_model_box"
                                        onclick="
                                            $('#user_property_id').val('<?= $row[0]; ?>');
                                             $('#user_property_action').val('Delete');
                                        ">Delete</a>
                                </li>
                                <?php
                                }?>
                            </ul>
                      
                        </div>
                         
            </td>
        </tr>
        <?php
    }
} 
mysqli_close($con);
?>
  