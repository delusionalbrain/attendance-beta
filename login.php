<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_db";

//estalbish a connection
$conn = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = md5($_POST['password']); #md5 hashing use kia hai isilie varchar 200+set kia varna password ki limit galat arri

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: attendancepage.html");
    exit();
} else {
    echo "Invalid username or password. ;) guess nhi kar pae lagta hai hehe";
}

//close connection
$conn->close();
?>
