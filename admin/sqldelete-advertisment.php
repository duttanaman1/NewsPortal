<?php
include('includes/config.php');
if ($_POST['submit'] != null) {
    $id = $_POST['id'];
    if (mysqli_query($con, "DELETE FROM ads_tbl WHERE ad_id=$id")) {
        header("location:http://localhost/newsportal/admin/deleteadvertisment.php");
    } else
        echo "ERROR";
}
