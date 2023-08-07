<?php
// Start a PHP session to store data across pages
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Process the form data here
// Create connection
$host = "localhost";
$username = "root";
$password = "";
$database = "scores";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "connected";
}

if (isset($_POST['total_tanong']) || isset($_POST['total_attempts']) || isset($_POST['total_correct']) || isset($_POST['total_wrong']) || isset($_POST['percentage']) )
 {
    $total_tanong = $_POST['total_tanong'];
    $total_attempts = $_POST['total_attempts'];
    $total_correct = $_POST['total_correct'];
    $total_wrong = $_POST['total_wrong'];
    $percentage = $_POST['percentage'];

// Create the SQL INSERT query
$result = "INSERT INTO player_name WHERE (total_tanong, total_attempts, total_correct, total_wrong, percentage) VALUES ('$total_tanong', '$total_attempts', '$total_correct', '$total_wrong', '$percentage')";
$data = mysqli_query($conn,$result);

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
  <link rel="stylesheet" href="css/game.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
  <title>2D INTERACTIVE</title>
</head>
<body class="bg">

<form action="quizresult.php" class="results" id="formData" method="POST">
        <div class="result-box custom-box">
            <h1> Assessment Result </h1>
            <table>
                <tr>
                    <td> <label for="total_tanong"> Bilang ng Tanong </label> </td>
                    <td><span class="total-tanong" <?php echo isset($_POST['total_tanong']) ? htmlspecialchars($_POST['total_tanong']) : ''; ?> name="total_tanong"></span> </td>
                </tr>
                <tr>
                    <td> <label for="total_attempts"> Tangka</label></td>
                    <td><span class="total-attempt" <?php echo isset($_POST['total_attempts']) ? htmlspecialchars($_POST['total_attempts']) : ''; ?> name="total_attempts"></span> </td>
                </tr>
                <tr>
                    <td> <label for="total_correct"> Tamang sagot</label> </td>
                    <td><span class="total-correct" <?php echo isset($_POST['total_correct']) ? htmlspecialchars($_POST['total_correct']) : ''; ?> name="total_correct"></span> </td>
                </tr>
                <tr>
                    <td> <label for="total_wrong"> Maling sagot </label>  </td>
                    <td><span class="total-wrong" <?php echo isset($_POST['total_wrong']) ? htmlspecialchars($_POST['total_wrong']) : ''; ?>name="total_wrong"></span> </td>
                </tr>
                <tr>
                    <td> <label for="percentage"> Percentage </label> </td>
                    <td><span class="percentage" <?php echo isset($_POST['percentage']) ? htmlspecialchars($_POST['percentage']) : ''; ?> name="percentage"></span> </td>
                </tr>
                <tr>
                    <td> Kabuuang sagot </td>
                    <td><span class="total-puntos"> </span></td>
                </tr> 
            </table>
            <button type="button" class="btn" onclick="tryAgain()"> Subukan Ulit </button>
            <button type="button" class="btn" onclick="backHome()"> Home </button>
            <button type="submit" class="btn" onclick="submit()"> Save </button>
            <form action="quizresult.php" id="formData" method="POST">   
        </div>
</body>
<script src="js/script.js"></script>
<script src="js/images.js"></script>
</html>

