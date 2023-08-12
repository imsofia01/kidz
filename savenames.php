<?php

// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include_once "config/database.php";


if (isset($_POST['username']) || isset($_POST['edad']) || isset($_POST['kasarian'])  )
 {
    $username = $_POST['username'];
    $edad = $_POST['edad'];
    $kasarian = $_POST['kasarian'];

// Create the SQL INSERT query
$sql = "INSERT INTO player_name (username, edad, kasarian) VALUES ('$username', '$edad', '$kasarian')";
$result = mysqli_query($conn,$sql);

if (!$result) {
  echo "Error inserting user information: " . mysqli_error($conn);
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
    <link rel="stylesheet" href="css/save.css">
    <title>MyGame - Enter Your Name</title>
</head>
<body>

    <form action="sample.php" class="saveName" method="POST" onsubmit="saveQuizResults()">
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="form text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Pangalan</h2>
              <p class="text-white-50 mb-5">Isulat ang iyong Pangalan!</p>

         
              <div class="form-outline form-white mb-4">

              <label for="username">Pangalan:</label>
              <input type="text" name="username" id="username" required>
              </div> 

              <div class="form-outline form-white mb-4">
              <label for="edad">Edad:  </label>
              <input type="number" name="edad" id="edad" required>
              </div> 

              <div class="form-outline form-white mb-4">
              <label for="kasarian">Kasarian</label>
              <select name="kasarian" id="kasarian">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
              </select>
              </div> 

              <button class="btn btn-outline-light btn-lg px-5" onclick="next()" type="submit" name="submit"  value="submit">Isave</button>
              <form action="sample.php" method="POST">
            </form>
            </div>
           

          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
  </div>
</div>

<script type="text/javascript">




</script>

    
</body>
</html>
