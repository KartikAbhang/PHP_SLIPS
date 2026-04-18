<?php
session_start();

// Store employee details in session
$_SESSION['eno'] = $_POST['eno'];
$_SESSION['ename'] = $_POST['ename'];
$_SESSION['address'] = $_POST['address'];
?>

<form action="page3.php" method="post">
    Basic: <input type="number" name="basic" required><br><br>
    DA: <input type="number" name="da" required><br><br>
    HRA: <input type="number" name="hra" required><br><br>

    <input type="submit" value="Show Details">
</form>