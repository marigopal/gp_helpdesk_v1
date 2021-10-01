<?php

session_start();
echo $_SESSION['accessid'];
if ($_SESSION['accessid'] == 5) {
    header("Location: /dashboard_it/index");
} elseif ($_SESSION['accessid'] == 4) {
    header("Location: /dashboard_accounts/index");
} elseif ($_SESSION['accessid'] == 3) {
    header("Location: /helpdesk_report/index");
} else {
    header("Location: /login/index");
    exit();
}
?>