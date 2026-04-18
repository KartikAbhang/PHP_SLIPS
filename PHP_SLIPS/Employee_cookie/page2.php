<?php
// Store employee details in cookies (valid for 1 day)
setcookie("eno", $_POST['eno'], time()+86400);
setcookie("ename", $_POST['ename'], time()+86400);
setcookie("address", $_POST['address'], time()+86400);
?>

<form action="page3.php" method="post">
    Basic: <input type="number" name="basic" required><br><br>
    DA: <input type="number" name="da" required><br><br>
    HRA: <input type="number" name="hra" required><br><br>

    <input type="submit" value="Show Details">
</form>