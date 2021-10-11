<?php include '../../include/header.php';?>
<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> <span>Dashboard IT</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Vendor</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/vendor_report/index_page/index"><i class="fa fa-circle-o"></i>Vendor Accounts</a></li>
                    <li><a href="/vendor_report/index_page/index_vendor_profile"><i class="fa fa-circle-o"></i>Vendor Profile list</a></li>
                    <li><a href="/vendor_report/logs_page/index"><i class="fa fa-circle-o"></i>Logs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-circle"></i> <span>Domain</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/domain_report/index"><i class="fa fa-circle-o"></i>Primary Domain</a></li>
                    <li><a href="/domain_report/index_page/index_sub_records"><i class="fa fa-circle-o"></i>Sub Records</a></li>
                    <li><a href="/domain_report/index_page/logs"><i class="fa fa-circle-o"></i>Logs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i> <span>Server</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/server_report/index_page/index"><i class="fa fa-circle-o"></i>Product List</a></li>
                    <li><a href="/server_report/index_page/logs"><i class="fa fa-circle-o"></i>Logs</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bed"></i> <span>SSL</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/ssl_report/index_page/index"><i class="fa fa-circle-o"></i>SSL Product List</a></li>
                    <li><a href="/server_report/index_page/logs"><i class="fa fa-circle-o"></i>Logs</a></li>
                </ul>
            </li>
<!--            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-server"></i> <span>Server</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/server/index"><i class="fa fa-circle-o"></i>Product List</a></li>
                    <li><a href="/server/logs"><i class="fa fa-circle-o"></i>Logs</a></li>
                </ul>
            </li>-->
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
           
            <li><a href="/include/logout"><i class="fa fa-frown-o"></i> <span>Logout</span></a></li>
        </ul>
    </section>
</aside>
