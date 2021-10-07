<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT tbl_domain.id,tbl_domain.type,tbl_domaintype.id,tbl_domaintype.domaintype,tbl_domain.domainname,tbl_domain.host,tbl_domain.point_to,tbl_domain.domain_status from tbl_domain INNER JOIN tbl_domaintype on tbl_domaintype.id = tbl_domain.type and tbl_domain.type != '1' and tbl_domain.domain_status = '1'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[5]; ?></td>
            <td><?php echo $row[6]; ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li> <a href="../edit_domain/edit_subdomain_records?id=<?php echo encrypt($row[0]); ?>">Edit</a></li>
                        <li><a  data-toggle="modal" data-target="#delete_model_box_domain" 
                                onclick="
                                        $('#delete_id_domain').val('<?php echo $row[0]; ?>');
                                         $('#domain').val('<?php echo $row[4]; ?>');
                                        $('#sub_domain').val('<?php echo $row[5]; ?>');
                                            ">
                                       
                                Delete</a></li>
<!--                        <li><a href="index_delete_subdomain?id=<?php echo encrypt($row[0]); ?>&domain=<?php echo encrypt($row[5]); ?>&subdomain=<?php echo encrypt($row[6]); ?>">Delete</a></li>-->
                    </ul>
                </div> 
            </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>
  