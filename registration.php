<?php
$error='';
if(isset($_POST[submit])) {
	
	include("connectdb.php");

	$query="INSERT INTO registration values('$_POST[name]','$_POST[branch]',$_POST[year],'$_POST[university]',
		'$_POST[college]',$_POST[rollno],'$_POST[email]',$_POST[contact],'$_POST[facebookid]','$_POST[address]','$_POST[password]')";
	//echo $query;
	if($_POST[password]==$_POST[reenterpassword]){
	     $res=mysqli_query($con,$query);
       //echo "error is".mysqli_error($con);
       if (mysqli_errno($con) == 1062) {
              $error='Roll number already registere!!!';
            }
      if(!mysqli_errno($con))
        header("location: index.php?status=1");
        else if( mysqli_errno($con) != 1062)
          $error=mysqli_error($con);
  }
  else{
    $error="Password do not match";
  }
	
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

	<title>Questionnair</title>

	<!-- Bootstrap core CSS -->
	<link href="bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
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

  		<div class="rows">
  			<div class="col-lg-3"></div>
  			<div class="col-lg-6">
  				<form class="form-signin" method="POST" action="#">

  					<h2 align="center">Registration for Questionnair</h2><br/>
            <?php 
              if($error!='')
              echo "<div class='alert alert-danger'> $error</div><br>" ;
              ?>
  					<label for="InputName">Enter Name</label><input type="text" name="name" class="form-control" placeholder="Enter name" required><br/>	
  					<div class="col-lg-6">
  						<label for="Branch">Branch</label>
  						<select class = "select form-control" name="branch">
  							<option value="CSE">CSE</option>
  							<option value="CSE">EL</option>
  							<option value="CSE">EE</option>
  							<option value="CSE">CE</option>
  							<option value="CSE">IP</option>
  							<option value="CSE">ME</option>
  							<option value="CSE">IC</option>
  						</select>
  					</div>
  					<div class="col-lg-6">
  						<label for="Year">Year</label>
  						<select class = "select form-control" name="year" >
  							<option value="1">1</option>
  							<option value="2">2</option>
  							<option value="3">3</option>
  							<option value="4">4</option>					
  							<select>
  							</div>
  							<br/><br/>
  							<label for="InputUniversity">University</label> <input type="text" class="form-control" name="university" placeholder="allahabad university" required><br/>
  							<label for="InputName">College</label> <input type="text" class="form-control" name="college" placeholder="allahabad dergree college" required><br/>

  							<div class="form-group">
  								<div class="col-xs-4">
  									<label for="InputRollNo">University Roll-No.</label> <input type="text" name="rollno" class="form-control" placeholder="1234567890" required>  
  								</div>	
  								<div class="col-xs-8">
  									<label for="InputName">Email</label> <input type="text" class="form-control" name="email" placeholder="abc@gmail.com" required><br/>
  								</div>
  							</div>
  							<br/>
  							<div class="form-group">
  								<div class="col-xs-4">
  									<label for="InputName">Contact No.</label> <input type="text" class="form-control" name="contact" placeholder="1234567890" required>						
  								</div>	
  								<div class="col-xs-8">
  									<label for="InputName">Facebook-id</label>	<input type="text" class="form-control" name="facebookid" placeholder="facebook.com/____________" required><br/>
  								</div>
  							</div>

  							<label for="InputName">Address</label>
  							<textarea class="textarea form-control input-lg" rows="5" name="address"></textarea><br/>

  							<div class="form-group">
  								<div class="col-xs-6">
  									<label for="inputPassword" > Enter Password</label>
  									<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  								</div>	
  								<div class="col-xs-6">
  									<label for="inputPassword" > Re-enter Password</label>
  									<input type="password" id="inputPassword" class="form-control" name="reenterpassword" placeholder="Password" required>
  								</div>
  							</div>
  							<br/>
  							<br/>

  							<h1 align="center"><input class="btn btn-primary" type="submit" name="submit"/></h1>

  						</form>
  					</div>
  					<div class="col-lg-3"></div>

  				</div>

  			</div> <!-- /container -->


  			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  			<script src="ie10-viewport-bug-workaround.js"></script>
  		</body>
  		</html>

