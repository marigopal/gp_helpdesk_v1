<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Helpdesk</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../../bower_components/bootstrap-clockpicker/dist/bootstrap-clockpicker.min.css">
        <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="/home/index" class="logo">
                    <span class="logo-mini"><b>H</b>D</span>
                    <span class="logo-lg"><b>HELPDESK</b></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle " data-toggle="push-menu" role="button" id="menu_toggle" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a href="/create_ticket/index" >
                                    <i class="fa fa-plus"> Create Ticket</i>
                                </a>
                            </li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><img src="../../dist/img/user.png" class="img-circle" alt="User Image"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <p>
                                            <?php echo ucfirst($_SESSION['user_id']); ?>
                                        </p>
                                        <p>

                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="/users_mgnt/profile_update.php?u_id=<?php echo $_SESSION['user_uid']; ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="/include/logout.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li><a href="/home/index"><i class="fa fa-dashboard"></i> <span>Dashboard Users</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa  fa-send"></i> <span>Helpdesk</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/helpdesk_report/index"><i class="fa fa-circle-o"></i>Dashboard</a></li>
                        </ul>
                    </li>
                    <li><a href="/include/logout.php"><i class="fa fa-frown-o"></i> <span>Logout</span></a></li>
                </ul>
                </section>
            </aside>
