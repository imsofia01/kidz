<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "scores";

// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed");
}

$sql = "SELECT id, username, edad, kasarian, petsa, tamangSagot, malingSagot, total FROM gamescore";
$result = mysqli_query($conn, $sql);


?>