<?php
require_once __DIR__ . "/Models/Movie.php";

$Wonder = new Movie("Wonder", "Drammatico", 90);
var_dump($Wonder);

$Reptile = new Movie("Reptile", "Thriller", 120);
var_dump($Reptile);

$Nowhere = new Movie("Nowhere", "Thriller", 110);
var_dump($Nowhere);