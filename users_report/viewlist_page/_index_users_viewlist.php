<?php
include '../../include/db_config.php';
include('../../include/encryption_function.php');
$sno = 0;
$sql = "";
$result = $con->query($sql);
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_array(MYSQLI_BOTH)) 
    {
        ?>	
        <tr>
            <td><?= ++$sno; ?></td>
            <td hidden=""><?php echo $row[0]; ?></td>
            <td><?php echo $row[4]; ?></td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[10]; ?></td>
            <td>
                <a href="index_subdomain?id=<?php echo $row[11]; ?>"><?php echo $row[11]; ?></a>
            </td>
            <td><?php echo $row[12]; ?></td>
            <td><?php echo $row[15]; ?></td>
            <td><?php echo $row[18]; ?></td>
            <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose<span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a  data-toggle="modal" data-target="#renewed_popup"
                                        onclick="
                                            $('#u_id').val('<?= $row[0]; ?>');
                                            $('#next_renewal').val('<?= $row['expiredate'] ?>');
                                        ">Renewed</a>
                                </li>
                                <li><a href="edit_domain?id=<?php echo $row[0]; ?>">Edit</a></li>
                                <li><a href="index_delete_domain?id=<?php echo encrypt($row[0]); ?> &domain=<?php echo encrypt($row[11]); ?>">Delete</a></li>
                            </ul>
                        </div>
            </td>
        </tr>
        <?php
    }
} 
//else 
//{
//    echo '<span style="color:blue;text-align:center;">There is no users available in or databases..!</span>';
//}
mysqli_close($con);
?>
  