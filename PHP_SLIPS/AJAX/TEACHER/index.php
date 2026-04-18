<html>
<head>
<script>
function showTeacher(str) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "getteacher.php?tname=" + str, true);
    xhttp.send();
}
</script>
</head>

<body>

<h2>Select Teacher</h2>

<select onchange="showTeacher(this.value)">
    <option value="">Select Name</option>
    <option value="Anil">Anil</option>
    <option value="Sunil">Sunil</option>
    <option value="Ravi">Ravi</option>
</select>

<br><br>

<div id="data"></div>

</body>
</html>