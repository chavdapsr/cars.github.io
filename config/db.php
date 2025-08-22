<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "carmafia"; // Correct: database name only, no .sql
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>