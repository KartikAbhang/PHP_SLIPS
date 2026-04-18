<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Valid User";
} else {
    echo "Invalid User";
}
?>