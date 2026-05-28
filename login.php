<?php
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost","root","","edunext");
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
echo "Login success";
?>
