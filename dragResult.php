<?php

  require_once('config/dragDatabase.php');
//   require_once('config/result.php');

  // Function to get names based on search query
  function getNamesBySearch($conn, $searchQuery) {
  $escapedSearchQuery = mysqli_real_escape_string($conn, $searchQuery);
  $query = "SELECT * FROM gamescore WHERE username LIKE '%$searchQuery%'";
  $result = mysqli_query($conn, $query);
  return $result;

  if(isset($_POST['search'])) {
    $searchQuery = $_POST['search'];
    $result = getNamesBySearch($conn, $searchQuery);

    while ($row = mysqli_fetch_assoc($result)) {
        // Generate table rows using the retrieved data
    }
} else {
    $query = "SELECT * FROM gamescore";
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/result.css">
    <title>Pagsusulit</title>

    <script src="js/search.js"></script>

</head>
<a href="home-page.php" class="btn purple">Home</a>
</div>
<body class ="bg" style="margin: 50px;">
<br>
<br>
<br>
</div>
  <h1> Talaan ng Nangunguna </h1>
    <form action="dragDelete.php" method="post">
  <div class="input-group mb-3">
    <input type="text" name ="search" id="search"<?php echo isset($searchQuery) ? $searchQuery : ''; ?> class="form-control" placeholder="Search">
      </div>
      <div class="container">
      <button type="submit" class="btn btn-danger"><i ></i>Tanggalin </button>
      
      <div class="table-responsive">
        <table class="rwd-table table-bordered text-center">
          <tr class="bg-secondary text-white"> 
            <thead>
            <th> alisin </th>
            <th>Pangalan</th>
            <th> Edad</th>
            <th> Kasarian </th>
            <th> Petsa </th>
            <th> tamang Sagot </th>
            <th> maling Sagot </th>
            <th> total </th>
            <th> Percentage </th>
            
            </thead>
            <tbody id="myTable">
        </tr> 
      <tr>
    <?php
      $query = "SELECT * FROM gamescore ORDER BY username DESC"; // Ordering by 'puntos' column in descending order
      $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) 
        { 
      ?>
<td> <input type="checkbox" value="<?php echo $row['ID']; ?>" name="ID[]"> </td>
    <td > <?php echo $row['username'];?> </td>
    <td> <?php echo $row['edad'];?> </td>
    <td> <?php echo $row['kasarian'];?> </td>
    <td> <?php echo $row['petsa'];?> </td>
    <td> <?php echo $row['tamangSagot'];?> </td>
    <td> <?php echo $row['malingSagot'];?> </td>
    <td> <?php echo $row['total'];?> </td>
    <td> <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $row['percentage']; ?>%;" aria-valuenow="<?php echo $row['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $row['percentage']; ?>%</div>
            </div></td>
    
               
    </tr>  
    
    <?php                    
    }
            
  ?> 
</table>
</form>


</div>
            
</body>
</html>