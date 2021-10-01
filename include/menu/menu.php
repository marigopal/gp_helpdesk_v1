<?php
 session_start();
if ($_SESSION['accessid'] == 3) {
    include ('../../include/menu/menu_users.php');
}
// This is IT Support level
if ($_SESSION['accessid'] == 5) {
    include ('../../include/menu/menu_it.php');
}
?>
