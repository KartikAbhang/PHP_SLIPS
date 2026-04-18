<?php
// Store values in cookies (1 day)
setcookie("font", $_POST['font'], time()+86400);
setcookie("size", $_POST['size'], time()+86400);
setcookie("color", $_POST['color'], time()+86400);
setcookie("bgcolor", $_POST['bgcolor'], time()+86400);
?>

<h2>Saved Preferences:</h2>

<?php
echo "Font: " . $_POST['font'] . "<br>";
echo "Size: " . $_POST['size'] . "<br>";
echo "Font Color: " . $_POST['color'] . "<br>";
echo "Background Color: " . $_POST['bgcolor'] . "<br>";
?>

<br>
<a href="page3.php">Go to Page 3 (Apply Settings)</a>