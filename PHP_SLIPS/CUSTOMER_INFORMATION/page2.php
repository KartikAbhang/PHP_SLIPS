<?php
session_start();

// Store customer info in session
$_SESSION['name'] = $_POST['name'];
$_SESSION['addr'] = $_POST['addr'];
$_SESSION['mob'] = $_POST['mob'];
?>

<form action="page3.php" method="post">
    Product Name: <input type="text" name="pname" required><br><br>
    Quantity: <input type="number" name="qty" required><br><br>
    Rate: <input type="number" name="rate" required><br><br>

    <input type="submit" value="Generate Bill">
</form>