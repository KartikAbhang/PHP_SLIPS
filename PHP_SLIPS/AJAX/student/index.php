<html>
<head>
<script>
function checkUser() {
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("msg").innerHTML = this.responseText;
        }
    };

    xhttp.open("POST", "check.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("uname=" + uname + "&pass=" + pass);
}
</script>
</head>

<body>
<h2>Login</h2>

Username: <input type="text" id="uname"><br><br>
Password: <input type="password" id="pass"><br><br>

<button onclick="checkUser()">Login</button>

<p id="msg"></p>

</body>
</html>