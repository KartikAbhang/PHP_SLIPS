<?php
// Get values from cookies
$eno = $_COOKIE['eno'];
$ename = $_COOKIE['ename'];
$address = $_COOKIE['address'];
// Get earnings
$basic = $_POST['basic'];
$da = $_POST['da'];
$hra = $_POST['hra'];
// Calculate total
$total = $basic + $da + $hra;
?>
<h2>Employee Information</h2>
<?php
echo "Employee No: " . $eno . "<br>";
echo "Employee Name: " . $ename . "<br>";
echo "Address: " . $address . "<br><br>";

echo "Basic: " . $basic . "<br>";
echo "DA: " . $da . "<br>";
echo "HRA: " . $hra . "<br>";
echo "<b>Total Salary: " . $total . "</b>";
?>