<?php
session_start();

// Customer info
$name = $_SESSION['name'];
$addr = $_SESSION['addr'];
$mob = $_SESSION['mob'];

// Product info
$pname = $_POST['pname'];
$qty = $_POST['qty'];
$rate = $_POST['rate'];

// Calculate total
$total = $qty * $rate;
?>

<h2>Customer Bill</h2>

<h3>Customer Details</h3>
<?php
echo "Name: $name <br>";
echo "Address: $addr <br>";
echo "Mobile No: $mob <br>";
?>

<h3>Product Details</h3>
<?php
echo "Product Name: $pname <br>";
echo "Quantity: $qty <br>";
echo "Rate: $rate <br>";
echo "<b>Total Amount: $total</b>";
?>