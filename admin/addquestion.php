<!--#####################################################################################################################################-->
	
<?php
	session_start();
	if(!(isset($_SESSION['user']) && $_SESSION['user']==1311010000))
		header("location: ../home.php");

$con = mysql_connect('localhost','root','') or die("Unable to connect to MySQL");
$a=mysql_select_db('questionnaire', $con) or die("Unable to select the database");

?>
<?php
if(isset($_POST['submit']))
{
error_reporting(E_ALL ^ E_DEPRECATED);
//date_default_timezone_set('Asia/Kolkata');
$msg='';
$error='';
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
  
  							if(!isset($_GET['edit-submit'])){
							  $sql=mysql_query("INSERT INTO `question` VALUES('','$q','$o1','$o2','$o3','$o4','$oc')");
							  if($sql)
							  	$msg="Question added successfully";
							  else
							  	$error=mysql_error();
  							}
							else{
								$id=$_GET['edit-id'];
								$query="update question set question='$q',opt1='$o1',opt2='$o2',opt3='$o3',opt4='$o4',optcr='$oc' where id=$id";
								//echo $query;
								$sql=mysql_query($query);
								if($sql)
							  	$msg="Question Updated successfully";
							  else
							  	$error=mysql_error();
							  unset($_GET['edit-id']);
							
							}
  }
?>
<?php


	$con1=mysqli_connect("localhost","root","","questionnaire");
	if(isset($_GET['edit-submit'])){
		$id=$_GET['edit-id'];
		$query="select * from question where id=$id";
		//echo $query;
		$res=mysqli_query($con1,$query);
		$row=mysqli_fetch_array($res);
		$question1=$row['question'];
		$option1=$row['opt1'];
		$option2=$row['opt2'];
		$option3=$row['opt3'];
		$option4=$row['opt4'];
		$optioncr=$row['optcr'];
	
		

	}
?>
<!--##########################################################################################################################################-->

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
  <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
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
            <a class="navbar-brand" href="../home.php">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../home.php">Home <span class="glyphicon glyphicon-home"></a></li>
              <li><a href="#" data-toggle="modal" data-target="#about"  data-title="About">About <span class="glyphicon glyphicon-info-sign"></span></a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal"  data-title="Contact Us">Contact <span class="glyphicon glyphicon-earphone"></span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./index_files/index.html">Questions <span class="glyphicon glyphicon-dashboard"><span class="sr-only">(current)</span></a></li>
              <li><a href="../ranklist.php">Ranklist <span class="glyphicon glyphicon-list-alt"></span></a></li>
              <li><a href="../user.php">User<span class="glyphicon glyphicon-user"></span></a></li>
			  <li><a href="../logout.php">Log Out <span class="glyphicon glyphicon-off"></span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      


      <nav>
       
      </nav>
      <div class="rows">
 			<div class="col-lg-4"></div>
 			<div class="col-lg-4">
      	<?php
      		if(isset($msg) && $msg!=''){
      			echo '<span class="alert alert-success">'.$msg.'</span>';
      		}
      		if(isset($error) && $error!='')
      			echo '<span class="alert alert-danger">'.$error.'</span>';
      	?>
      		</div>
      		<div class="col-lg-4"></div>
      </div>
      <div class="jumbotron">
 			<div class="rows">
 			<form action="#" method="get"> 
 				<div class="col-lg-7"></div>
 				<div class="col-lg-3"><input type="text" placeholder="enter ques Id to edit" name="edit-id" value=<?php if(isset($option1)) echo "\"$id\""; else echo "\"\"" ?>></div>
 				<div class="col-lg-2"><input type="submit" class="submit btn btn-primary" value="Edit question" name="edit-submit"></div>
 			</form>
 			</div> 
 			
      
        <h2>Enter the question below</h2>
        <form class="form" action="" method="post">
          <textarea class="textarea form-control input-lg" placeholder="enter your question here" rows="5" name="que"><?php if(isset($option1)) echo "$question1";?></textarea><br/><br/>
          <div class="rows">
            <div class="col-lg-6">
              <label>option 1</label> <input type="text" class="form-control" name="opt1" value=<?php if(isset($option1)) echo "\"$option1\""; else echo "\"\"" ?> >
            </div>
            <div class="col-lg-6">
              <label>option 2</label> <input type="text" class="form-control" name="opt2" value=<?php if(isset($option1)) echo "\"$option2\""; else echo "\"\"" ?> > </label>
            </div>
          </div>
		  <br/><br/>
        <div class="rows">
            <div class="col-lg-6">
              <label>option 3</label> <input type="text" class="form-control" name="opt3" value=<?php if(isset($option1)) echo "\"$option3\""; else echo "\"\"" ?> >
            </div>
            <div class="col-lg-6">
              <label >option 4 </label><input type="text" class="form-control" name="opt4" value=<?php if(isset($option1)) echo "\"$option4\""; else echo "\"\"" ?> >
            </div>
        </div>
        <br/>
		<div class="col-md-6">
			<label>Correct</label>
			<select class="select form-control" data-width="100%" name="optcr" value=<?php if(isset($option1)) echo "\"$optioncr\""; else echo "\"\"" ?> >
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
		<table class="table" border="1"> <caption align="top">Previous Questions</caption>
		<tr>
			<thead>
				<tr>
					<th>Id</th>
					<th>Question</th>
					<th>option1</th>
					<th>option2</th>
					<th>option3</th>
					<th>option4</th>
					<th>option correct</th>
				</tr>
			</thead>
		</tr>
		<?php
		
		$result=mysql_query("select * from question");
		while($row=mysql_fetch_array($result))
		{
			
			echo "<tr><td>".$row['id']."</td><td>".$row['question']."</td><td>".$row['opt1']."</td><td>".$row['opt2']."</td><td>".$row['opt3']."</td><td>".$row['opt4']."</td><td>".$row['optcr']."</td></tr>";
		}

		?>
		</table>
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
    <script src="jquery.min.js"></script>
    <!--script src="js/bootstrap.min.js" ></script -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="js/ie10-viewport-bug-workaround.js"--></script>
	

</body></html>
