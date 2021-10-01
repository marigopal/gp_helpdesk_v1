<section class="content-header">
    <div class="row">
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Completed</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='3'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("3") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>

                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-blue-gradient"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Inprogress</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='1'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("1") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>

                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Assigned</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='2'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("2") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>

                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Hold</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='6'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("6") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua-gradient"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Observation</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='5'";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("5") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-black-gradient"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Deleted</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_helpdesk where  `created_by`=" . $_SESSION['user_uid'] . " and status_id ='4'";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>

                                <a class="" href="/helpdesk_report/index_page/index?filter=<?= encrypt("4") ?>"> <?php echo $row["Countr"]; ?></a>

                                <?php
                            }
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>