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

<div class="sidebar">
        <a class="logo-menu">
        <img src="pics/kidss.png" width="170" height="90" style="margin-right: 20px;"> </a>
        
            <a class="active" href="index.php"> <span class="fa fa-home"> </span>  Home</a>
            <a href="video.php"> <span class="fa fa-video-camera"> </span>  2D Video Lesson</a>
            <a href="assess.php"><span class="fa fa-folder"> </span> Assessment</a>
            <a href="server.php"><span class="fa fa-trophy"> </span> Leaderboard</a>
        </div>
     </div>
</div>

        <div class="player">
        <h1> PLAY  </h1>
        
        <body onload="main()">
        <div id="menuitems">
        <div id="menu">
            <div id="controls">
                <div id="box">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                Difficulty <select id="difficulty" onchange="setDifficulty()">
                    <option value="easy"> Easy </option>
                    <option value="medium"> Medium </option>
                    <option value="hard"> Hard </option>
                </select>
                
                <button class="btn btn-dark" onclick="Restart()"> Start </button>
 
    <div id="endScreen">
        <div id="scoreValue"></div>
        <input type="text" id="name" placeholder="your name"></input>
        <button class="btn btn-dark" onclick="saveScore()" id="saveBtn"> Save </button>
            <br>
            <br>
            <button class="btn btn-dark" onclick="showScores()"> Scores </button>
            <button class="btn btn-dark" onclick="showMenu"> Menu </button>   

    <div id="scoreScreen">
        <div id="scoreContainer"></div>
        <br>
        <button class="btn btn-dark" onclick="closeScore()"> Back </button>

        </div>
        </div>
    </div>
 </div>
</div>
</div>
</body>
</html>

