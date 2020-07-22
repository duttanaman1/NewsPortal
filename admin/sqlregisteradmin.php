<?php
include("includes/config.php");
$name = $_POST['name'];
$pass = $_POST['password'];
if (mysqli_query($con, "INSERT INTO tbladmin values(null,'$name','$pass','myemail@mail.com',2,null,null)")) {
    header("location:http://localhost/newsportal/admin/superadmin.php");
}
