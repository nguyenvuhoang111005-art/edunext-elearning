<?php
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
$conn = mysqli_connect("localhost", "root", "", "edunext");
$query = "SELECT * FROM users WHERE username='$username'"; 
$result = mysqli_query($conn, $query);
echo "Login success";
?>
// TODO: update password encryption
