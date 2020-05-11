<?php
	session_start();
	if(!isset($_SESSION['user']))
	{
		echo "<script>if(confirm('Please Login First')){window.location.href='login.html';}else{window.location.href='index.html';}</script>";
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
   button
   {
        background-color:black;
		    font-size:25px;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
    		color:white;
    		padding:2px 2px;
    		border-radius:100px;
    		border:4px solid black;
    		width:300px;
    		text-align:center; 
        margin-left:40%;
   }
  *{
        box-sizing: border-box;
   }
   body 
   {
        font-family: Arial;
        font-size: 17px;
        background-color:rgb(173,255,47);
   }
   .container
   {
        position: relative;
        width: 1200px;
        margin-left:300px;
        margin-top:15px;
   }
   .container img 
   {
        height:730px;
        vertical-align: middle;
   }
   .container .content 
   {
        position: absolute;
        bottom: 0;
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
   }
</style>
</head>
<body>
<div class="container">
  <img src="istockphoto-177427917-612x612.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1><pre>CRICKET                               Total Questions:10</h1>
    <p>
            Immensely popular in England, Australia, India, and many other British Commonwealth countries, the sport of cricket is a way of life for many people. Thought to have originated as far back as the 13th century, cricket has a long history and a literacy all its own. This quiz highlights some of the more obscure and humorous aspects of a game that is notoriously difficult to explain to the uninitiated. Test your knowledge and see how much you know about this historic sport.
    </p>
    <button><a href="q1.php" style="text-decoration:none;color:white;font-size:40px;">Start</a></button>
  </div>
</div>
</body>
</html>