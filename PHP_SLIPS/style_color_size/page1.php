<?php
// Form to accept user preferences
?>

<form action="page2.php" method="post">
    Font Style:
    <select name="font">
        <option value="Arial">Arial</option>
        <option value="Verdana">Verdana</option>
    </select><br><br>

    Font Size:
    <select name="size">
        <option value="20px">20px</option>
        <option value="30px">30px</option>
    </select><br><br>

    Font Color:
    <input type="color" name="color"><br><br>

    Background Color:
    <input type="color" name="bgcolor"><br><br>

    <input type="submit" value="Save Preferences">
</form>