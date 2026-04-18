<?php
$q = $_GET['q'];

$names = array("Ram","Shyam","Amit","Rohit","Rahul","Ramesh","Suresh","Akash","Ankit");

$hint = "";

if($q != "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach($names as $name) {
        if(strtolower(substr($name,0,$len)) == $q) {
            if($hint == "") {
                $hint = $name;
            } else {
                $hint .= ", " . $name;
            }
        }
    }
}

if($hint == "") {
    echo "No suggestion";
} else {
    echo $hint;
}
?>