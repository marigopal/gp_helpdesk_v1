<?php

date_default_timezone_set("Asia/Calcutta");
$con = mysqli_connect("gp-helpdesk.c6bedcoluw3c.ap-south-1.rds.amazonaws.com", "gpuser", "83JdX10wfC0HRlJOMOHC", "gphelpdesk");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

