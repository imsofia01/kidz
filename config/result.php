<?php

// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "config/database.php";

  

  function getAllscore($formData, $conn) {
    $total_tanong = $formData["total_tanong"];
    $total_attempts = $formData["total_attempts"];
    $total_correct = $formData["total_correct"];
    $total_wrong = $formData["total_wrong"];
    $percentage = $formData["percentage"];

    $sql = "INSERT INTO player_name (total_tanong, total_attempts, total_correct, total_wrong, percentage) VALUES ('$total_tanong', '$total_attempts', '$total_correct', '$total_wrong', '$percentage')";
    
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
}
?>
