<?php
session_start();
if ($_SESSION['accessid'] == 5) 
{
    header("Location: /dashboard_admin/index");
} 
elseif ($_SESSION['accessid'] == 4) 
{
    header("Location: /dashboard_admin/index");
} 
elseif ($_SESSION['accessid'] == 3) 
{
    header("Location: /helpdesk_report/index");
} 
else 
{
    header("Location: /login/index");
    exit();
}
?>