<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "select tbl_domain.id, tbl_domain.created_on,tbl_domain.vendor,tbl_vendor.id,tbl_vendor.name,tbl_domain.account,tbl_account.id,tbl_account.username,tbl_domain.type,tbl_domaintype.id,tbl_domaintype.domaintype,tbl_domain.domainname,tbl_domain.expiredate,tbl_domain.domain_autorenewal,tbl_autorenewal.id,tbl_autorenewal.autorenewal,tbl_domain.domain_status,tbl_domainstatus.id,tbl_domainstatus.status,tbl_domain.remarks from tbl_domain INNER JOIN tbl_vendor on tbl_vendor.id = tbl_domain.vendor INNER JOIN tbl_account on tbl_account.id = tbl_domain.account INNER JOIN tbl_domaintype on tbl_domaintype.id = tbl_domain.type INNER JOIN tbl_autorenewal on tbl_autorenewal.id = tbl_domain.domain_autorenewal INNER JOIN tbl_domainstatus on tbl_domainstatus.id = tbl_domain.domain_status and tbl_domain.domain_status = '1' and tbl_domain.type ='1'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[10]; ?></td>
            <td>
                <a href="/domain_report/index_page/index_sub_records?id=<?php echo encrypt($row[11]); ?>"><?php echo $row[11]; ?></a>
            </td>
            <td><?php echo $row[12]; ?></td>
            <td><?php echo $row[15]; ?></td>
            <td><?php echo $row[18]; ?></td>
            <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a  data-toggle="modal" data-target="#renewed_model_box"
                                        onclick="
                                                $('#renewal_id').val('<?= $row[0]; ?>')
                                                $('#next_renewal').val('<?= $row['expiredate'] ?>');
                                        ">Renewed</a></li>
                                        <li><a href="../edit_domain/edit_primary_domain?id=<?php echo encrypt($row[0]); ?>">Edit</a></li>
                                        <li><a  data-toggle="modal" data-target="#delete_model_box_domain" 
                                onclick="
                                        $('#delete_id_domain').val('<?php echo $row[0]; ?>');
                                         $('#domain').val('<?php echo $row[11]; ?>');
                                        $('#sub_domain').val('<?php echo $row[12]; ?>');
                                            ">
                                       
                                Delete</a></li>
                                        <!--<li><a href="../db_page/_delete_primary_domain?id=<?php echo encrypt($row[0]); ?> &domain=<?php echo encrypt($row[11]); ?>">Delete</a></li>-->
                            </ul>
                        </div> 
                    </td>
        </tr>
        <?php
    }
} mysqli_close($con);
?>
  