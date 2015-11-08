<?php
	session_start();
	
	if(isset($_SESSION['user'])){
		include "connectdb.php";

	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/photo.jpg">

    <title>Questionnaire</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
  
  <div class="container">
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="home.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
              <li ><a href="#">About <span class="glyphicon glyphicon-info-sign"></span></a></li>
              <li><a href="#">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="ranklist.php?id=1">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>

              <?php 
              	if(isset($_SESSION['user'])){
              ?>
              <li><a href="logout.php">Log Out&nbsp;<b><?php echo "(".$_SESSION['user'].")";?></b> <span class="glyphicon glyphicon-off"></span></a></li>
              <?php 
              	}
              	else{
              ?>
              	<li><a href="index.php">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
              	<li><a href="registration.php">Sign up <span class="glyphicon glyphicon-user"></span></a></li>
              <?php
              	}
              ?>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
		<div style="background: #10bbf1" class="jumbotron">
			<font color="white"><h1 align="center">Welcome to Questionnaire</h1><br>
			<?php if(isset($_SESSION['user'])){
					$rollno=$_SESSION['user'];
					$query="select user from feedback where user=$rollno";
					$result = mysqli_query($con,$query);
					$rows=mysqli_num_rows($result);
					if($rows==0){
			?>
			<h1 align="center"><a href="start.php" class="btn btn-lg btn-primary" >Start Test</a></h1>
			<?php
					}else{?>
			<h1 align="center"><a href="ranklist.php?id=1" class="btn btn-lg btn-primary" >See Ranklist</a></h1>
			<?php

					}
				}else{
			?>
			<div class="rows">
				<div class="col-lg-12" style="height:100px"></div>
			</div>
			<div class="rows">
						<div class="col-lg-4"> </div>
  						<div class="col-lg-2">
  							<a href="index.php" class="submit btn btn-primary btn-lg btn-block" name="submit">Sign In</a>

  						</div>
  						<div class="col-lg-2">
  						<a href="registration.php" class="btn btn-lg btn-primary btn-block" name="signup" >Sign up</a>
  						</div>
  						<div class="col-lg-4"></div>
  			
  					
  						
  			</div>
  			<div class="rows">
				<div class="col-lg-12" style="height:100px"></div>
			</div>
			<?php
				}
			?>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
				<h3><ul class="nav navbar-nav navbar-right">
						<li><a class="page-scroll" href="#info"><font color="black">Info &nbsp;</font></a></li>
						<li><a class="page-scroll" href="#rules"><font color="black">Rules &nbsp;</font></a></li>
						<li><a class="page-scroll" href="#scoring"><font color="black">Scoring </font></a></li>
					</ul>
				</h3>	
			</div>
			
			</font>
		
		</div> <!-- jumbotron-->
		<section id="info">
		<div style="background: #10f1f1" class="jumbotron">
			<h1 align="center"> Info <h1>
		<p>
		Questionnaire is a CMS(content management system) where we can organize online tests.<br\>
		
		</p>
		</div>
		</section>
		<section id="rules">
		<div style="background: #10f1aa" class="jumbotron">
			<h1 align="center"> Rules <h1>
		<p><h4>
		<ul type="disk">
			<li>Please refrain from discussing strategy during the contest.</li><br>
			<li>You can participate only once in test.</li><br>
			<li>Test contains 30 questions.</li><br>
			<li>You will have 60 minutes to complete your test.</li><br>
			<li>Questionnaire admins decision will be final.</li>
		</ul>
		</h4>
		</p>
		</div>
		</section>
		<section id="scoring">
		<div style="background: #f1a1a1" class="jumbotron">
			<h1 align="center"> Scoring <h1>
			<p><h4>
			<ul type="disk">
				<li>Eery questions contains equal points.</li><br>
				<li>No penality for wrong answers.</li><br>
				<li>Questionnaire admins decision will be final.</li>
			</ul>
			</h4></p>
		</div>
		</section>
	</div><!--  container -->	
</body>
</html>
