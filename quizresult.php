<?php

  require_once('config/database.php');
  require_once('config/result.php');
  // for table to insert results quiz
  // require_once('sample.php');
  
  $query = "SELECT * FROM player_name";
  $result = mysqli_query($conn,$query);

//   if (isset($_POST['total_tanong']) || isset($_POST['total_attempts']) || isset($_POST['total_correct']) || isset($_POST['total_wrong']) || isset($_POST['percentage']) )
//   {
//      $total_tanong = $_POST['total_tanong'];
//      $total_attempts = $_POST['total_attempts'];
//      $total_correct = $_POST['total_correct'];
//      $total_wrong = $_POST['total_wrong'];
//      $percentage = $_POST['percentage'];
 
//  // Create the SQL INSERT query
//  $result = "INSERT INTO player_name WHERE (total_tanong, total_attempts, total_correct, total_wrong, percentage) VALUES ('$total_tanong', '$total_attempts', '$total_correct', '$total_wrong', '$percentage')";
//  $data = mysqli_query($conn,$result);
 
//  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/result.css">
    
    <title>Pagsusulit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<a href="home-page.php">
                     
<button type="submit" class="btn btn-primary "> Home </button>

</a>
<body class ="bg-dark" style="margin: 50px;">
  <h1> Talaan ng Nangunguna </h1>
    <br>

<form action="" method="GET">
  <div class="input-group mb-3">
    <input type="text" name ="search" id="search"<?php if(isset($_GET['search'])){echo $_GET['search'];}?> class="form-control" placeholder="Search">
     <button type="submit" class="btn btn-secondary "> Search</button>
      </div>
        <table class="table table-bordered text-center" id="urTable">
          <tr class="bg-secondary text-white"> 
            <th>Pangalan</th>
            <th> Edad</th>
            <th> Kasarian </th>
            <th> Bilang ng Tanong </th>
            <th> Tangka </th>
            <th> Tamang sagot </th>
            <th> Maling sagot </th>
            <th> Percentage </th>
            <th> Puntos </th>
            <th> alisin </th>
        </tr> 
      <tr>
    <?php
         while ($row = mysqli_fetch_assoc($result)) 
        {
      ?>

    <td> <?php echo $row['username'];?> </td>
    <td> <?php echo $row['edad'];?> </td>
    <td> <?php echo $row['kasarian'];?> </td>
    <td> <?php echo $row['total_tanong'];?> </td>
    <td> <?php echo $row['total_attempts'];?> </td>
    <td> <?php echo $row['total_correct'];?> </td>
    <td> <?php echo $row['total_wrong'];?> </td>
    <td> <?php echo $row['percentage'];?> </td>
    <td> <?php echo $row['puntos'];?> </td>
    <td> <a href="#" class="btn btn-danger"> Alisin </a> </td>
                  
    </tr>  
    <?php                    
    }

  // header("location: sample.php");
            
  ?> 

            
</body>
</html>