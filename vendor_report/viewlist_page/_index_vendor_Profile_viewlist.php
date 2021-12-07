<?php
include '../../include/lib_page.php';
$sno = 0;
$sql = "SELECT * FROM `tbl_vendor` ORDER BY name ASC";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_array(MYSQLI_BOTH)) {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td>
                <a href="../edit_vendor/edit_vendor_profile?id=<?php echo encrypt($row[0]); ?> "><i class="fa fa-edit"></i></a>
                <a  data-toggle="modal" data-target="#delete_model_box" onclick="$('#delete_id').val('<?php echo $row[0]; ?>')"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php
    }
}
mysqli_close($conn);
?>  