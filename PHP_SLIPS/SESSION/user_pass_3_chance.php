<?php
session_start();
$cusername="admin";
$cpassword="admin123";

if(!isset($_SESSION['attempts']))
    {
        $_SESSION['attempts']=0;
    }
    if(isset($_POST['login']))
        {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username==$cusername && $password==$cpassword)
            {
            echo "<h2>Welcome, $username!</h2>";
            echo "<p>Login Successful</p>";

            $_SESSION['attempts']=0;
            }
            else{
                $_SESSION['attempts']++;
        
        if ($_SESSION['attempts'] < 3) {
            echo "<p style='color:red;'>Invalid Username or Password</p>";
            echo "<p>Attempts left: " . (3 - $_SESSION['attempts']) . "</p>";
        } else {
            echo "<p style='color:red;'>Too many failed attempts. Access Denied.</p>";
        }
    }
}
?>
<!-- Login Form -->
<?php if ($_SESSION['attempts'] < 3) { ?>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>
<?php } ?>