<section class="content-header">
    <div class="row">
        <div class="col-md-2 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"></span>
                <div class="info-box-content">
                    <span class="info-box-text">Live</span>
                    <span class="info-box-number">
                        <?php

                        $sql = "select Count( * ) Countr, status_id FROM tbl_users where  status_id ='1'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/users_report/index_page/index?filter=<?= encrypt("1") ?>"> <?php echo $row["Countr"]; ?></a>

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
                    <span class="info-box-text">Disabled</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_users where  status_id ='3'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/users_report/index_page/index?filter=<?= encrypt("3") ?>"> <?php echo $row["Countr"]; ?></a>

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
                    <span class="info-box-text">Deleted</span>
                    <span class="info-box-number">
                        <?php
                        $sql = "select Count( * ) Countr, status_id FROM tbl_users where  status_id ='2'";

                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <a class="" href="/users_report/index_page/index?filter=<?= encrypt("2") ?>"> <?php echo $row["Countr"]; ?></a>

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