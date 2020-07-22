<?php
include('includes/config.php');
$path_filename_ext1 = "";
if ($_POST['submit'] != null) {
    if (($_FILES['image']['name'] != "")) {

        $target_dir = "../images/";
        $file = $_FILES['image']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['image']['tmp_name'];
        $path_filename_ext1 = $target_dir . $filename . "." . $ext;


        if (file_exists($path_filename_ext1)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name, $path_filename_ext1);
        }
    }

    $title = $_POST['title'];
    $loc = $_POST['loc'];
    $url = $_POST['url'];
    $desp = $_POST['desp'];
    $image = "http://localhost/newsportal/images/" . $filename . "." . $ext;
    if (mysqli_query($con, "INSERT INTO ads_tbl VALUES(null,'$title','$url','$desp','$image','$loc')")) {
        header("location:http://localhost/newsportal/admin/addadvertisment.php");
    } else {
        echo "ERROR";
    }
}
