<?php
	session_start();
	include "connectdb.php";
	$rollno =$_SESSION['user'];
	if(isset($_SESSION['start']))
		unset($_SESSION['start']);
	if(isset($_GET['submit-from'])){
		
		//echo $_SESSION['user'];
		
		$like=$_GET['liketype'];
		$prob=$_GET['prob'];
		$problems=$_GET['problems'];
		$questions=$_GET['questions'];
		$experience=$_GET['experience'];
		$improve=$_GET['improve'];

		$query="update feedback set liketype='$like', prob='$prob', problems='$problems',questions='$questions',experience='$experience',improve='$improve'";
		echo $query;
		$res=mysqli_query($con,$query);
		if($res){
			header("location: home.php");
		}else{
			$error=mysqli_error($con);
		}
	}
	$query="select user from feedback where user=$rollno";
	$result = mysqli_query($con,$query);
	$rows=mysqli_num_rows($result);
	echo $rows;
	if ($rows == 0) {
			
			$query="insert into feedback(user,start) values($rollno,'finish')";
			$result = mysqli_query($con,$query);
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
		
		#form{
			background-color:#adf296;
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
			  <li><a href="#" data-toggle="modal" data-target="#myModal"  data-title="Contact Us">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="ranklist.php?id=1">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>
              <li><a href="user.php">User<span class="glyphicon glyphicon-user"></span></a></li>
			  <li><a href="logout.php">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
				
	<form class="form-signin" action="#" method="get">
		
		<div id="form" class="col-lg-8">
			<h1 align="center">Feedback</h1>
			<label>What you like on this test. </label><br>
				<input type="text" class="form-control" name="liketype" /><br>
			
			<label>Do you face any problem during test. </label>
				<input type="radio"  name="prob" value="yes"> &nbsp;Yes&nbsp;
				<input type="radio"  name="prob" value="no"> &nbsp;No
			
			<br><br><label>If yes then mention here which type of problem you face. </label>
				<input type="text" class="form-control" name="problems" /><br>
			
			<br><label>how was questions. </label><br>
				<input type="text" class="form-control" name="questions" /><br>
			
			<br><label>how was your experience in Questionnaire. </label><br>
				<input type="text" class="form-control" name="experience" /><br>
			
			<br><label>How we can improve this test(if you have any suggestion). </label><br>
				<textarea class="textarea form-control input-lg" rows="5" name="improve"></textarea><br>
				<input type="submit" class="btn btn-default" value="Submit" name="submit-from"/><br>
			<?php
				if(isset($error)){
					echo "<div class='alert alert-danger'>$error</div>";
				}
			?>
			<h2 align="center"><label>Your result</h3></label><br>
			<table class="table" border="1px">
			<?php
			//	$query="SELECT * FROM ranklist where rollno=$rollno";
			//	$res=mysqli_query($con,$query);
			//	if(!$res){{
			//		$error2=mysqli_error($con);
			//		echp $error2;
			//	}
		//}

			?>
				<thead>
				<tr class="danger">
					<th>#</th>
					<th>Roll No.</th>
					<th>Name</th>
					<th>College Name</th>
					<th>Branch</th>
					<th>Correct Answers</th>
					<th>Wrong Answers</th>
					<th>Total Points</th>		
				</tr>
				</thead>
				<tbody>
			<?php
				if(!$con)
					include "connectdb.php";

				$rollno =$_SESSION['user'];
				$que=mysqli_query($con,"SELECT * FROM ranklist WHERE rollno=$rollno ");
				while($que2=mysqli_fetch_array($que))
				{
					$que3=mysqli_query($con,"SELECT * FROM registration WHERE rollno=$rollno");
				    $que4=mysqli_fetch_array($que3);
						echo "
					<tr class=\"warning\">
						<td>$que2[rank]</td>
						<td>$que2[rollno]</td>
						<td>$que4[name]</td>
						<td>$que4[college]</td>
						<td>$que4[branch]</td>
						<td>$que2[correct]</td>
						<td>$que2[wrong]</td>
						<td>$que2[correct]</td>		 
					<tr>
					";
				}
			?>
			
				</tbody>
			</table>
			<br><label>Click here to see </label>
			<a href="ranklist.php?id=1">Ranklist</a><br><br>
		</div>
		<div class="col-lg-4"></div>
	</form>

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