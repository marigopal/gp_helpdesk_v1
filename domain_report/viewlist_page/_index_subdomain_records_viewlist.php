<?php
include '../../include/lib_page.php';
$sno = 0;
if (!empty($_POST['filter'])) {
    $filter = decrypt($_POST['filter']);
    $and = "and tbl_domain.domainname = '$filter'";
} else {
    $and = "";
}
$sql = "SELECT tbl_domain.id,tbl_domain.type,tbl_domaintype.id,tbl_domaintype.domaintype,tbl_domain.domainname,tbl_domain.host,tbl_domain.point_to,tbl_domain.domain_status from tbl_domain INNER JOIN tbl_domaintype on tbl_domaintype.id = tbl_domain.type and tbl_domain.type != '1' and tbl_domain.domain_status = '1' $and";

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
                <a href="../edit_domain/edit_subdomain_records?id=<?php echo encrypt($row[0]); ?>"><i class="fa fa-edit"></i></a>
                <a  data-toggle="modal" data-target="#delete_model_box_domain" onclick="
                                $('#delete_id_domain').val('<?php echo $row[0]; ?>');
                                $('#domain').val('<?php echo $row[4]; ?>');
                                $('#sub_domain').val('<?php echo $row[5]; ?>');
                    "><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
    }
}
mysqli_close($con);
?>