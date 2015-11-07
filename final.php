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
              <li ><a href="#">About <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="#">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              
              <li><a href="ranklist.php">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>
              <li><a href="logout.php">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
				
	<form class="form-signin">
		
		<div id="form" class="col-lg-8">
			<h1 align="center">Feedback</h1>
			<label>What you like on this test. </label><br>
			<input type="text" class="form-control" name="like-part" /><br>
			<label>Do you face any problem during test. </label>
			<input type="radio"  name="prob" value="yes"> &nbsp;Yes&nbsp;
			<input type="radio"  name="prob" value="no"> &nbsp;No
			<br><br><label>If yes then mention here which type of problem you face. </label>
			<input type="text" class="form-control" name="que" /><br>
			<br><label>how was questions. </label><br>
			<input type="text" class="form-control" name="que" /><br>
			<br><label>how was your experience in Questionnaire. </label><br>
			<input type="text" class="form-control" name="exp" /><br>
			<br><label>How we can improve this test(if you have any suggestion). </label><br>
			<textarea class="textarea form-control input-lg" rows="5" name="sug"></textarea><br>
			<input type="submit" class="btn btn-default" value="Submit"/><br>
			<h2 align="center"><label>Your result</h3></label><br>
			<table class="table" border="1px">
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
				<tr class="warning">
					<td>1</td>
					<td>1223234</td>
					<td>shubham singh</td>
					<td>IERT</td>
					<td>CSE</td>
					<td>30</td>
					<td>0</td>
					<td>30</td>		
				</tr>
				</tbody>
			</table>
			<br><label>Click here to see </label>
			<a href="ranklist.php">Ranklist</a><br><br>
		</div>
		<div class="col-lg-4"></div>
	</form>
	
</body>
</html>	  