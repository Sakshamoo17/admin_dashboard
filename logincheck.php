<?php
session_start();
include "db.php";

$user_email = trim($_POST['user_email']);
$user_password = trim(mysqli_real_escape_string($con, $_POST['user_password']));

$query_chk = "select * from admin where admin_email='$user_email' and admin_password='$user_password'";
$exe_chk = mysqli_query($con, $query_chk);


if (mysqli_num_rows($exe_chk) == 1) {

    $_SESSION['admin_email'] = $user_email;
    echo "<script> window.location.href='view_company.php' </script>";
}
else {
    echo "<script> alert('Invalid Username or Password') </script>";
    echo "<script> window.location.href='index.html' </script>";

}

?>
