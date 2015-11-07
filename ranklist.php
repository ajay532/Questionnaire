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
            <a class="navbar-brand" href="#">Questionnaire</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li ><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="main.php?data=1">Questions <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="ranklist.php">Ranklist</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      
      <nav>
	  
		<div class="jumbotron">
		<h1 align="center">Ranklist</h1>
			<form class="navbar-form navbar-right" role="search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by name">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    </span>
                </div>
            </form>
		<table class="table" border="1px">
			<thead>
				<tr>
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
				<tr class="status">
					<td>1</td>
					<td>1223234</td>
					<td>shubham singh</td>
					<td>IERT</td>
					<td>CSE</td>
					<td>30</td>
					<td>0</td>
					<td>30</td>		        </tr>
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
				<tr class="status">
					<td>1</td>
					<td>1223234</td>
					<td>shubham singh</td>
					<td>IERT</td>
					<td>CSE</td>
					<td>30</td>
					<td>0</td>
					<td>30</td>		
				</tr>
					
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
				<tr class="status">
					<td>1</td>
					<td>1223234</td>
					<td>shubham singh</td>
					<td>IERT</td>
					<td>CSE</td>
					<td>30</td>
					<td>0</td>
					<td>30</td>		        </tr>
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
				<tr class="status">
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
		<nav>
        <ul class="pager">
          
         
		<div id="navbar" class="navbar-collapse collapse">
           <div class="col-md-4">
			<li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>
			</div>
			<div class="col-md-4">
			<ul class="nav navbar-nav">
              <li><a href="#"><<</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
			  <li><a href="#">6</a></li>
              <li><a href="#">>></a></li>

            </ul>
		</div>
		<div class="col-md-4">
         <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li> 
		 </div>
		</div>
		  
        </ul>
      </nav>
		
	  </nav>
		
	</div>
</div>
  
</body>
</html>