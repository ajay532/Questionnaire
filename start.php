<?php
	session_start();
	if(isset($_GET['submit'])){
		if(isset($_GET['accept'])){
			header("location: main.php?data=1");
			$_SESSION['start']=1;
		}
		else
			$error="plese check the box";
	}
	if(isset($_SESSION['user'])){
		include "connectdb.php";
		$rollno=$_SESSION['user'];
		$query="select user from feedback where user=$rollno";
		$result = mysqli_query($con,$query);
		$rows=mysqli_num_rows($result);
		if($rows==1){
			header("location: home.php");
		}
	}


?>


<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/photo.jpg">

    <title>Questionnaire</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--link href="css/navbar.css" rel="stylesheet"-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="js/ie-emulation-modes-warning.js"></script><style type="text/css"></style-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
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
              <li><a href="home.php">Home <span class="glyphicon glyphicon-home"></a></li>
              <li ><a href="#">About <span class="glyphicon glyphicon-user"></span></a></li>
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

      <div class="jumbotron">
      	<h1> Instructions</h1>
      	<ol type=1>
      		<li>You will get 30 secs for each question.</li>
      		<li>Along with it you have to complete it within 30 minutes.</li>
      		<li>Multiple choice questions will be provided along with four options which include only one correct option.</li>
      		<li>Any type of paragalism will lead you to disqualification.</li>
      		<li>You have to give test in one shot, you can't take brake in between the test.</li>
      		<li>Time will start as soon as you accept this instructions.</li>
      		<li>Best of luck!!! See you in Ranklist.</li>
      		
      	</ol>
      	<form class="form" action="#" method="GET">
      		<input type="checkbox" class="" name="accept"> <label>Accept the instuction & start Test<br></label> </input>
      		
      		<br><input type="submit" class="" name="submit" value="Submit">
      	</form>

      	<div class="rows">
      		<div clas="col-lg-3" style="height:30px"></div>
      	<?php
      		if(isset($error)){
      			echo '<span class="alert alert-danger">'.$error.'</span>';
      			unset($error);
      		}
      	?>
      	</div>

      </div>
	  
		
    
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <!--script src="js/bootstrap.min.js" ></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"--></script>
  

</body></html>
