<?php
$name = $_GET['name'];

$known = array("Rohit","Virat","Dhoni","Ashwin","Harbhajan");

if($name == "") {
    echo "Stranger, please tell me your name!";
} else {
    if(in_array($name, $known)) {
        echo "Hello, master " . $name . "!";
    } else {
        echo $name . ", I don't know you!";
    }
}
?>