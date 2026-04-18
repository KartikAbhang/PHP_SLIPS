<?php
// Load XML file
$xml = simplexml_load_file("Book.xml");

// Check if file loaded
if ($xml == false) {
    echo "Error loading XML file";
    exit();
}

// Loop through each book
foreach ($xml->book as $b) {

    echo "Book No: " . $b->bookno . "<br>";
    echo "Book Name: " . $b->bookname . "<br>";
    echo "Author: " . $b->authorname . "<br>";
    echo "Price: " . $b->price . "<br>";
    echo "Year: " . $b->year . "<br>";

    // If attributes exist (optional)
    foreach ($b->attributes() as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    echo "<hr>";
}
?>