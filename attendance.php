<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$date = $_POST['date'];
$status = $_POST['status'];
$user_id = 1; 

$sql = "INSERT INTO attendance (user_id, date, status) VALUES ('$user_id', '$date', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "Attendance recorded successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
