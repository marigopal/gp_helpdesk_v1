<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content-header">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tickets</span>
                        <span class="info-box-number">90</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Inprogress</span>
                        <span class="info-box-number">40</span>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Assets</span>
                        <span class="info-box-number">760</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Hold</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-widget widget-user-2">
                <div class="widget-user-header bg-green">
                    Pending Task
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li class="text-bold"><a href="#">Create Email, Aliases and Master <span class="pull-right badge bg-red">31</span></a></li>
                        <li class="text-bold"><a href="#">Delete Email, Aliases and Master <span class="pull-right badge bg-red">5</span></a></li>
                        <li class="text-bold"><a href="#">Change Master <span class="pull-right badge bg-red">12</span></a></li>
                        <li class="text-bold"><a href="#">Create Forward <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">Delete Forward <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">System Movement <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">User Create <span class="pull-right badge bg-red">842</span></a></li>
                    </ul>
                </div>
            </div>
           /.widget-user 
        </div>
        <div class="col-md-6" >
            <div class="box box-widget widget-user-2">
                <div class="widget-user-header bg-green">
                    Pending Task
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li class="text-bold"><a href="#">User Delete <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">User Movement <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">Warranty Claim <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">SME Jobs <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">NFS Create <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">NFS Change <span class="pull-right badge bg-red">842</span></a></li>
                        <li class="text-bold"><a href="#">NFS Delete<span class="pull-right badge bg-red">842</span></a></li>
                    </ul>
                </div>
            </div>
             /.widget-user 
        </div>
    </div>
    </section>-->
    <section class="content">
        <div class="row">

            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Domain Expiration Report</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Vendor</th>
                                    <th>Account No</th>
                                    <th>Domain</th>
                                    <th>Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody id="_domain_renewals">

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Server Expiration Report</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th>S No</th>
                                    <th>Vendor</th>
                                    <th>Account No</th>
                                    <th>Server Name</th>
                                    <th>Expiration Date</th>
                                </tr>
                            </thead>
                            <tbody id="_server_renewals">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index_admin.js" type="text/javascript"></script>