<?php
$count_notification = 0;
$sql = "select status_id FROM `tbl_helpdesk` where  status_id='1'";
if ($result=mysqli_query($con,$sql))
{
    $rowcount_ticket=mysqli_num_rows($result);
    $count_notification = $count_notification + $rowcount_ticket;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Helpdesk</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../../template_files/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/bootstrap-clockpicker/dist/bootstrap-clockpicker.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="../../template_files/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../template_files/dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="../../template_files/bower_components/morris.js/morris.css">
        <link rel="stylesheet" href="../../template_files/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="../../template_files/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../template_files/toastr/toastr.min.css">
    <link rel="stylesheet" href="../../template_files/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../template_files/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../template_files/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <style>
        .blink_me 
        {
          animation: blinker 1s linear infinite;
      }

      @keyframes blinker 
      {
          50% 
          {
            opacity: 0;
        }
    }
        </style>
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
                            <?php if ($_SESSION['accessid'] =='5')
                            {
                            ?>
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <?php

                                 if($count_notification != 0)
                                 {
                                    echo '<i class="fa fa-bell-o blink_me"></i>';
                                    echo '<span class="label label-danger blink_me">';   
                                    echo $count_notification;
                                    echo '</span>';
                                }
                                ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header bg-green">You have <?php echo $count_notification;?> notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li >
                                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("1") ?>"> Ticket inprogress  <span class="pull-right badge bg-red"><?php echo $rowcount_ticket; ?></span></a>
                                            </li>
                                            <li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        <?php }?>
                            <li class="">
                                <a href="/helpdesk_report/create_ticket/index" >
                                    <i class="fa fa-plus"> Create Ticket</i>
                                </a>
                            </li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs"><img src="/img/user.png" class="img-circle" alt="User Image"></span>
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
                                            <a href="/users_report/edit_users/index?id=<?php echo encrypt($_SESSION['user_uid']); ?>" class="btn btn-default btn-flat">Profile</a>
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