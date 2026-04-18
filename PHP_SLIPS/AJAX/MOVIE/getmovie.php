<?php
$conn = pg_connect("host=localhost dbname=test user=postgres password=postgres");

$name = $_GET['aname'];

$sql = "SELECT m.mno, m.mname, m.release_year 
        FROM actor a, movie m 
        WHERE a.ano = m.ano AND a.aname='$name'";

$result = pg_query($conn, $sql);

echo "<table border='1'>";
echo "<tr><th>Movie No</th><th>Name</th><th>Year</th></tr>";

while($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['mno']."</td>";
    echo "<td>".$row['mname']."</td>";
    echo "<td>".$row['release_year']."</td>";
    echo "</tr>";
}

echo "</table>";
?>