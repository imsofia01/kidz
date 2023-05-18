<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/design.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "scores";

// Create connection
$conn =  new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, time, difficulty FROM gamescore";
    $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo 
    "<table <tbody><tr><th>ID</th><th>Username</th><th>Time</th><th>Difficulty</th></tbody></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<br><br>
      <tr><td>".$row["id"].
      "</td><td>". $row["username"].
      "</td><td>". $row["time"].
      "</td><td>".$row["difficulty"].
      "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

    $conn->close();
?>

<script src="script.js"></script>


