<!--Renewal model box-->
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
                            <input type="text" class="form-control" id="next_renewal" name="next_renewal" value="<?php echo date("Y-m-d") ?>">

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
<!--Show Password model box-->
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
<!--Observation ticket model box-->
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
<!--Resolved ticket model box-->
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
                <button type="button" class="btn btn-primary" value="resolved" id="resolved_ticket_model_box_save_button" onclick="ticket_update('resolved_ticket_id','resolved_ticket_reason','resolved_ticket_model_box_save_button','resolved_ticket_model_box');">Save changes</button>
                <span id="success_done" class="help-block"></span>
            </div>
        </div>
    </div>
</div>
<!--Delete ticket model box-->
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
<!--Assign ticket model box-->
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


