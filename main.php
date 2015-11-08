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
						  
				$rown=$_GET['data'];
				$rown2=$rown+1;
				$queryn="main.php?data="."$rown2";  
				header("location:$queryn");
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
	</style>

  
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
              <li ><a href="#" data-toggle="modal" data-target="#about"  data-title="About">About <span class="glyphicon glyphicon-info-icon"></span></a></li>

              <li><a href="#" data-toggle="modal" data-target="#myModal"  data-title="Contact Us">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Questions <span class="glyphicon glyphicon-dashboard"><span class="sr-only">(current)</span></a></li>
              <li><a href="ranklist.php?id=1">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>

              <?php 
                if(isset($_SESSION['user'])){
              ?>
              <li><a href="user.php">User<span class="glyphicon glyphicon-user"></span></a></li>
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
			$data1=$data+1;
			$result3=mysql_query("select * from answer WHERE rollno=$_SESSION[user]");
			$row4=mysql_fetch_array($result3);
			$value=$row4[$data];
			
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
		<form name=\"form1\" method=\"post\" action=\"\">
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\"  id=\"optionsRadios2\" value=\"opt1\" "; if($value=="opt1")echo " checked"; echo ">
            ".$row['opt1']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt2\" "; if($value=="opt2")echo " checked"; echo ">
            ".$row['opt2']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt3\" "; if($value=="opt3")echo " checked"; echo ">
            ".$row['opt3']."
          </label>
        </div>
        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"opt4\" "; if($value=="opt1")echo " checked"; echo ">
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
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <!--script src="js/bootstrap.min.js" ></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"--></script>
  

</body></html>