<?php
 session_start();
  if(!isset($_SESSION['user']))
  {
    echo "<script>if(confirm('Please Login First')){window.location.href='login.html';}else{window.location.href='index.html';}</script>";
  }
  else
  {
     $user=$_SESSION['user'];
     $con=mysqli_connect("localhost","root","","signup") or die('Unable To connect');
     $res=mysqli_query($con,"SELECT * FROM signtab WHERE username='$user'");
     while($row=mysqli_fetch_array($res))
     {
          $score=$row["score"];
     }
  }
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
          <div class="container py-2"><a class="navbar-brand px-0 py-0" style="font-size: 40px;font-family: 'Dosis', 'Helvetica', Arial, sans-serif;"; href="index1.php">Quizzes</a>
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
        <div class="container py-6 aa-header-content text-left text-white">
          <div class="row">
            <div class="col-md-5 col-sm-12">
              <h1 class="text-white mb-4" style="font-size: 60px;">YOUR SCORE IS: <?php echo $score; ?></h1>
              <p style="font-size: 50px;"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($score<5){echo "Well Tried!!!";}else{echo "Well Done!!!";}?><br></p>
            </div>
            <div class="col-md-6 col-sm-12 text-right"><img class="img-fluid" src="header/images/cartoon-elephant-cliparts-5.jpg" alt="Image" style="height: 400px;width: 500px;"></div>
          </div>
        </div>
      </div>
    </header>
    <footer class="footer-black aa-footer">
      <div class="container py-3">
        <div class="row text-center">
          <div class="col-md-12"><a class="btn btn-link btn-neutral" href="https://www.facebook.com/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="btn btn-link btn-neutral" href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></div>
        </div>
      </div>
    </footer>
  </body>
  </html>