<?php

  require_once('config/database.php');
  require_once('config/result.php');

  // Function to get names based on search query
  function getNamesBySearch($conn, $searchQuery) {
  $query = "SELECT * FROM player_name WHERE username LIKE '%$searchQuery%'";
  $result = mysqli_query($conn, $query);
  return $result;

  if(isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
    $result = getNamesBySearch($conn, $searchQuery);

    while ($row = mysqli_fetch_assoc($result)) {
        // Generate table rows using the retrieved data
    }
} else {
    $query = "SELECT * FROM player_name";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        // Generate table rows using the retrieved data
    }
}
}

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
    <button type="submit" class="button-27" role="button"> home</button>
        </a>


<body class ="bg" style="margin: 50px;">
  <h1> Talaan ng Nangunguna </h1>
    <br>

    <form action="deleteQresult.php" method="post">
  <div class="input-group mb-3">
    <input type="text" name ="search" id="search"<?php if(isset($_GET['search'])){echo $_GET['search'];}?> class="form-control" placeholder="Search">
     <button type="submit" class="btn btn-secondary "> Search</button>
      </div>
      <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Delete</button>
        <table class="table table-bordered text-center" id="urTable">
          <tr class="bg-secondary text-white"> 
          <th> alisin </th>
            <th>Pangalan</th>
            <th> Edad</th>
            <th> Kasarian </th>
            <th> Bilang ng Tanong </th>
            <th> Tangka </th>
            <th> Tamang sagot </th>
            <th> Maling sagot </th>
            <th> Percentage </th>
            <th> Puntos </th>
           
        </tr> 
      <tr>
    <?php
     $query = "SELECT * FROM player_name";
     $result = mysqli_query($conn,$query);
         while ($row = mysqli_fetch_assoc($result)) 
        {
      ?>
<td> <input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]"> </td>
    <td> <?php echo $row['username'];?> </td>
    <td> <?php echo $row['edad'];?> </td>
    <td> <?php echo $row['kasarian'];?> </td>
    <td> <?php echo $row['total_tanong'];?> </td>
    <td> <?php echo $row['total_attempts'];?> </td>
    <td> <?php echo $row['total_correct'];?> </td>
    <td> <?php echo $row['total_wrong'];?> </td>
    <td> <?php echo $row['percentage'];?>%</td>
    <td> <?php echo $row['puntos'];?> </td>
  
                  
    </tr>  
    <?php                    
    }
    
  // header("location: sample.php");
            
  ?> 
</table>
</form>
            
</body>
</html>



