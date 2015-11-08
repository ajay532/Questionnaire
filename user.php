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
				
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#myModal").on('show.bs.modal', function(event){
				var button = $(event.relatedTarget);  // Button that triggered the modal
				var titleData = button.data('title'); // Extract value from data-* attributes
				$(this).find('.modal-title').text(titleData);
			});
		});
	</script>
	<style type="text/css">
		.bs-example{
			margin: 20px;
		}
	
		#profile{
			background-color:#f2f1fa;
			margin-bottom:20px;
		}
		
	</style>
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
              <li><a href="home.php">Home <span class="glyphicon glyphicon-home"></span></a></li>
              <li ><a href="#" data-toggle="modal" data-target="#about"  data-title="About">About <span class="glyphicon glyphicon-info-sign"></span></a></li>
              <li><a href="#"data-toggle="modal" data-target="#myModal"  data-title="Contact Us">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="main.php?data=1">Questions <span class="glyphicon glyphicon-dashboard"><span class="sr-only">(current)</span></a></li>
              <li><a href="ranklist.php?id=1">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>
              <li class="active"><a href="user.php">User<span class="glyphicon glyphicon-user"></span></a></li>
			  <li><a href="logout.php">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
	
	<div class="col-md-2"></div>
	
	<div id="profile" class="col-md-6">
		<?php
		session_start();
		if(!isset($_SESSION['user']))
		header("location: index.php?status=2");
		$con = mysql_connect('localhost','root','') or die("Unable to connect to MySQL");
		$a=mysql_select_db('questionnaire', $con) or die("Unable to select the database");
		$result=mysql_query("select * from registration where rollno=$_SESSION[user]");
		$row=mysql_fetch_array($result);
		echo "
		<img src=\"image/user.png\" height=\"100px\" width=\"100px\" align=\"left\"></img>
		
		<br><br><h3>$row[name]</h3>
		<br><br>
		<table style=\"color: #fffff; font-family:sans-serif; font-size:18px;\" class=\"table\" >
		<tbody >
		  <tr>
			<td>Name</td>
			<td>$row[name]</td>
		  </tr>
		  <tr>
			<td>Roll-No</td>
			<td>$row[rollno]</td>
		  </tr>
		  <tr>
			<td>University Name</td>
			<td>$row[university]</td>
		
		  </tr>
		  <tr>
			<td>College Name</td>
			<td>$row[college]</td>
		
		  </tr>
		  <tr>
			<td>Branch</td>
			<td>$row[branch]</td>
		
		  </tr>
		  <tr>
			<td>Year</td>
			<td>$row[year]</td>
		
		  </tr>
		  <tr>
			<td>Email-id</td>
			<td>$row[email]</td>	
		  </tr>
		  <tr>
			<td>Facebook-id</td>
			<td>$row[facebookid]</td>
		  </tr>
		  <tr>
			<td>address</td>
			<td>$row[address]</td>
		  </tr>
		</tbody>
	  </table>
	  
	  <a class=\"btn btn-default\" href=\"registration.php\">Update Profile</a><br><br>
	</div>
	
	<div class=\"col-md-4\"></div>
	";
  ?>
  </div>	 
<div id="about" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">About</h4>
                </div>
                <div class="modal-body">
                 <p style="color:#dd6f00; font-size:18px">Questionnaire is a CMS(Content Management System) which is developed by Btech(CSE) 3<sup>rd</sup> year students of IERT Allahabad. <br>
					Questionnaire provides you a platform where you can give or you can organize<br>MCQ based online test.<br>
					</p>
                </div>
                
            </div>
        </div>
    </div>
	
  
	<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Contact Us</h4>
                </div>
                <div class="modal-body">
					
					<p style="color:#dd6f00; font-size:18px">
						For any kind of information regarding Questionnaire you can contact us at
						questionnairecms@gmail.com
						<br><br>
						<span class="glyphicon glyphicon-earphone"></span> 
						+917783984676, +919984201321, +917054910780<br><br>
						<span class="glyphicon glyphicon-map-marker"> 
						 Institute of Engineering & Rural Technology<br>
						 &nbsp;&nbsp;26 Chaitham Lines<br>
						 &nbsp;&nbsp;Near Prayag Railway Station<br>
						 &nbsp;&nbsp;Allahabad 211002<br>
						
					</p>
				   
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>