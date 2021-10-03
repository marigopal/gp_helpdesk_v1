<?php
include('../../include/lib_page.php');
$user = $_SESSION['user_uid'];
$category = $_POST['category'];
$priority = $_POST['priority'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$ticket_id = strtoupper (uniqid("GP"));
$current_date_time = date('Y-m-d H:i:s');
$img = $_FILES['image']['name'];
if ($img != '') {
    $tmp = $_FILES['image']['tmp_name'];
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    $file_basename = substr($img, 0, strripos($img, '.'));
    $file_ext = substr($img, strripos($img, '.'));
    $unique_name = uniqid();
    $newfilename = $unique_name . $file_ext;
    $filesize = $_FILES["image"]["size"];
    $allowed_file_types = array('.docx', '.rtf', '.pdf', '.jpg', '.DOCX', '.xlsx', '.XLSX', '.JPG');
    if (in_array($file_ext, $allowed_file_types) && ($filesize < 5000000)) {
        if (file_exists("uploads/" . $newfilename)) {
            echo '<script>alert("You have already uploaded this file")</script>';
        } else {
            move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $newfilename);
//            echo '<script>alert("File uploaded successfully.")</script>';
        }
        insert();
    } elseif ($filesize > 5000000) {
        echo '<script>alert("The file you are trying to upload is too large.")</script>';
    } else {
        echo "<script>
                     alert('Invalid File formats. Please select docx,rtf, pdf,jpg, xlsx');
                     window.location.href='/helpdesk_report/create_ticket.php';
                    </script>";
        unlink($_FILES["name"]["tmp_name"]);
    }
} else {

    insert();
}
function insert() {
    global $category;
    global $priority;
    global $subject;
    global $description;
    global $user;
    global $newfilename;
    global $con;
    global $current_date_time;
    global $ticket_id;
    $query = "INSERT INTO `tbl_helpdesk`(`ticket_id`,`category_id`, `priority_id`, `subject`, `description`, "
            . "`created_by`, `created_on`, `status_id`, `screenshot_name`) VALUES ('$ticket_id','$category','$priority','$subject','$description',"
            . "'$user','$current_date_time','1','$newfilename')";
    if ($result = $con->query($query)) {
        echo "<script>
                alert('Ticket Added Successfully');
                window.location.href=' /helpdesk_report/index';
                </script>";
    } else {
        echo '<script>alert("Something went wrong")</script>';
        header("Location: /home/index");
    }
}
?>