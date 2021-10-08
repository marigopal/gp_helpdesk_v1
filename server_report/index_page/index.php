<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
       
        <section class="content-header">
        <h1>Server List</h1>
            <ol class="breadcrumb">
                <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
          
              <li class="active">SSL Dashboard</li>
            </ol>
        </section>
        
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
               
                    <div class="box ">
                        <div class="box-header bg-green-active">
                            <a href="/server/create_server"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" data-toggle="modal" data-target="#new_users" title="New"></a>
                            <a onclick="exportexcel('account_list_index','Account_report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                        
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <form name="frmUser" method="post" action="">
                                <table class="table table-hover" style="padding-bottom: 50px;" id="account_list_index">
                <thead>
                <tr>
                    <th>Sl No</th>
                    <th hidden="">Unique ID</th>
                    <th>Vendor</th>
                    <th>Account Number</th>
                    <th>Server Type</th>
                    <th>Server Name</th>
                    <th>IP Address</th>
                    <th>Expiration Date</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                </thead>
                    <tbody id="_server_report">
      
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

