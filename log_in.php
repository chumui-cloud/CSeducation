<?php
include('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM user WHERE email='$email'";
echo $query;
$result = mysqli_query($conn, $query);
if ($result) {
    $row = mysqli_fetch_array($result);
    if ($password = $row['password']) {
        if ($row['type'] = 'admin') {
            header('location:admin_profile.php');
        } else {
            header('location:profile.php');
        }
    } else {
        echo "invalid password !";
    }
} else echo "Invalid Email !";
