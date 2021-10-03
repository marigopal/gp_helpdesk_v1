<?php include '../../include/header.php'; ?>
<aside class="main-sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="/home/index"><i class="fa fa-dashboard"></i> <span>Dashboard Users</span></a></li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-book"></i> <span>Helpdesk</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/helpdesk_report/index"><i class="fa fa-circle-o"></i>Tickets Report</a></li>
                <li><a href="/helpdesk_report/index_page/logs"><i class="fa fa-circle-o"></i>Logs</a></li>
            </ul>
        </li>
        <li><a href="/include/logout.php"><i class="fa fa-frown-o"></i> <span>Logout</span></a></li>
    </ul>
</section>
</aside>
