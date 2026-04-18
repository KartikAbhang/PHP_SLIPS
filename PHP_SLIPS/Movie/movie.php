<?php
// Load XML file
$doc = new DOMDocument();
$doc->load("Movie.xml");

// Get all Movie nodes
$movies = $doc->getElementsByTagName("Movie");

// Loop through each movie
foreach ($movies as $movie) {

    $title = $movie->getElementsByTagName("MovieTitle")->item(0)->nodeValue;
    $actor = $movie->getElementsByTagName("ActorName")->item(0)->nodeValue;

    echo "Movie Title: " . $title . "<br>";
    echo "Actor Name: " . $actor . "<br>";
    echo "<hr>";
}
?>