<?php
$conn = mysqli_connect("localhost", "root", "", "test");

$name = $_GET['cname'];

$sql = "SELECT * FROM customer c, orders o 
        WHERE c.cno = o.cno AND c.cname='$name'";

$result = mysqli_query($conn, $sql);

echo "<table border='1'>";
echo "<tr><th>Order No</th><th>Date</th><th>Address</th></tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['ono']."</td>";
    echo "<td>".$row['odate']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "</tr>";
}

echo "</table>";
?>