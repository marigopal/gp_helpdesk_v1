<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT tbl_helpdesk.id,tbl_helpdesk.category_id,tbl_helpdesk_category.id,tbl_helpdesk_category.category_name,tbl_helpdesk.priority_id,tbl_helpdesk_priority.id,tbl_helpdesk_priority.priority_name,tbl_helpdesk.subject,tbl_helpdesk.description,tbl_helpdesk.created_by,tbl_users.id,tbl_users.firstname,tbl_helpdesk.created_on,tbl_helpdesk.status_id,tbl_helpdesk_status.id,tbl_helpdesk_status.statusname,tbl_helpdesk.screenshot_name FROM tbl_helpdesk INNER JOIN tbl_helpdesk_category on tbl_helpdesk_category.id = tbl_helpdesk.category_id INNER JOIN tbl_helpdesk_priority on tbl_helpdesk_priority.id = tbl_helpdesk.priority_id INNER JOIN tbl_users on tbl_users.id = tbl_helpdesk.created_by INNER JOIN tbl_helpdesk_status on tbl_helpdesk_status.id = tbl_helpdesk.status_id and tbl_helpdesk.id = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Ticket</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Edit Ticket</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="unique_id" hidden="">
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="u_id" id="u_id" value="<?php echo $id; ?>" readonly="">
                                    <span id="sub_domain_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group ">
                                    <label>Category<span class="required text-red">*</span></label>
                                    <select class="form-control" id="category" name="category" required="">
                                        <option value="<?php echo $data[2]; ?>"><?php echo $data[3]; ?></option>
                                        <?php
                                        $query2 = "select *  from tbl_helpdesk_category order by category_name ASC";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>

                                                <option value="<?= $row2['id'] ?>"><?= $row2['category_name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="category_check" class="help-block"></span>
                                </div>
                                <div class="form-group ">
                                    <label>Priority<span class="required text-red">*</span></label>
                                    <select class="form-control" id="priority" name="priority" required="">
                                        <option value="<?php echo $data[5]; ?>"><?php echo $data[6]; ?></option>
                                        <?php
                                        $query2 = "select *  from tbl_helpdesk_priority";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['id'] ?>"><?= $row2['priority_name'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="priority_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Subject<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="subject" id="subject" required="" value="<?php echo $data[7]; ?>" >
                                    <span id="subject_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label >Description<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="description" name="description" maxlength="150" required=""><?php echo $data[8]; ?></textarea>
                                    <span id="description_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="btn_update">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/helpdesk_report/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_edit_ticket.js" type="text/javascript"></script>