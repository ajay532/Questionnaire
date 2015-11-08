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
				
	<style type="text/css">
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
              <li ><a href="#">About <span class="glyphicon glyphicon-info-sign"></span></a></li>
              <li><a href="#">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
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
		
		<img src="image/user.png" height="100px" width="100px" align="left"></img>
		<br><br><h3>User Name</h3>
		<br><br>
		<table style="color: #fffff; font-family:sans-serif; font-size:18px;" class="table" >
		<tbody >
		  <tr>
			<td>Name</td>
			<td>user</td>
		  </tr>
		  <tr>
			<td>Roll-No</td>
			<td>12345</td>
		  </tr>
		  <tr>
			<td>University Name</td>
			<td>UPTU</td>
		
		  </tr>
		  <tr>
			<td>College Name</td>
			<td>IERT alld</td>
		
		  </tr>
		  <tr>
			<td>Branch</td>
			<td>CSE</td>
		
		  </tr>
		  <tr>
			<td>Year</td>
			<td>3</td>
		
		  </tr>
		  <tr>
			<td>Email-id</td>
			<td>abc@gmail.com</td>	
		  </tr>
		  <tr>
			<td>Facebook-id</td>
			<td>facebook.com/abc</td>
		  </tr>
		  <tr>
			<td>address</td>
			<td>Naini, allahabd</td>
		  </tr>
		</tbody>
	  </table>
	  <a class="btn btn-default" href="registration.php">Update Profile</a><br><br>
	</div>
	
	<div class="col-md-4"></div>
  
  </div>	 

</body>
</html>