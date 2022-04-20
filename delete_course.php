<?php
include('connection.php');
$id = $_GET['course'];
$query = "DELETE FROM courses WHERE id=$id";
$row = mysqli_fetch_array(mysqli_query($conn, $query));
header('location:admin_courses.php');
?>