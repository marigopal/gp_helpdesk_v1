<!--
    Renewal model box
-->
<div class="modal fade" id="renewed_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Renewed Domain</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="renewal_id" id="renewal_id" placeholder="" readonly="">
                            <span id="renewal_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Next Renewal Date [YYYY-MM-DD]</label>
                            <input type="text" class="form-control" id="next_renewal" name="next_renewal" value="<?php echo date("Y-m-d") ?>" onclick="input_remove_error_notification('next_renewal');">

                            <span id="next_renewal_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Auto Renewal</label>
                            <select class="form-control" id="auto_renewal" name="auto_renewal" required="">
                                <option value="">--Please Select --</option>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                            </select>
                            <span id="auto_renewal_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="renewed_model_box_save_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Show Password model box
-->
<div class="modal fade" id="show_password_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Show Password</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-12 ">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="text" class="form-control" name="pass" id="pass" placeholder="" readonly="">
                            <span id="pass_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Hold ticket model box-->
<div class="modal fade" id="hold_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hold Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="hold_ticket_id" id="hold_ticket_id" placeholder="" >
                            <span id="hold_ticket_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Hold Reason</label>
                            <textarea class="form-control" rows="5" id="hold_tickt_reason" name="hold_tickt_reason" maxlength="150" required="" onclick="input_remove_error_notification('hold_tickt_reason');"></textarea>
                            <span id="hold_tickt_reason_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="hold_ticket_model_box_save_button" value="hold" onclick="ticket_update('hold_ticket_id','hold_tickt_reason','hold_ticket_model_box_save_button','hold_ticket_model_box');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Observation ticket model box
-->
<div class="modal fade" id="observation_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Observation Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="observation_ticket_id" id="observation_ticket_id" placeholder="" >
                            <span id="observation_ticket_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Observation Reason</label>
                            <textarea class="form-control" rows="5" id="observation_ticket_reason" name="observation_ticket_reason" maxlength="150" required="" onclick="input_remove_error_notification('observation_ticket_reason');"></textarea>
                            <span id="observation_ticket_reason_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" value="observation" id="observation_ticket_model_box_save_button" onclick="ticket_update('observation_ticket_id','observation_ticket_reason','observation_ticket_model_box_save_button','observation_ticket_model_box');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Resolved ticket model box
-->
<div class="modal fade" id="resolved_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Resolved Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="resolved_ticket_id" id="resolved_ticket_id" placeholder="" >
                            <span id="resolved_ticket_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">Created on</label>
                            <input type="text" class="form-control" name="resolved_ticket_created_on" id="resolved_ticket_created_on" placeholder="" >
                            <span id="resolved_ticket_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Solution</label>
                            <textarea class="form-control" rows="5" id="resolved_ticket_reason" name="resolved_ticket_reason" maxlength="150" required="" onclick="input_remove_error_notification('resolved_ticket_reason');"></textarea>
                            <span id="resolved_ticket_reason_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" value="resolved" id="resolved_ticket_model_box_save_button" onclick="ticket_update('resolved_ticket_id','resolved_ticket_reason','resolved_ticket_model_box_save_button','resolved_ticket_model_box','resolved_ticket_created_on');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Delete ticket model box
-->
<div class="modal fade" id="delete_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 " hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="delete_ticket_id" id="delete_ticket_id" placeholder="" >
                            <span id="delete_ticket_id_check" class="help-block"></span>
                        </div>

                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Delete Reason</label>
                            <textarea class="form-control" rows="5" id="delete_ticket_reason" name="delete_ticket_reason" maxlength="150" required="" onclick="input_remove_error_notification('delete_ticket_reason');"></textarea>
                            <span id="delete_ticket_reason_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="delete_ticket_model_box_save_button" value="delete" onclick="ticket_update('delete_ticket_id','delete_ticket_reason','delete_ticket_model_box_save_button','delete_ticket_model_box');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Assign ticket model box
-->
<div class="modal fade" id="assign_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Assign Ticket</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 " hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="assignto_ticket_id" id="assignto_ticket_id" placeholder="" readonly="">
                            <span id="assignto_ticket_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Users List</label>
                            <select class="form-control" id="assignto_ticket_userlist" name="assignto_ticket_userlist" required="" onclick="input_remove_error_notification('assignto_ticket_userlist');">
                                <option value="<?php echo $_SESSION['user_uid']; ?>"><?php echo "Self" ?></option>
                                <?php
                                $query2 = "select id,firstname,accessid from tbl_users where accessid = '5' and id != " . $_SESSION['user_uid'] . "";

                                if ($result2 = $con->query($query2)) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                        ?>

                                        <option value="<?= $row2['id'] ?>"><?= $row2['firstname'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <span id="assignto_ticket_userlist_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" value="assign" id="assign_ticket_model_box_save_button" onclick="ticket_update('assignto_ticket_id','assignto_ticket_userlist','assign_ticket_model_box_save_button','assign_ticket_model_box');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--
    Ticket report model box
-->
<div class="modal fade" id="report_ticket_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ticket Report</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Category</label>
                            <input type="text" class="form-control" id="report_ticket_category" name="report_ticket_category" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Priority</label>
                            <input type="text" class="form-control" id="report_ticket_priority" name="report_ticket_priority" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Status</label>
                            <input type="text" class="form-control" id="report_ticket_status" name="report_ticket_status" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Time Taken [Minutes]</label>
                            <input type="text" class="form-control" id="report_ticket_time_taken" name="report_ticket_time_taken" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Created Time</label>
                            <input type="text" class="form-control" id="report_ticket_created_on" name="report_ticket_created_on" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Created By</label>
                            <input type="text" class="form-control" id="report_ticket_created_by" name="report_ticket_created_by" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Assignt By</label>
                            <input type="text" class="form-control" id="report_ticket_assigned_by" name="report_ticket_assigned_by" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Assigned To</label>
                            <input type="text" class="form-control" id="report_ticket_assigned_to" name="report_ticket_assigned_to" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Subject</label>
                            <input type="text" class="form-control" id="report_ticket_subject" name="report_ticket_subject" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" rows="5" id="report_ticket_description" name="report_ticket_description" maxlength="150" required="" readonly=""></textarea>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Hold Time</label>
                            <input type="text" class="form-control" id="report_ticket_hold_on" name="report_ticket_hold_on" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Hold Reason</label>
                            <textarea class="form-control" rows="5" id="report_ticket_hold_reason" name="report_ticket_hold_reason" maxlength="150" required="" readonly=""></textarea>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Observation Time</label>
                            <input type="text" class="form-control" id="report_ticket_observation_time" name="report_ticket_observation_time" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Observation Reason</label>
                            <textarea class="form-control" rows="5" id="report_ticket_observation_reason" name="report_ticket_observation_reason" maxlength="150" required="" readonly=""></textarea>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Resolved Time</label>
                            <input type="text" class="form-control" id="report_ticket_resolved_on" name="report_ticket_resolved_on" readonly="">
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Solution</label>
                            <textarea class="form-control" rows="5" id="report_ticket_resolved_reason" name="report_ticket_resolved_reason" maxlength="150" required="" readonly=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--
    Users Access Change model box
-->
<div class="modal fade" id="users_default_access_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Default Access</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 " hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="users_change_access_uid" id="users_change_access_uid" placeholder="" readonly="">
                            <span id="users_change_access_uid_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Access List</label>
                            <select class="form-control" id="users_change_access_name" name="users_change_access_name" required="" onchange="input_remove_error_notification('users_change_access_name');">
                                <option value=''>--Please Select--</option>
                                
                                <?php
                                $query2 = "SELECT tbl_users_access.users_accessid,tbl_users_access.access_name from tbl_users_access";
                                if ($result2 = $con->query($query2)) {
                                    while ($row2 = $result2->fetch_assoc()) {
                                        ?>

                                        <option value="<?= $row2['users_accessid'] ?>"><?= $row2['access_name'] ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                            <span id="users_change_access_name_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="users_default_access_model_box_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--Users Propery change model box's-->
<div class="modal modal-danger fade" id="users_property_change_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title">Are you sure..! You want to change user properties..?</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 " hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="user_property_id" id="user_property_id" placeholder="" readonly="">
                            <span id="user_property_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 " hidden="">
                            <label for="exampleInputEmail1">Action</label>
                            <input type="text" class="form-control" name="user_property_action" id="user_property_action" placeholder="" readonly="">
                            <span id="user_property_action_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="users_property_button" name="users_property_button">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!-- Delete model box -->
<div class="modal modal-danger fade" id="delete_model_box">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure..! You want to delete..?</h4>
              </div>
              <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="delete_id" id="delete_id" placeholder="" readonly="">
                            <span id="delete_id_check" class="help-block"></span>
                        </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="delete_row" name="delete_row">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!-- Delete domain model box -->
<div class="modal modal-danger fade" id="delete_model_box_domain">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure..! You want to delete..?</h4>
              </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="delete_id_domain" id="delete_id_domain" placeholder="" readonly="">
                            <span id="delete_id_check" class="help-block"></span>
                        </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">Domain</label>
                            <input type="text" class="form-control" name="domain" id="domain" placeholder="" readonly="">
                            <span id="delete_id_check" class="help-block"></span>
                        </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">Sub Domain</label>
                            <input type="text" class="form-control" name="sub_domain" id="sub_domain" placeholder="" readonly="">
                            <span id="delete_id_check" class="help-block"></span>
                        </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="delete_row_subdomain" name="delete_row_subdomain">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!--Delete Server Model box-->
<div class="modal modal-danger fade" id="delete_model_box_server">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure..! You want to delete..?</h4>
              </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="delete_id_server" id="delete_id_server" placeholder="" readonly="">
                            <span id="delete_id_server_check" class="help-block"></span>
                        </div>
                
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="delete_row_server" name="delete_row_server">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!--Server Renewal Model Box-->
<div class="modal fade" id="_server_renewed_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Renewed Domain</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="server_renewal_id" id="server_renewal_id" placeholder="" readonly="">
                            <span id="renewal_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Next Renewal Date [YYYY-MM-DD]</label>
                            <input type="text" class="form-control" id="server_next_renewal" name="server_next_renewal" value="<?php echo date("Y-m-d") ?>" onclick="input_remove_error_notification('next_renewal');">

                            <span id="server_next_renewal_check" class="help-block"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="renewed_model_box_server_save_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--SSL add domain model box-->
<div class="modal fade" id="add_domain_ssl_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Domain in SSL</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="add_domain_ssl_id" id="add_domain_ssl_id" placeholder="" readonly="">
                            <span id="add_domain_ssl_id_check" class="help-block"></span>
                        </div>
                         <div class="form-group col-md-6 " id="ssl_expiration_date_div" hidden="">
                            <label>Expiration Date [YYYY-MM-DD]<span class="required text-red">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="add_domain_ssl_expiration_date" name="add_domain_ssl_expiration_date" value="" required="" onkeyup="input_remove_error_notification('add_domain_ssl_expiration_date');">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                            <span id="add_domain_ssl_expiration_date_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label >Domain Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="add_domain_name_ssl" id="add_domain_name_ssl"  onkeyup="input_remove_error_notification('add_domain_name_ssl');">
                                    <span id="add_domain_name_ssl_check" class="help-block"></span>
                            
                        </div>
                         
                       
                      
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add_domain_ssl_save_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--Expired ssl product list--> 
<div class="modal modal-danger fade" id="expired_ssl_product_modal_box">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure..! You want to change Expired status..? </h4>
              </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="ssl_product_list_uid" id="ssl_product_list_uid" placeholder="" readonly="">
                            <span id="ssl_product_list_uid_check" class="help-block"></span>
                        </div>
                
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="expired_ssl_product_button" name="expired_ssl_product_button">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!--Change domain name in ssl-->
<div class="modal fade" id="change_ssl_domain_name_model_box_server">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Domain in SSL</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="change_ssl_domain_name_id" id="change_ssl_domain_name_id" placeholder="" readonly="">
                            <span id="change_ssl_domain_name_id_check" class="help-block"></span>
                        </div>
                         
                        <div class="form-group col-md-6 ">
                            <label >Domain Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="change_ssl_domain_name" id="change_ssl_domain_name"  onkeyup="input_remove_error_notification('add_domain_name_ssl');">
                                    <span id="change_ssl_domain_name_check" class="help-block"></span>
                            
                        </div>
                         
                       
                      
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="change_ssl_domain_name_save_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!-- Renewal for monthly. -->
<div class="modal fade" id="renewed_monthly_model_box">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Renewed Monthly</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="monthly_renewal_id" id="monthly_renewal_id" placeholder="" readonly="">
                            <span id="monthly_renewal_id_check" class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="exampleInputEmail1">Next Renewal Date [YYYY-MM-DD]</label>
                            <input type="text" class="form-control" id="monthly_next_renewal" name="monthly_next_renewal" value="<?php echo date("Y-m-d") ?>" onclick="input_remove_error_notification('monthly_next_renewal');">

                            <span id="monthly_next_renewal_check" class="help-block"></span>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="monthly_renewed_model_box_save_button">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!-- Delete monthly model box -->
<div class="modal modal-danger fade" id="delete_monthly_renewal_model_box">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Are you sure..! You want to Delete..? </h4>
              </div>
                <div class="form-group col-md-6" hidden="">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="delete_monthly_renewal_id" id="delete_monthly_renewal_id" placeholder="" readonly="">
                            <span id="delete_monthly_renewal_id_check" class="help-block"></span>
                        </div>
                
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" id="delete_monthly_save_button" name="delete_monthly_save_button">Yes</button>
                <button type="button" class="btn btn-outline" data-dismiss="modal">No</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>