<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
       
        <section class="content-header">
        <h1>Server Logs</h1>
            <ol class="breadcrumb">
                <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="/server_report/index_page/index">Server Dashboard</a></li>
              <li class="active">Logs</li>
            </ol>
        </section>
             
        
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php
                        $logs_button = "SELECT tbl_server_logs.status,tbl_server_status.id,tbl_server_status.server_status from tbl_server_logs INNER JOIN tbl_server_status on tbl_server_status.id = tbl_server_logs.status GROUP BY tbl_server_status.server_status";
                if ($logs_button_result = $con->query($logs_button)) {
                    while ($logs_button_row = $logs_button_result->fetch_assoc()) {
                        $field1 = encrypt($logs_button_row['id']);
                        ?>  
                        <li><a href="/server_report/index_page/logs?filter=<?php echo $field1; ?>"><?php echo $logs_button_row['server_status']; ?></a></li>
                       <?php
                    }
                }
                ?>
                    </ul>
                </div>
                    
                    
                    
                    <div class="box ">
                        <div class="box-header bg-green-active">
                            <a    onclick="exportexcel('logs_table','Domain_logs_report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <form name="frmUser" method="post" action="">
                                <table class="table table-hover" style="padding-bottom: 50px;" id="logs_table">
                <thead>
                    <?php 
                    if (isset($_GET['filter'])) 
                    {
                                            $filter = $_GET['filter'];
                                            $filter = decrypt($filter);
//                                            echo $filter;
                    }
                    ?>
                <tr>
                    <th>Sl No</th>
                    <th hidden="">Unique ID</th>
                    <th>Vendor</th>
                    <th>Account Number</th>
                    <th>Type</th>
                    <th>Server Name</th>
                    <th>IP Address</th>
                    <th>Expiration Date</th>
                
                    
                    <th>
                        <?php 
                       if ($filter == '3')
                       {
                           echo "Next Expiration Date";
                       }
                       else if ($filter == '2')
                       {
                            echo "Deleted Date";
                            
                       }
                       else if($filter == '1')
                       {
                           echo "Created Date";
                       }
                       else
                       {
                           echo "Next Expiration Date";
                       }
                        ?>
                        </th>
                    <th>Status</th>
                    <th>Done By</th>
                    <th>Done On</th>
<!--                    <th>Remarks</th>-->
                   
                </tr>
                </thead>
                    <tbody id="_logs_server_report">

      
    </tbody>

              </table>
                                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php include ('../../include/footer.php');?>
<script src="../jquery/_logs.js" type="text/javascript"></script>

