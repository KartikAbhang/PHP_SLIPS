<?php
$file = fopen("contact.dat", "r");

echo "<table border='1'>";
echo "<tr><th>SrNo</th><th>Name</th><th>Res No</th><th>Mobile</th><th>Address</th></tr>";

while(($line = fgets($file)) != false) {
    $data = explode(",", $line);

    echo "<tr>";
    echo "<td>".$data[0]."</td>";
    echo "<td>".$data[1]."</td>";
    echo "<td>".$data[2]."</td>";
    echo "<td>".$data[3]."</td>";
    echo "<td>".$data[4]."</td>";
    echo "</tr>";
}

echo "</table>";

fclose($file);
?>