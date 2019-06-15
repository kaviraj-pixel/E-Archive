<?php
 $connect = mysqli_connect("localhost","root","","event");
 session_start();
 $faculty_email=$_SESSION['email'];
 if(isset($_POST['faculty-incharge'])){
  $department=$_POST["department"];
  $facincharge=$_POST["faculty-incharge"];
  $event_title=$_POST["event-title"];
  $event_venue=$_POST["event-venue"];
  $event_date=$_POST["event-date"];
  $details=$_POST["details"];
  $outcome=$_POST["outcome"];
  $resource_person=$_POST["resource-person"];
   
 if($_POST["kct-faculty"]){$knfaculty=$_POST["kct-faculty"];}else{$knfaculty=0;}
 if($_POST["kct-students"]){$knstudents=$_POST["kct-students"];}else{$knstudents=0;}
 if($_POST["kct-industry"]){$knindustry=$_POST["kct-industry"];}else{$knindustry=0;}
 
 if($_POST["external-faculty"]){$enfaculty=$_POST["external-faculty"];}else{$enfaculty=0;}
 if($_POST["external-students"]){$enstudents=$_POST["external-students"];}else{$enstudents=0;}
 if($_POST["external-industry"]){$enindustry=$_POST["external-industry"];}else{$enindustry=0;}
 
     
  
  $kffaculty=$_POST["kct-facultyf"];
  $kfstudents=$_POST["kct-studentsf"];
  $kfindustry=$_POST["kct-industryf"];
  
  $effaculty=$_POST["external-facultyf"];
  $efstudents=$_POST["external-studentsf"];
  $efindustry=$_POST["external-industryf"];
  
  $hono_detail=$_POST["hono-detail"];
  $hono_date=$_POST["hono-date"];
  $hono_faculty=$_POST["hono-faculty"];
  $hono_qty=$_POST["hono-qty"]; 
  if($_POST["hono-expenditure"]){$hono_expenditure=$_POST["hono-expenditure"];}else{$hono_expenditure=0;}
  $hono_revenue=$_POST["hono-revenue"];
  $hono_remarks=$_POST["hono-remarks"];
  
  $momo_detail=$_POST["momo-detail"];
  $momo_date=$_POST["momo-date"];
  $momo_faculty=$_POST["momo-faculty"];
  $momo_qty=$_POST["momo-qty"];
  if($_POST["momo-expenditure"]){$momo_expenditure=$_POST["momo-expenditure"];}else{$momo_expenditure=0;}
  $momo_revenue=$_POST["momo-revenue"];
  $momo_remarks=$_POST["momo-remarks"];
  
  $post_detail=$_POST["post-detail"];
  $post_date=$_POST["post-date"];
  $post_faculty=$_POST["post-faculty"];
  $post_qty=$_POST["post-qty"];
  if($_POST["post-expenditure"]){$post_expenditure=$_POST["post-expenditure"];}else{$post_expenditure=0;}
  $post_revenue=$_POST["post-revenue"];
  $post_remarks=$_POST["post-remarks"];

  $Media_detail=$_POST["Media-detail"];
  $Media_date=$_POST["Media-date"];
  $Media_faculty=$_POST["Media-faculty"];
  $Media_qty=$_POST["Media-qty"];
  if($_POST["Media-expenditure"]){$Media_expenditure=$_POST["Media-expenditure"];}else{$Media_expenditure=0;}
 
  $Media_revenue=$_POST["Media-revenue"];
  $Media_remarks=$_POST["Media-remarks"];
  
  $print_detail=$_POST["print-detail"];
  $print_date=$_POST["print-date"];
  $print_faculty=$_POST["print-faculty"];
  $print_qty=$_POST["print-qty"];
  if($_POST["print-expenditure"]){$print_expenditure=$_POST["print-expenditure"];}else{$print_expenditure=0;}
  $print_revenue=$_POST["print-revenue"];
  $print_remarks=$_POST["print-remarks"];
  
  $travel_detail=$_POST["travel-detail"];
  $travel_date=$_POST["travel-date"];
  $travel_faculty=$_POST["travel-faculty"];
  $travel_qty=$_POST["travel-qty"];
  if($_POST["travel-expenditure"]){$travel_expenditure=$_POST["travel-expenditure"];}else{$travel_expenditure=0;}
  $travel_revenue=$_POST["travel-revenue"];
  $travel_remarks=$_POST["travel-remarks"];
  
  $food_detail=$_POST["food-detail"];
  $food_date=$_POST["food-date"];
  $food_faculty=$_POST["food-faculty"];
  $food_qty=$_POST["food-qty"];
  if($_POST["food-expenditure"]){$food_expenditure=$_POST["food-expenditure"];}else{$food_expenditure=0;}
  $food_revenue=$_POST["food-revenue"];
  $food_remarks=$_POST["food-remarks"];
  
  $expense_detail=$_POST["expense-detail"];
  $expense_date=$_POST["expense-date"];
  $expense_faculty=$_POST["expense-faculty"];
  $expense_qty=$_POST["expense-qty"];
  if($_POST["expense-expenditure"]){$expense_expenditure=$_POST["expense-expenditure"];}else{$expense_expenditure=0;}
  $expense_revenue=$_POST["expense-revenue"];
  $expense_remarks=$_POST["expense-remarks"];
  
  $report_detail=$_POST["report-detail"];
  $report_date=$_POST["report-date"];
  $report_faculty=$_POST["report-faculty"];
  $report_qty=$_POST["report-qty"];
  if($_POST["report-expenditure"]){$report_expenditure=$_POST["report-expenditure"];}else{$report_expenditure=0;}
  $report_revenue=$_POST["report-revenue"];
  $report_remarks=$_POST["report-remarks"];
  
  $sponsor_info=$_POST["sponsor-info"];

  $sponsor_revenue=$_POST["sponsor-revenue"];
  $sponsor_remarks=$_POST["sponsor-remarks"];
  
  $revenue=$_POST["revenue"];
  $totalexp=$hono_expenditure+$momo_expenditure+$post_expenditure+$Media_expenditure+$print_expenditure+$travel_expenditure+$food_expenditure+$expense_expenditure+$report_expenditure;
  $kntotal=$knfaculty+$knindustry+$knstudents;
  $entotal=$enfaculty+$enindustry+$enstudents;
  
  $query="INSERT INTO `eventlist1` (`department`, `facincharge`, `faculty_email`, `sdate`, `event_title`, `event_venue`, `event_date`, `details`, `outcome`, `resource_person`,
  `knfaculty`, `knstudents`, `knindustry`, `kntotal`, `enfaculty`, `enstudents`, `enindustry`, `entotal`, `kffaculty`, `kfstudents`, `kfindustry`, `effaculty`, `efstudents`, `efindustry`,
  `hono_detail`, `hono_date`, `hono_faculty`, `hono_qty`, `hono_expenditure`, `hono_revenue`, `hono_remarks`, `momo_detail`, 
  `momo_date`, `momo_faculty`, `momo_qty`, `momo_expenditure`, `momo_revenue`, `momo_remarks`, `post_detail`, `post_date`, `post_faculty`, `post_qty`, `post_expenditure`, `post_revenue`, `post_remarks`, `Media_detail`, `Media_date`, `Media_faculty`, `Media_qty`, `Media_expenditure`, `Media_revenue`, `Media_remarks`, `print_detail`, `print_date`, `print_faculty`, `print_qty`, `print_expenditure`, `print_revenue`, `print_remarks`, `travel_detail`, `travel_date`, `travel_faculty`, `travel_qty`, `travel_expenditure`, `travel_revenue`, `travel_remarks`,
  `food_detail`, `food_date`, `food_faculty`, `food_qty`, `food_expenditure`, `food_revenue`, `food_remarks`, `expense_detail`, `expense_date`, `expense_faculty`, `expense_qty`, `expense_expenditure`, `expense_revenue`, `expense_remarks`, `report_detail`, `report_date`, `report_faculty`, `report_qty`, `report_expenditure`, `report_revenue`, `report_remarks`, `sponsor_info`, `sponsor_revenue`, `sponsor_remarks`, `revenue`, `totalexp`, `coordinator`) 
  VALUES ('$department', '$facincharge', '$faculty_email', CURRENT_TIMESTAMP, '$event_title', '$event_venue', '$event_date', '$details', '$outcome', '$resource_person', 
  '$knfaculty', '$knstudents', '$knindustry', '$kntotal', '$enfaculty', '$enstudents', '$enindustry', '$entotal', '$kffaculty', '$kfstudents', '$kfindustry', '$effaculty', '$efstudents', '$efindustry',
  '$hono_detail', '$hono_date', '$hono_faculty', '$hono_qty', '$hono_expenditure', '$hono_revenue', '$hono_remarks', 
  '$momo_detail', '$momo_date', '$momo_faculty', '$momo_qty', '$momo_expenditure', '$momo_revenue', '$momo_remarks',
  '$post_detail', '$post_date', '$post_faculty', '$post_qty', '$post_expenditure', '$post_revenue', '$post_remarks',
  '$Media_detail','$Media_date','$Media_faculty','$Media_qty','$Media_expenditure','$Media_revenue','$Media_remarks',
  '$print_detail','$print_date','$print_faculty','$print_qty','$print_expenditure','$print_revenue','$print_remarks',
'$travel_detail','$travel_date','$travel_faculty','$travel_qty','$travel_expenditure','$travel_revenue','$travel_remarks',
  '$food_detail','$food_date','$food_faculty','$food_qty','$food_expenditure','$food_revenue','$food_remarks',
 '$expense_detail','$expense_date','$expense_faculty','$expense_qty','$expense_expenditure','$expense_revenue','$expense_remarks',
  '$report_detail','$report_date','$report_faculty','$report_qty','$report_expenditure','$report_revenue','$report_remarks',
  '$sponsor_info','$sponsor_revenue','$sponsor_remarks','$revenue','$totalexp','1');";
 $result1 = mysqli_query($connect, $query);
 echo "hi";
  }
  
  $result=mysqli_query($connect,"select * from `eventlist1` where faculty_email='$faculty_email'");
   $result1=mysqli_query($connect,"select * from `amount`");
  $res1=mysqli_fetch_array($result1);
$balance=$res1['totalrev']-$res1['utrev'];

 
 ?>
 <html>
 <head>
 <title>home</title>
 <style>
 table{
         background-color:MistyRose ;
	 border:2px solid black;
	 width:70%;
         padding:20px;
	 margin:5%;
	 display:block;
 }
th, td {
  padding:5px;
  text-align: left;
  border-bottom: 1px solid black;
}
tr:hover {background-color:lightyellow;}
 a:link, a:visited {
  background-color: skyblue;
  color: mediumblue;
  padding: 15px 25px;
  display: inline-block;
  text-align:right;
}

a:hover, a:active {
  background-color: skyblue;
  color : yellow;
text-decoration: underline;
text-align:right;
}
p{             align:center;
				font: 400 10px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
				font-size:25px;
				color:black;
				margin-bottom:15px;
				margin-top:10px;
				}
  
  label{
				font: 400 10px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
				font-size:15px;
				color:black;
				margin-bottom:15px;
				margin-top:10px;
				}
	section{width: 90%;
	            align:center;
                    height: 43px;
                    padding: 12px 20px;
                    box-sizing: border-box;
                    border: 2px solid #ccc;
                    border-radius: 4px;
                    background-color: #f8f8f8;
                    resize: none;
					font: 400 16px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
				}
				
		div{padding:4px;
				font: 400 10px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
				font-size:15px;
				border:1px solid black;
				margin-bottom:15px;
				margin-top:10px;
				width:100px;
				align:right;
				color:green;
				background-color:#EDE7F6;
				}
	     button{
			 margin-left:40%;
			 margin-right:40%;
			 width:20%;
			 border-sizing:border-box;
			
		 }
 </style>
 </head>
 <body>
  <h3 style="font-size:30px; font-family:Trebuchet MS; color:deeppink;"><marquee><big><b>Avalibale balance : <?php echo $balance;?></b></big></marquee></h3>
 <?php
  
 
 echo '<form action="view1.php" method="post">';
 
 while($res=mysqli_fetch_array($result))
 { echo "<table>";
	 
	 $i=$res['sdate'];
	 $i=str_replace(' ','',$i);
	
	 
	
	 echo "<tr>";
	 echo "<td colspan=2>"."<p align=center>".$res['event_title']."</p>"."</td>";
	 echo"</tr>";
	  echo "<tr>";
	 echo  "<td>"."<label>"."<bid>"."<b>"."COORDINATOR"."</b>"."</big>"."</label>"."</td>";
	 if($res['coordinator']==0)
		 echo "<td>"."<section>REQUESTED</section>"."</td>";
	 else if($res['coordinator']==1)
		 echo "<td>"."<div>ACCEPTED</div>"."</td>";
    
	 echo "</tr>";
	 echo "<tr>";
	 
	 echo  "<td>"."<label>"."<big>"."<b>"."HOD"."</b>"."</big>"."</label>"."</td>";
	 if($res['hod']==0)
		 echo "<td>"."<section>REQUESTED</section>"."</td>";
	 else if($res['hod']==1)
		  echo "<td>"."<div>ACCEPTED</div>"."</td>";
    else if($res['hod']==2)
      echo "<td>"."<div>REJECTED</div>"."</td>";
	  echo "</tr>";
	  echo "<tr>";
	 
	 echo  "<td>"."<label>"."<big>"."<b>"."PRINCIPAL"."</b>"."</big>"."</label>"."</td>";
	 if($res['principal']==0)
		 echo "<td>"."<section >REQUESTED</section>"."</td>";
	 else if($res['principal']==1)
		  echo "<td>"."<div>ACCEPTED</div>"."</td>";
   else if($res['principal']==2)
      echo "<td>"."<div>REJECTED</div>"."</td>";
	  echo "</tr>";
echo "<tr><td >EXPENDITURE:  </td><td>".$res['totalexp']."</td></tr>";
echo "<tr><td>EXPENDITURE STATUS:   </td><td>";
if($balance>$res['totalexp']){echo "available";}else{echo "not available";}
echo "</td></tr>";
echo "<tr>";
echo '<td colspan="2">';
echo "<p>";
echo '<button type="submit" name="submit" value='.$i.'>'."<b>"."VIEW"."</b>".'</button>';
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";

 }
 echo "</form>";
 ?>
 
 <a href="form1.php"><big><b>ADD NEW EVENT</b></big></a><br><br>
 <a href="logout.php"><big><b>LOGOUT</b></big></a>
 </body>
 </html>