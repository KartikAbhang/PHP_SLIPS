<?php
$xml = new SimpleXMLElement('<students/>');

$student = $xml->addChild('student');
$student->addChild('roll', '1');
$student->addChild('name', 'Ram');
$student->addChild('address', 'Pune');
$student->addChild('college', 'ABC College');
$student->addChild('course', 'BCA');

$student = $xml->addChild('student');
$student->addChild('roll', '2');
$student->addChild('name', 'Shyam');
$student->addChild('address', 'Mumbai');
$student->addChild('college', 'XYZ College');
$student->addChild('course', 'BBA');

$student = $xml->addChild('student');
$student->addChild('roll', '3');
$student->addChild('name', 'Amit');
$student->addChild('address', 'Nashik');
$student->addChild('college', 'PQR College');
$student->addChild('course', 'BCA');

$xml->asXML("student.xml");

echo "XML File Created";
?>