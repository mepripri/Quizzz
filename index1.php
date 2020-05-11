<?php
 session_start();
 $user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <meta name="description" content="Awesome App Template built with Bootstrap Framework and Paperkit for creating App Landing Pages by TemplateFlip.com"/>
    <link href="https://fonts.googleapis.com/css?family=Dosis:600|Roboto:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/paper-kit.css?v=2.1.0" rel="stylesheet">
    <link href="header/styles/main.css" rel="stylesheet">   
  </head>
  <body id="top">
    <header>
      <div class="aa-header">
        <nav class="navbar navbar-expand-md navbar-transparent">
          <div class="container"><a class="navbar-brand px-0 py-0" style="font-size: 40px;font-family: 'Dosis', 'Helvetica', Arial, sans-serif;"; href="index1.php">Quizzes</a>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index1.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="cricket.php">Quizzes</a></li>
                <li class="nav-item"><a class="nav-link" href="score.php">Scores</a></li>
                <li class="nav-item"><a class="btn btn-outline-neutral btn-round" href="logout.php"><?php echo $user; ?></a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container aa-header-content text-left text-white">
          <div class="row">
            <div class="col-md-5 col-sm-12">
              <h1 class="text-white mb-4">HOW CAN YOU LIFT AN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELEPHANT<br/>&nbsp;&nbsp;&nbsp;&nbsp;WITH ONE HAND?</h1>
              <br><br>
              <p style="font-size: 20px;">We've got all the quizzes you love to binge! Come on in and <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hunker down for the long haul.</p></br></br>
              </ul><a class="mt-4 btn btn-outline-neutral btn-round" href="#features">Start Exploring</a>
            </div>
            <div class="col-md-6 col-sm-13 text-right"><img class="img-fluid" src="header/images/cartoon-elephant-cliparts-5.jpg" alt="Image" style="height: 400px;width: 500px;"></div>
          </div>
        </div>
      </div>
    </header>
<div class="container" id="features">
</div>
</br></br>
<div class="container">
  <hr/>
</div>
<div class="aa-product-features section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12"><br><br><img class="img-fluid" src="istockphoto-177427917-612x612.jpg" alt="Image" style="border-radius: 20px" /></div>
      <div class="col-md-5 col-sm-12"><br>
        <h2 class="title mb-2">Cricket Buzz</h2>
        <p class="pt-2" style="color: black;font-size: 17px">The game of cricket doesn’t need an introduction. It is indeed one of the widely played and watched sports in the world. The largest fanbase of this sport lies in the Indian subcontinent, Australia, West Indies, several European countries, and of course, England. If you’re a cricket fan, this quiz is for you. From the most popular cricketing events to the ones a bit vague, this quiz involves questions about everything cricket. Find out if your love for the sport reflects in your knowledge!</p>
        <a class="mt-4 btn btn-outline-neutral btn-round" href="http://localhost/ProjectPHPPri/cricket.php" style="color: black;border-color: black;">Start Game</a>  
      </div>
    </div>
  </div>
</div>
</br></br>
<div class="container">
  <hr/>
</div></br></br>
<div class="aa-product-features section" style="background-image: url('header/images/home-image.jpg');";>
  <div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12"><br>
        <h2 class="title mb-2" style="color: white">Graphics Trivial</h2>
        <p class="pt-2" style="color: white;font-size: 17px">Can You Pass The Easiest Computer Graphics Trivia Questions? This quiz is perfect for someone who has just begun learning about computer graphics and wants to see just how much knowledge they have gathered. If you are one of those people, be sure to give it a try and keep an eye out for other quizzes like this to increase your knowledge.</p>
        <a class="mt-4 btn btn-outline-neutral btn-round" href="cricket.html">Start Game</a> 
      </div>
      <div class="col-md-5 col-sm-12"><img class="img-fluid" src="header/images/1568276969.jpg" alt="Image" style="border-radius: 20px;height: 300px;width: 600px;" /></div>
    </div>
  </div>
</div>
</br></br>
<div class="container"  >
  <hr/>
</div></br>
<div class="aa-product-features section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-12"><br><img class="img-fluid" src="header/images/1563512916.jpg" alt="Image" style="border-radius: 20px;height: 230px;width: 500px;" /></div>
      <div class="col-md-5 col-sm-12">
        <h2 class="title mb-2">The World Facts Quiz!</h2>
        <p class="pt-2" style="color: black;font-size: 17px">Below is a quiz with a difference that is aimed to teach you some facts about the world in general and those in it. Not only will you get to understand some of the cultures, but you will also get to learn a thing or two that most people don’t know about some countries. Go down this learning trip and remember to share the quiz with others.</p>
        <a class="mt-4 btn btn-outline-neutral btn-round" href="cricket.html" style="color: black;border-color: black;">Start Game</a>
      </div>
    </div>
  </div>
</div>
    <footer class="footer-black aa-footer">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-md-12"><a class="btn btn-link btn-neutral" href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-ui-1.12.1.custom.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/paper-kit.js?v=2.1.0"></script>
    <script src="header/scripts/main.js"></script>
  </body>
</html>