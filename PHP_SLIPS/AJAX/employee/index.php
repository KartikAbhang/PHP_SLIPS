<html>
<head>
<script>
function showEmp(str) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "getemp.php?ename=" + str, true);
    xhttp.send();
}
</script>
</head>

<body>

<h2>Select Employee</h2>

<select onchange="showEmp(this.value)">
    <option value="">Select Name</option>
    <option value="Ram">Ram</option>
    <option value="Shyam">Shyam</option>
    <option value="Amit">Amit</option>
</select>

<br><br>

<div id="data"></div>

</body>
</html>