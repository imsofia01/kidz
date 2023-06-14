<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit-no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/board.css">
    
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<a href="home-page.php">
                     
<button type="submit" class="btn btn-primary "> Home </button>

</a>
<body class ="bggs" style="margin: 50px;">
     <h1> Leaderboard </h1>
     <br>
     <form action="" method="GET">
     <div class="input-group mb-3">
    <input type="text" name ="search" id="search"<?php if(isset($_GET['search'])){echo $_GET['search'];}?> class="form-control" placeholder="Search">
     <button type="submit" class="btn btn-dark "> Search</button>
    </div>
     <table class="table" id="urTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th> Time </th>
                <th>Difficulty </th>
                <th> Action </th>
            </tr>

            
            
            
</body>
</html>

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
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo
      "<tr>
       <td>".$row["id"]. "</td>
       <td>". $row["username"]."</td>
       <td>". $row["time"]."</td>
       <td>".$row["difficulty"]."</td>
       <td>
            <a class='btn btn-primary btn-sm' href='delete'> Delete </a>
        </td>
      </tr>";
    }
    echo "</table>";
  } else {
    if(isset($_GET['search'])) {
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM gamescore WHERE CONCAT(username,time,difficulty) LIKE '%$filtervalues%' ";
        $query_num = mysqli_query($conn,$query);

        
    }    
    echo "0 results";
  }
    $conn->close();

    $response = array('message' => 'Hello from PHP!');
    echo json_encode($response);

?>

<!-- Javascript -->
<script type="text/javascript">



const seachInput = document.getElementById("#seach");
const rows = document.querySelectorAll("table, tr, th");
console.log(rows);

seachInput.addEventListener('keyup',function(event) {
    // console.log(event);

});

rows.forEach(function(row) {
    const cells = row.querySelectorAll('tr');
    let found = false;
    cells.forEach(function(cell) {
      const text = cell.innerText.toLowerCase();
      if (text.indexOf(searchTerm) > -1) {
        found = true;
      }
    });
    if (found) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
  
const data = ['$sql'];

const searchTerm = ['tr, td'];

const filteredData = data.filter(function(item) {
    return item.name.toLowerCase().includes(searchTerm.toLowerCase());
  });
  
  console.log(filteredData);

</script>