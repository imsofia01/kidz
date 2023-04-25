<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body class="bg">

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-primary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            
                <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="home-page.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-white">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="video.php" class="nav-link px-0">  <span class="d-none d-sm-inline text-white"> Lesson</span> </a>
                            </li>
                            <li>
                                <a href="assess.php" class="nav-link px-0"> <span class="d-none d-sm-inline text-white"> Assessment </span> </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="server.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-white">Leaderboard</span> </a>
                    </li>
                </ul>
                <hr>
                
            </div>
        </div>
        <div class="col py-3">
            <h3>GAMES </h3>
            
        <body onload="main()">
      
    <div id="menuitems">
        <div id="menu">
            <div id="controls">
               
                <br>
                <br>
                Difficulty <select id="difficulty" onchange="setDifficulty()">
                    <option value="easy"> Easy </option>
                    <option value="medium"> Medium </option>
                    <option value="hard"> Hard </option>
                </select>
                
                <button onclick="Restart()"> Start </button>
            </div>
        </div>
    </div>

    <div id="endScreen">
        <div id="scoreValue"></div>
        <input type="text" id="name" placeholder="your name"></input>
        <button onclick="saveScore()" id="saveBtn"> Save </button>
            <br>
            <br>
            <button onclick="showScores()"> Scores </button>
            <button onclick="showMenu"> Menu </button>   
</div>
    <div id="scoreScreen">
        <div id="scoreContainer"></div>
        <br>
        <button onclick="closeScore()"> Back </button>

</body>
</html>

