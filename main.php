<?php

session_start();
  if(!isset($_SESSION['user']))
    header("location: index.php?status=2");

$con = mysql_connect('localhost','root','') or die("Unable to connect to MySQL");
$a=mysql_select_db('questionnaire', $con) or die("Unable to select the database");
$result1=mysql_query("select * from question");

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

  $option=$_POST['optionsRadios'];
  $ques="q"."$_GET[data]";
  
  $roll=$_SESSION['user'];
  //$roll=$_GET['roll'];
  
							
							$sql1="UPDATE answer SET $ques='$option' WHERE rollno='$roll' ";
							$sql=mysql_query($sql1);
							  if($sql1)
							  echo "Answere Submited";
							  else
							  echo mysql_error();
  
}
  include "connectdb.php";
  $rollno=$_SESSION['user'];
  $query="select user from feedback where user=$rollno";
  //echo $query;
  $result = mysqli_query($con,$query);
  $rows=mysqli_num_rows($result);
  echo $rows;
  if ($rows == 0) {
      
      $query="insert into feedback(user,start) values($rollno,'finish')";
      $result = mysqli_query($con,$query);
    }
    if(!isset($_SESSION['start']))
        header("location: start.php"); 
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
            <a class="navbar-brand" href="#">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="#">Home <span class="glyphicon glyphicon-home"></a></li>
              <li ><a href="#">About <span class="glyphicon glyphicon-user"></span></a></li>
              <li><a href="#">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Questions <span class="glyphicon glyphicon-dashboard"><span class="sr-only">(current)</span></a></li>
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

      
      <nav>


      
      <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
			<?php
			$result1=mysql_query("select * from question");
			while($row=mysql_fetch_array($result1))
			{
				$query="main.php?data="."$row[id]";
				 echo " <li class=\"active\"><a href=\"$query\">";
         if($_GET['data']==$row['id'])
            echo "<b>".$row['id']."</b>";
          else
            echo $row['id'];
         echo "</a></li>";
			}
			?>
              
            </ul>
          </div>  
      </nav>
	  
			<?php
			$data=$_GET['data'];  
			$result2=mysql_query("select * from question where id='$data'");
			while($row=mysql_fetch_array($result2))
			{
				$rown=$row['id'];
				$rown1=$rown-1;
				$rown2=$rown+1;
				$queryp="main.php?data="."$rown1";
				$queryn="main.php?data="."$rown2";
				
			echo "
    
      <!-- Main component for a primary marketing message or call to action -->
      <nav>
        <ul class=\"pager\">

          <li class=\"previous\"><a href=\"$queryp\"><span aria-hidden=\"true\">&larr;</span> Previous</a></li>
          <li class=\"next\"><a href=\"$queryn\">Next <span aria-hidden=\"true\">&rarr;</span></a></li>
        </ul>
      </nav>
      <div class=\"jumbotron\">
	  
		
        <h2>Question No.".$row['id']."</h2>
        <p>".$row['question']."</p>
		<form name=\"form1\" method=\"post\" action=\"$queryn\">
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt1\">
            ".$row['opt1']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt2\">
            ".$row['opt2']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt3\">
            ".$row['opt3']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt4\">
            ".$row['opt4']."
          </label>
        </div>
        

      </div>
      <p>
          <input type=\"submit\" class=\"submit btn btn-primary\"  name=\"submit\" value=\"submit\"></input><br/>  
        </p>
		</form>
			";
			}
		?>
    </span></a></li></ul></span></a></li></ul></div></div></nav>
    <div class="rows">
      <div class="col-lg-9"></div>
      <div class="col-lg-3">
        <a href="final.php" class="btn btn-success">Finish Test</a>
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
