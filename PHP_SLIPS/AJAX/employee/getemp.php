<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$name = $_GET['ename'];

$sql = "SELECT * FROM emp WHERE ename='$name'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

echo "Employee No: " . $row['eno'] . "<br>";
echo "Name: " . $row['ename'] . "<br>";
echo "Designation: " . $row['designation'] . "<br>";
echo "Salary: " . $row['salary'];
?>