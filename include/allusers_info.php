<?php
$sql_users = "SELECT * FROM `tbl_users`";
$result_user = mysqli_query($con, $sql_users);
while ($row_user = mysqli_fetch_assoc($result_user)) 
{
    ${strtoupper($row_user['id']) . 'firstname'} = $row_user['firstname'];
    ${strtoupper($row_user['id']) . 'lastname'} = $row_user['lastname'];
    ${strtoupper($row_user['id']) . 'email'} = $row_user['email'];
    ${strtoupper($row_user['id']) . 'username'} = $row_user['username'];
    ${strtoupper($row_user['id']) . 'accessid'} = $row_user['accessid'];
}
?>