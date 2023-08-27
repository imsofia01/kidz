<?php

// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "config/database.php";


if (isset($_POST['username']) || isset($_POST['edad']) || isset($_POST['kasarian']) || isset($_POST['petsa'])  )
 {
    $username = $_POST['username'];
    $edad = $_POST['edad'];
    $kasarian = $_POST['kasarian'];
    $petsa = $_POST['petsa'];
    // Validate and convert the input date
    $parsedDate = date_parse($petsa);

 if ($parsedDate['error_count'] === 0 && checkdate($parsedDate['month'], $parsedDate['day'], $parsedDate['year'])) {
   $validDate = $parsedDate['year'] . '-' . str_pad($parsedDate['month'], 2, '0', STR_PAD_LEFT) . '-' . str_pad($parsedDate['day'], 2, '0', STR_PAD_LEFT);


// Create the SQL INSERT query
$sql = "INSERT INTO gamescore (username, edad, kasarian, petsa) VALUES ('$username', '$edad', '$kasarian', '$petsa')";
$result = mysqli_query($conn,$sql);

if (!$result) {
  echo "Error inserting user information: " . mysqli_error($conn);
}
 }
}
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="css/dragStyle.css">
    <title>MyGame - Enter Your Name</title>
</head>
<body>

    <form action="drag.php" class="saveName" method="POST" onsubmit="saveQuizResults()">
    <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="form text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Pangalan</h2>
              <p class="text-white-50 mb-5">Ilagay ang iyong Pangalan!</p>
                 <!-- Input for Pangalan (Name) -->
                <div class="form-input-material form-white mb-2">
                  <label for="username" class="form-label text-white">Pangalan:</label>
                  <input type="text" name="username" id="username" class="form-control" required>
                </div>
                
                <!-- Input for Edad (Age) -->
                <div class="form-input-material form-white mb-2">
                  <label for="edad" class="form-label text-white">Edad:</label>
                  <input type="number" name="edad" id="edad" class="form-control" required>
                </div>
                
                <!-- Select for Kasarian (Gender) -->
                <div class="form-input-material form-white mb-2">
                  <label for="kasarian" class="form-label text-white">Kasarian:</label>
                  <select name="kasarian" id="kasarian" class="form-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                
                <!-- Input for Petsa (Date) -->
                <div class="fform-input-material form-white mb-2">
                  <label for="petsa" class="form-label text-white">Date:</label>
                  <input type="date" name="petsa" id="petsa" class="form-control" required>
                </div>
                
                <button class="btn btn-outline-light btn-lg px-8 mb-2" onclick="next()" type="submit" name="submit" value="submit">Isave</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</div>