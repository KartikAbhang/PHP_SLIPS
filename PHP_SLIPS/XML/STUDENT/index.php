<html>
<body>

<form method="post">
Enter Course: <input type="text" name="course">
<input type="submit" value="Show">
</form>

<?php
if(isset($_POST['course'])) {

    $course = $_POST['course'];

    $xml = simplexml_load_file("student.xml");

    echo "<table border='1'>";
    echo "<tr><th>Roll</th><th>Name</th><th>Address</th><th>College</th><th>Course</th></tr>";

    foreach($xml->student as $s) {
        if($s->course == $course) {
            echo "<tr>";
            echo "<td>".$s->roll."</td>";
            echo "<td>".$s->name."</td>";
            echo "<td>".$s->address."</td>";
            echo "<td>".$s->college."</td>";
            echo "<td>".$s->course."</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}
?>

</body>
</html>