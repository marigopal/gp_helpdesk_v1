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
    <section class="content">
        
<!--        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>-->
        <div class="row">
            <div class="col-md-6">
                <div class="box box-widget widget-user-2">
                    
                    <div class="widget-user-header bg-blue-gradient">
                   Domain Renewal Notification
                </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Vendor</th>
                                        <th>Account No</th>
                                        <th>Domain</th>
                                        <th>Expiration Date</th>
                                        <th>Web Link</th>
                                    </tr>
                                </thead>
                                <tbody id="_domain_renewals">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="box box-widget widget-user-2">
                    
                    <div class="widget-user-header bg-blue-gradient">
                   Server Renewal Notification
                </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                        <th>S No</th>
                                        <th>Vendor</th>
                                        <th>Account No</th>
                                        <th>Server Name</th>
                                        <th>Expiration Date</th>
                                        <th>Web Link</th>
                                    </tr>
                                </thead>
                                <tbody id="_server_renewals">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-widget widget-user-2">
                    
                    <div class="widget-user-header bg-blue-gradient">
                    Ticket Inprogress
                </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                    <tr>
                                    <th>Sl No</th>
                                    <th hidden="">Unique ID</th>
                                    <th>Ticket ID</th>
                                    <th>Created On</th>
                                    <th>Category</th>
                                    <th>Priority</th>
                                    <th>Subject</th>
                                    <th>Created By</th>
                                    <th>Assigned To</th>
                                    <th>Status</th>
                                    
                                    </tr>
                                </thead>
                                <tbody id="_index_ticket_report">
                                <!--     
                                File path - viewlist_page/_index_ticket_viewlist.php
                                -->
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index_admin.js" type="text/javascript"></script>