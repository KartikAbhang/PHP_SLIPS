<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$name = $_GET['tname'];

$sql = "SELECT * FROM teacher WHERE tname='$name'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "Teacher No: " . $row['tno'] . "<br>";
echo "Name: " . $row['tname'] . "<br>";
echo "Qualification: " . $row['qualification'] . "<br>";
echo "Salary: " . $row['salary'];
?>