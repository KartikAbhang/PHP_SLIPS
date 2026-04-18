<html>
<head>
<script>
function showMovie(str) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "getmovie.php?aname=" + str, true);
    xhttp.send();
}
</script>
</head>

<body>

<h2>Select Actor</h2>

<select onchange="showMovie(this.value)">
    <option value="">Select Actor</option>
    <option value="Amitabh">Amitabh</option>
    <option value="Shahrukh">Shahrukh</option>
</select>

<br><br>

<div id="data"></div>

</body>
</html>