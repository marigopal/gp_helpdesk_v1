<?php
include('../../include/lib_page.php');
$id = $_POST['id'];
$reason = $_POST['reason'];
$action = $_POST['action'];
$created_on = $_POST['created_on_value'];
$result = diff_dates($created_on);
$user_uid = $_SESSION['user_uid'];

if($action == 'delete');
{
    $sql = "UPDATE `tbl_helpdesk` SET `status_id`='4',`deleted_by`='$user_uid',`deleted_on`=now(),`deleted_reason`='$reason' WHERE `id` = '$id'";
    $sql_log ="INSERT INTO `tbl_helpdesk_log`(`helpdesk_id`, `status_id`, `done_by`, `done_on`) VALUES ('$id','4','$user_uid',now())";
}
if($action == 'hold')
{
   $sql = "UPDATE `tbl_helpdesk` SET `status_id`='6',`hold_by`='$user_uid',`hold_on`=now(),`hold_reason`='$reason' WHERE `id` = '$id'";
   $sql_log ="INSERT INTO `tbl_helpdesk_log`(`helpdesk_id`, `status_id`, `done_by`, `done_on`) VALUES ('$id','6','$user_uid',now())";

}
if($action == 'observation')
{
    $sql = "UPDATE `tbl_helpdesk` SET `status_id`='5',`observation_by`='$user_uid',`observation_on`=now(),`observation_reason`='$reason' WHERE `id` = '$id'";
    $sql_log ="INSERT INTO `tbl_helpdesk_log`(`helpdesk_id`, `status_id`, `done_by`, `done_on`) VALUES ('$id','5','$user_uid',now())";

}

if($action == 'resolved')
{
    $sql = "UPDATE `tbl_helpdesk` SET `status_id`='3',`resolved_by`='$user_uid',`resolved_on`=now(),`solution`='$reason',`time_taken`='$result' WHERE `id` = '$id'";
    $sql_log ="INSERT INTO `tbl_helpdesk_log`(`helpdesk_id`, `status_id`, `done_by`, `done_on`) VALUES ('$id','3','$user_uid',now())";

}
if($action == 'assign')
{
    $sql = "UPDATE `tbl_helpdesk` SET `status_id`='2',`assigned_to`='$reason',`assigned_by`='$user_uid',`assigned_on`=now() WHERE `id` = '$id'";
    $sql_log ="INSERT INTO `tbl_helpdesk_log`(`helpdesk_id`, `status_id`, `done_by`, `done_on`) VALUES ('$id','2','$user_uid',now())";

}
//echo $sql;
//exit();
if ((mysqli_query($con, $sql) && (mysqli_query($con, $sql_log)))) {
    echo "Ticket Updated Successfully";
} else {
    echo "Something went wrong..! Contact your Developer..!";
}
mysqli_close($con);?>
