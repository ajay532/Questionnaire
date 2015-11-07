<!--#####################################################################################################################################
<?php
$con = mysql_connect('localhost','root','') or die("Unable to connect to MySQL");
$a=mysql_select_db('questionnaire', $con) or die("Unable to select the database");

?>
<?php
if(isset($_POST['submit']))
{
error_reporting(E_ALL ^ E_DEPRECATED);
//date_default_timezone_set('Asia/Kolkata');

if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  $q=$_POST['que'];
  $o1=$_POST['opt1'];
  $o2=$_POST['opt2'];
  $o3=$_POST['opt3'];
  $o4=$_POST['opt4'];
  $oc=$_POST['optcr'];
  
  
							  $sql=mysql_query("INSERT INTO `question` VALUES('','$q','$o1','$o2','$o3','$o4','$oc')");
							  if($sql)
							  echo "Question Inserted";
							  else
							  echo mysql_error();
  
}
?>

##########################################################################################################################################-->

<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../image/photo.jpg">

    <title>Questionnaire</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

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
            <a class="navbar-brand" href="../home.php">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../home.php">Home <span class="glyphicon glyphicon-home"></a></li>
              <li><a href="#">About <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="#">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./index_files/index.html">Questions <span class="glyphicon glyphicon-dashboard"><span class="sr-only">(current)</span></a></li>
              <li><a href="../ranklist.php">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>
              <li><a href="../logout.php">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      


      <nav>
       
      </nav>
      <div class="jumbotron">
     
        <h2>Enter the question below</h2>
        <form class="form" action="" method="post">
          <textarea class="textarea form-control input-lg" rows="5" name="que"></textarea><br/><br/>
          <div class="rows">
            <div class="col-lg-6">
              <label>option 1</label> <input type="text" class="form-control" name="opt1">
            </div>
            <div class="col-lg-6">
              <label>option 2</label> <input type="text" class="form-control" name="opt2"></label>
            </div>
          </div>
		  <br/><br/>
        <div class="rows">
            <div class="col-lg-6">
              <label>option 3</label> <input type="text" class="form-control" name="opt3">
            </div>
            <div class="col-lg-6">
              <label >option 4 </label><input type="text" class="form-control" name="opt4">
            </div>
        </div>
        <br/>
		<div class="col-md-6">
			<label>Correct</label>
			<select class="select form-control" data-width="100%" name="optcr">
			<option value="opt1">option1</option>
			<option value="opt2">option2</option>
			<option value="opt3">option3</option>
			<option value="opt4">option4</option>
			</select>
		</div>
        <div class="col-md-6"></div>
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>		
			<h1 align="center"><input type="submit" class="submit btn btn-primary"  name="submit" value="submit" /></h1>
		</form>
      </div>
	  
	  <div class="row" >
		<?php
		echo "
		<table class=\"table\" border=\"1\">
		<caption align=\"top\">Previous Questions</caption>
		";
		$result=mysql_query("select * from question");
		while($row=mysql_fetch_array($result))
		{
			echo "
			<tr>
			<td>
			 ".$row['id'].";
			</td>
			<td>
		     ".$row['question'].";
			</td>
			</tr>
			";
		}
		echo "
		</table>
		";
		?>
	</div>
	  
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <!--script src="js/bootstrap.min.js" ></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"--></script>
	

</body></html>
