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

$sql = "SELECT id, username, edad, kasarian FROM gamescore";
$result = mysqli_query($conn, $sql);


$sql = "SELECT id, username, edad, kasarian, total_tanong, total_attempts, total_correct, total_wrong, percentage, puntos FROM player_name";
$result = mysqli_query($conn, $sql);



// function getResutl()


    // $conn->close();
?>



