<html>
<head>
<script>
function showOrder(str) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            document.getElementById("data").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "getorder.php?cname=" + str, true);
    xhttp.send();
}
</script>
</head>

<body>

<h2>Select Customer</h2>

<select onchange="showOrder(this.value)">
    <option value="">Select Name</option>
    <option value="Ram">Ram</option>
    <option value="Shyam">Shyam</option>
</select>

<br><br>

<div id="data"></div>

</body>
</html>