<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="stylesheet" href="css/game.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>2D INTERACTIVE</title>
</head>
<body class="bg">
<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <h2> <a class="logo-menu">
        <img src="pics/logo.png" width="180" height="180" > </a></h2>
    </div>
    <ul class="sidebar-nav">
      <li class="active">
        <a class="active" href="home-page.php"> <span class="fa fa-home"> </span>  Home</a>
      </li>
  
      <li>
        <a href="video.php"> <span class="fa fa-video-camera"> </span>  2D VIDEO LESSON</a>
      </li>
      <li>
        <a href="assess.php"><span class="fa fa-folder"> </span>  ASSESSMENT</a>
      </li>
        <li>
        <a href="quizresult.php"><span class="fa fa-trophy"> </span>  LEADERBOARD</a>
      </li>
    </ul>
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </nav>
  </div>

<div class="content-box"> 
<main class="container">
  <br>
  <div class="article">
        <div class="game py-5">
            <h1> Mga Pagsusulit</h1>
            <a href="savenames.php" class="square_btn">Tanong </a>         
          
       
        <!-- <a href="play.php">
            <button type="submit" class="btn btn-dark "> Play </button>
        </a> -->

         
        <a href="dragPlay.php" class="square_btn">Drag Pictures</a>              
            

            </main>
    </div>
</body>

<script> 
const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper');

$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');
});
</script>
</html>

