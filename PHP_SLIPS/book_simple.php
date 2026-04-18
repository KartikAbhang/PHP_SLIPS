<?php
// Create XML root element
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><BookInfo/>');

// -------- Book 1 --------
$book1 = $xml->addChild('book');
$book1->addChild('bookno', '1');
$book1->addChild('bookname', 'JAVA');
$book1->addChild('authorname', 'Balguru Swami');
$book1->addChild('price', '250');
$book1->addChild('year', '2006');

// -------- Book 2 --------
$book2 = $xml->addChild('book');
$book2->addChild('bookno', '2');
$book2->addChild('bookname', 'C');
$book2->addChild('authorname', 'Denis Ritchie');
$book2->addChild('price', '500');
$book2->addChild('year', '1971');

// Save XML file
$xml->asXML('Book.xml');

// Optional message
echo "XML file created successfully";
?>