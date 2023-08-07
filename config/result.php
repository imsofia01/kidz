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

// if (isset($_POST['total_tanong']) || isset($_POST['total_attempts']) || isset($_POST['total_correct'])  )
//  {
//     $total_tanong = $_POST['total_tanong'];
//     $total_attempts = $_POST['total_attempts'];
//     $total_correct = $_POST['total_correct'];
    

// // Create the SQL INSERT query
// $Sname = "INSERT INTO player_name WHERE (total_tanong, total_attempts, total_correct) VALUES ('$total_tanong', '$total_attempts', '$total_correct')";
// $Dataresult = mysqli_query($conn,$Sname);



}
?>
