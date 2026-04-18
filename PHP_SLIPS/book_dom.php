<?php
// Create DOM object
$doc = new DOMDocument("1.0", "UTF-8");

// Format output (optional but good)
$doc->formatOutput = true;

// Root element <BookInfo>
$root = $doc->createElement("BookInfo");
$doc->appendChild($root);

// -------- Book 1 --------
$book1 = $doc->createElement("book");

$book1->appendChild($doc->createElement("bookno", "1"));
$book1->appendChild($doc->createElement("bookname", "JAVA"));
$book1->appendChild($doc->createElement("authorname", "Balguru Swami"));
$book1->appendChild($doc->createElement("price", "250"));
$book1->appendChild($doc->createElement("year", "2006"));

$root->appendChild($book1);

// -------- Book 2 --------
$book2 = $doc->createElement("book");

$book2->appendChild($doc->createElement("bookno", "2"));
$book2->appendChild($doc->createElement("bookname", "C"));
$book2->appendChild($doc->createElement("authorname", "Denis Ritchie"));
$book2->appendChild($doc->createElement("price", "500"));
$book2->appendChild($doc->createElement("year", "1971"));

$root->appendChild($book2);

// Save XML file
$doc->save("Book.xml");

// Optional message
echo "XML file created successfully";
?>