<?php

function openConnection() {
// Try to figure out what these should be for you
$dbhost    = "localhost";
$dbuser    = "Gebruiker1";
$dbpass    = "Wachtwoord1!";
$db        = "becode";

// Try to understand what happens here
$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
return $pdo;
}
