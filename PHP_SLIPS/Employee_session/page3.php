<?php
session_start();

// Get earnings
$basic = $_POST['basic'];
$da = $_POST['da'];
$hra = $_POST['hra'];

// Calculate total
$total = $basic + $da + $hra;
?>

<h2>Employee Information</h2>

<?php
echo "Employee No: " . $_SESSION['eno'] . "<br>";
echo "Employee Name: " . $_SESSION['ename'] . "<br>";
echo "Address: " . $_SESSION['address'] . "<br><br>";

echo "Basic: " . $basic . "<br>";
echo "DA: " . $da . "<br>";
echo "HRA: " . $hra . "<br>";
echo "<b>Total Salary: " . $total . "</b>";
?>