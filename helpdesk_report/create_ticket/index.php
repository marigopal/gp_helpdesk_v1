<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Create Ticket</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create Ticket</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="../db_page/_insert_ticket.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group ">
                                    <label>Category<span class="required text-red">*</span></label>
                                    <select class="form-control" id="category" name="category" required="">
                                        <option value="">--Please Select --</option>
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
                                        <option value="">--Please Select --</option>
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
                                    <input type="text" class="form-control"  name="subject" id="subject" required="" >
                                    <span id="subject_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label >Description<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="description" name="description" maxlength="150" required=""></textarea>
                                    <span id="description_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Screen Shot</label>
                                    <input id="image" type="file" accept="image/*" name="image" />
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="btn_update">
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