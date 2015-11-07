<?php
	$con = mysql_connect('localhost','root','') or die("Unable to connect to MySQL");
	$a=mysql_select_db('questionnaire', $con) or die("Unable to select the database");
	$ans=mysql_query("select * from answer");
	
		while($ans1=mysql_fetch_array($ans))
		{
			$i=1;
			$ca=0;
			$wa=0;
			$que=mysql_query("select optcr from question");
			while($que2=mysql_fetch_array($que))
			{
				//echo "step ".$i." "."$que2[optcr]"." "."$ans1[$i]"." ";
				if(strcmp($que2['optcr'],$ans1[$i])==0)
				{
					//echo"correct ";
					$ca=$ca+1;
				}
				if(strcmp($que2['optcr'],$ans1[$i])!=0)
				{
					//echo"wrong ";
					$wa=$wa+1;
				}
				$i=$i+1;
				//echo "<br>";
			}
			
			//echo "<br>".$ans1['0']." ".$ca." ".$wa."<br>";
			$tot=$ca-$wa ; //for negative marking
			$sql1="UPDATE ranklist SET correct='$ca',wrong='$wa',total='$tot' WHERE rollno='$ans1[0]' ";
							$sql=mysql_query($sql1);
							  /*if($sql1)
							  echo "Rank Submited";
							  else
							  echo mysql_error();
								*/
		}
		// ranking calculation 
		//echo "<br> ranking calculation ";
		$que3=mysql_query("SELECT * FROM ranklist ORDER BY correct DESC");
		$j=0;
		$prev=-1;
		while($row4=mysql_fetch_array($que3))
		{
			if($prev!=$row4['correct'])
			$j=$j+1;
			$prev=$row4['correct'];
		//	echo $row4['rollno'];
			$que5=mysql_query("UPDATE ranklist SET rank=$j where rollno=$row4[rollno] ");
			
		}
?>