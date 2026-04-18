<?php
session_start();
?>

<form action="page2.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Address: <input type="text" name="addr" required><br><br>
    Mobile No: <input type="text" name="mob" required><br><br>

    <input type="submit" value="Next">
</form>