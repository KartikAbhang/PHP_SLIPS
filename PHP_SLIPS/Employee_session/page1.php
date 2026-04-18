<?php
session_start();
?>

<form action="page2.php" method="post">
    Employee No: <input type="text" name="eno" required><br><br>
    Employee Name: <input type="text" name="ename" required><br><br>
    Address: <input type="text" name="address" required><br><br>

    <input type="submit" value="Next">
</form>