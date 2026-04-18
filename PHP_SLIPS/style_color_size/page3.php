<?php
// Get values from cookies
$font = $_COOKIE['font'];
$size = $_COOKIE['size'];
$color = $_COOKIE['color'];
$bgcolor = $_COOKIE['bgcolor'];
?>

<html>
<body style="background-color: <?php echo $bgcolor; ?>;">

<p style="
    font-family: <?php echo $font; ?>;
    font-size: <?php echo $size; ?>;
    color: <?php echo $color; ?>;
">
    This is your customized web page!
</p>

</body>
</html>