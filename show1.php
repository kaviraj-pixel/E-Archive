<?php
  $department=$_POST["department"];
  $facincharge=$_POST["faculty-incharge"];
  $event_title=$_POST["event-title"];
  $event_venue=$_POST["event-venue"];
  $event_date=$_POST["event-date"];
  $details=$_POST["details"];
  $outcome=$_POST["outcome"];
  $resource_person=$_POST["resource-person"];
  
  $knfaculty=$_POST["kct-faculty"];
  $knstudents=$_POST["kct-students"];
  $knindustry=$_POST["kct-industry"];
     
  $enfaculty=$_POST["external-faculty"];
  $enstudents=$_POST["external-students"];
  $enindustry=$_POST["external-industry"];
  
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
  $hono_expenditure=$_POST["hono-expenditure"];
  $hono_revenue=$_POST["hono-revenue"];
  $hono_remarks=$_POST["hono-remarks"];
  
  $momo_detail=$_POST["momo-detail"];
  $momo_date=$_POST["momo-date"];
  $momo_faculty=$_POST["momo-faculty"];
  $momo_qty=$_POST["momo-qty"];
  $momo_expenditure=$_POST["momo-expenditure"];
  $momo_revenue=$_POST["momo-revenue"];
  $momo_remarks=$_POST["momo-remarks"];
  
  $post_detail=$_POST["post-detail"];
  $post_date=$_POST["post-date"];
  $post_faculty=$_POST["post-faculty"];
  $post_qty=$_POST["post-qty"];
  $post_expenditure=$_POST["post-expenditure"];
  $post_revenue=$_POST["post-revenue"];
  $post_remarks=$_POST["post-remarks"];

  $Media_detail=$_POST["Media-detail"];
  $Media_date=$_POST["Media-date"];
  $Media_faculty=$_POST["Media-faculty"];
  $Media_qty=$_POST["Media-qty"];
  $Media_expenditure=$_POST["Media-expenditure"];
  $Media_revenue=$_POST["Media-revenue"];
  $Media_remarks=$_POST["Media-remarks"];
  
  $print_detail=$_POST["print-detail"];
  $print_date=$_POST["print-date"];
  $print_faculty=$_POST["print-faculty"];
  $print_qty=$_POST["print-qty"];
  $print_expenditure=$_POST["print-expenditure"];
  $print_revenue=$_POST["print-revenue"];
  $print_remarks=$_POST["print-remarks"];
  
  $travel_detail=$_POST["travel-detail"];
  $travel_date=$_POST["travel-date"];
  $travel_faculty=$_POST["travel-faculty"];
  $travel_qty=$_POST["travel-qty"];
  $travel_expenditure=$_POST["travel-expenditure"];
  $travel_revenue=$_POST["travel-revenue"];
  $travel_remarks=$_POST["travel-remarks"];
  
  $food_detail=$_POST["food-detail"];
  $food_date=$_POST["food-date"];
  $food_faculty=$_POST["food-faculty"];
  $food_qty=$_POST["food-qty"];
  $food_expenditure=$_POST["food-expenditure"];
  $food_revenue=$_POST["food-revenue"];
  $food_remarks=$_POST["food-remarks"];
  
  $expense_detail=$_POST["expense-detail"];
  $expense_date=$_POST["expense-date"];
  $expense_faculty=$_POST["expense-faculty"];
  $expense_qty=$_POST["expense-qty"];
  $expense_expenditure=$_POST["expense-expenditure"];
  $expense_revenue=$_POST["expense-revenue"];
  $expense_remarks=$_POST["expense-remarks"];
  
  $report_detail=$_POST["report-detail"];
  $report_date=$_POST["report-date"];
  $report_faculty=$_POST["report-faculty"];
  $report_qty=$_POST["report-qty"];
  $report_expenditure=$_POST["report-expenditure"];
  $report_revenue=$_POST["report-revenue"];
  $report_remarks=$_POST["report-remarks"];
  
  $sponsor_info=$_POST["sponsor-info"];
  $sponsor_expenditure=$_POST["sponsor-expenditure"];
  $sponsor_revenue=$_POST["sponsor-revenue"];
  $sponsor_remarks=$_POST["sponsor-remarks"];
  
  $revenue=$_POST["revenue"];
  
  $connect = mysqli_connect("localhost","root","","event");
  $query="INSERT INTO `eventlist1` (`department`, `facincharge`, `sdate`, `event_title`, `event_venue`, `event_date`, `details`, `outcome`, `resource_person`,
  `knfaculty`, `knstudents`, `knindustry`, `enfaculty`, `enstudents`, `enindustry`, `kffaculty`, `kfstudents`, `kfindustry`, `effaculty`, `efstudents`, `efindustry`,
  `hono_detail`, `hono_date`, `hono_faculty`, `hono_qty`, `hono_expenditure`, `hono_revenue`, `hono_remarks`, `momo_detail`, 
  `momo_date`, `momo_faculty`, `momo_qty`, `momo_expenditure`, `momo_revenue`, `momo_remarks`, `post_detail`, `post_date`, `post_faculty`, `post_qty`, `post_expenditure`, `post_revenue`, `post_remarks`, `Media_detail`, `Media_date`, `Media_faculty`, `Media_qty`, `Media_expenditure`, `Media_revenue`, `Media_remarks`, `print_detail`, `print_date`, `print_faculty`, `print_qty`, `print_expenditure`, `print_revenue`, `print_remarks`, `travel_detail`, `travel_date`, `travel_faculty`, `travel_qty`, `travel_expenditure`, `travel_revenue`, `travel_remarks`,
  `food_detail`, `food_date`, `food_faculty`, `food_qty`, `food_expenditure`, `food_revenue`, `food_remarks`, `expense_detail`, `expense_date`, `expense_faculty`, `expense_qty`, `expense_expenditure`, `expense_revenue`, `expense_remarks`, `report_detail`, `report_date`, `report_faculty`, `report_qty`, `report_expenditure`, `report_revenue`, `report_remarks`, `sponsor_info`, `sponsor_expenditure`, `sponsor_revenue`, `sponsor_remarks`, `revenue`) 
  VALUES ('$department', '$facincharge', CURRENT_TIMESTAMP, '$event_title', '$event_venue', '$event_date', '$details', '$outcome', '$resource_person', '$knfaculty', '$knstudents', '$knindustry', '$enfaculty', '$enstudents', '$enindustry', '$kffaculty', '$kfstudents', '$kfindustry', '$effaculty', '$efstudents', '$efindustry',
  '$hono_detail', '$hono_date', '$hono_faculty', '$hono_qty', '$hono_expenditure', '$hono_revenue', '$hono_remarks', 
  '$momo_detail', '$momo_date', '$momo_faculty', '$momo_qty', '$momo_expenditure', '$momo_revenue', '$momo_remarks',
  '$post_detail', '$post_date', '$post_faculty', '$post_qty', '$post_expenditure', '$post_revenue', '$post_remarks',
  '$Media_detail','$Media_date','$Media_faculty','$Media_qty','$Media_expenditure','$Media_revenue','$Media_remarks',
  '$print_detail','$print_date','$print_faculty','$print_qty','$print_expenditure','$print_revenue','$print_remarks',
'$travel_detail','$travel_date','$travel_faculty','$travel_qty','$travel_expenditure','$travel_revenue','$travel_remarks',
  '$food_detail','$food_date','$food_faculty','$food_qty','$food_expenditure','$food_revenue','$food_remarks',
 '$expense_detail','$expense_date','$expense_faculty','$expense_qty','$expense_expenditure','$expense_revenue','$expense_remarks',
  '$report_detail','$report_date','$report_faculty','$report_qty','$report_expenditure','$report_revenue','$report_remarks',
  '$sponsor_info','$sponsor_expenditure','$sponsor_revenue','$sponsor_remarks','$revenue');";
 $result = mysqli_query($connect, $query);
  
  $result1=mysqli_query($connect,"select * from `eventlist1`");
  $res=mysqli_fetch_array($result1);
  
 ?>

<!DOCTYPE html>
<head>
<title>app form</title>
<style>
h2{color:#FF0000;}
table,td{border:solid 1px #37568C;border-spacing:0;}
</style>
</head>
<body>
<table >
 <tr>
	<td colspan="8"><h1 align=center >KUMARAGURU COLLEGE OF TECHNOLOGY, COIMBATORE-641 049</h1>
	<h2 align=center >ATTENDING FDP/TRAINING/CONFERENCE/IV-PERMISSION & EXPENDITURE APPROVAL FORM- ACADEMIC </h2></td>
	<td colspan="2"><p align=center>FORM NO:AC/ATT/15-16</p><p align=center>VERSION NO: 5.0</P></td>
 </tr>
 <tr height=50px>
    
	<td width=10% colspan="2" bgcolor=#B2B9C3> Department Name: </td>
	<td width=10%> <?php echo $department ?></td>
	<td width=15% bgcolor=#B2B9C3> Faculty-in-charge: </td>
	<td width=30% colspan="2">  <?php echo $facincharge ?></td>
	<td width=10% bgcolor=#B2B9C3> Submission Date </td>
	<td width=30% colspan="3"> <?php echo $res['sdate']?></td>
 </tr>
 <tr height=50px>
    
	<td colspan="2"  width=20% bgcolor=#B2B9C3>1. Title of the Event/programme:</td>
	<td colspan="3" >  <?php echo $event_title ?></td>
	<td colspan="2" width=20% bgcolor=#B2B9C3> 2. Event Venue</td>
    <td colspan="3"> <?php echo $event_venue ?></td>
  </tr>
  <tr height=50px>
    
	<td colspan="2"  bgcolor=#B2B9C3>3. Details of the event/programme:(Draft agenda/Brouchure to be attached)</td>
	<td colspan="3" >  <?php echo $details ?></td>
	<td colspan="2"  width=20% bgcolor=#B2B9C3>4. Event Date(s):  <br> Event Duration (No of days):<br>  Event Time(From To):</td>
    <td colspan="3" >  <?php echo $event_date ?></td>
  </tr>
 
  <tr height=50px>
     
	<td colspan="2" bgcolor=#B2B9C3>5. Purpose/outcome of the Event/programme:<br>(Details to be attached)</td>
	<td colspan="3" >  <?php echo $outcome ?></td>
	<td colspan="2" width=20 bgcolor=#B2B9C3> 6. Resource Persons: Name,Designation,Organistion<br>(Details to be attached)</td>
    <td colspan="3">  <?php echo $resource_person ?></td>
  </tr>
  <tr>
  
    <td bgcolor=#B2B9C3>7. Details of Participants expected</td>
	<td bgcolor=#B2B9C3 width=10%>Departments concerned</td>
	<td bgcolor=#B2B9C3>No of FACULTY expected</td>
	<td bgcolor=#B2B9C3>No of Students expected</td>
	<td bgcolor=#B2B9C3>No of Industry Persons expected</td>
	<td bgcolor=#B2B9C3>Total No of participants</td>
	<td bgcolor=#B2B9C3>Registration Fee per head(Rs)</td>
	<td bgcolor=#B2B9C3>For FACULTY</td>
	<td bgcolor=#B2B9C3>For Students</td>
	<td bgcolor=#B2B9C3>For Industry</td>
  </tr>
 <tr height=50px> 
	<td align=right bgcolor=#B2B9C3>KCT</td>
	<td rowspan="2" align=center>CSE</td>
	<td> <?php echo $knfaculty ?></td>
	<td> <?php echo $knstudents ?></td>
	<td> <?php echo $knindustry?></td>
	<td> </td>
	<td align=right bgcolor=#B2B9C3>KCT</td>
	<td> <?php echo $kffaculty ?></td>
	<td> <?php echo $kfstudents ?></td>
	<td> <?php echo $kfindustry ?></td>
 </tr>
 <tr height=50px> 
	<td align=right bgcolor=#B2B9C3>External</td>
	<td> <?php echo $enfaculty ?></td>
	<td> <?php echo $enstudents ?></td>
	<td> <?php echo $enindustry ?></td>
	<td></td>
	<td align=right bgcolor=#B2B9C3>External</td>
	<td> <?php echo $effaculty ?></td>
	<td> <?php echo $efstudents ?></td>
	<td> <?php echo $efindustry ?></td>
 </tr>
 <tr height=80px> <td colspan="10" align=center><h3>TASKS/REQUIREMENTS WITH STATUS,TARGET DATES, FACULTY RESPONSIBLE, EXPENDITURE & REVENUE ESTIMATED</h3></td></tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>TASK/REQUIREMENTS</td>
	<td width=20% bgcolor=#B2B9C3 colspan="2">Details OF TASKS/REQUIREMENTS</td>
	<td width=15% bgcolor=#B2B9C3>TARGET DATE FOR COMPLETION</td>
	<td bgcolor=#B2B9C3>FACULTY RESPONSIBLE</td>
	<td bgcolor=#B2B9C3>QTY Required</td>
	<td bgcolor=#B2B9C3>Estimated Expenditure(Rs)</td>
	<td width=10px bgcolor=#B2B9C3>Estimated Revenue(Rs)</td>
	<td width=30% bgcolor=#B2B9C3 >Remarks</td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>1.Honorarium/Consultancy fee</td>
	<td colspan="2"> <?php echo $hono_detail ?></td>
	<td> <?php echo $hono_date ?></td>
	<td> <?php echo $hono_faculty ?></td>
	<td> <?php echo $hono_qty ?></td>
	<td> <?php echo $hono_expenditure ?></td>
	<td> <?php echo $hono_revenue ?></td>
	
	<td > <?php echo $hono_remarks ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>2.Momento/Price(if required)</td>
	<td colspan="2"> <?php echo $momo_detail ?></td>
	<td> <?php echo $momo_date ?></td>
	<td> <?php echo $momo_faculty ?></td>
	<td> <?php echo $momo_qty ?></td>
	<td> <?php echo $momo_expenditure ?></td>
	<td> <?php echo $momo_revenue ?></td>
	
	<td > <?php echo $momo_remarks ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>3.Postage expenses</td>
	<td colspan="2"> <?php echo $post_detail ?></td>
	<td><?php echo $post_date ?></td>
	<td><?php echo $post_faculty ?></td>
	<td><?php echo $post_qty ?></td>
	<td><?php echo $post_expenditure ?></td>
	<td><?php echo $post_revenue ?></td>
	
	<td ><?php echo $post_remarks ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>4.Media/Advertisement expenses(if required)</td>
	<td colspan="2"><?php echo $Media_detail ?></td>
	<td><?php echo $Media_date ?></td>
	<td><?php echo $Media_faculty ?></td>
	<td><?php echo $Media_qty ?></td>
	<td><?php echo $Media_expenditure ?></td>
	<td><?php echo $Media_revenue ?></td>
	
	<td ><?php echo $Media_remarks ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>5.Printing & Stationery-Poster,invitation,Banner,Backdrop</td>
	<td colspan="2"><?php echo $print_detail?></td>
	<td ><?php echo $print_date?></td>
	<td><?php echo $print_faculty?></td>
	<td><?php echo $print_qty?></td>
	<td><?php echo $print_expenditure?></td>
	<td><?php echo $print_revenue?></td>
	<td><?php echo $print_remarks?></td>
	
	
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>6.Travel & Accomodation expenses(if required)</td>
	<td colspan="2"> <?php echo $travel_detail?></td>
	<td> <?php echo $travel_date?></td>
	<td> <?php echo $travel_faculty?></td>
	<td> <?php echo $travel_qty?></td>
	<td> <?php echo $travel_expenditure?></td>
	<td> <?php echo $travel_revenue?></td>
	
	<td > <?php echo $travel_remarks?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>7.Food-Refreshments & Lunch(if required)</td>
	<td colspan="2"> <?php echo $food_detail?></td>
	<td> <?php echo $food_date?></td>
	<td> <?php echo $food_faculty?></td>
	<td> <?php echo $food_qty?></td>
	<td> <?php echo $food_expenditure?></td>
	<td> <?php echo $food_revenue?></td>
	
	<td > <?php echo $food_remarks?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>8.Miscellaneous expenses for stage/Reception(if required)</td>
	<td colspan="2"> <?php echo $expense_detail?></td>
	<td><?php echo $expense_date?></td>
	<td><?php echo $expense_faculty?></td>
	<td><?php echo $expense_qty?></td>
	<td><?php echo $expense_expenditure?></td>
	<td><?php echo $expense_revenue?></td>
	
	<td ><?php echo $expense_remarks?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>9.Event report/Press Release/Archieve submission</td>
	<td colspan="2"> <?php echo $report_detail?></td>
	<td> <?php echo $report_date?></td>
	<td> <?php echo $report_faculty?></td>
	<td> <?php echo $report_qty?></td>
	<td> <?php echo $report_expenditure?></td>
	<td> <?php echo $report_revenue?></td>
	
	<td > <?php echo $report_remarks?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>10.Expected Revenue from Registration fee</td>
	<td colspan="5" align=center>students & staff</td>
	<td></td>
	<td>  <?php echo $revenue?></td>
	<td ></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>11.Sponsorship/Funding expected/applied/obtained</td>
	<td colspan="5"> <?php echo $sponsor_info?> </td>
	<td> <?php echo $sponsor_expenditure?></td>
	<td> <?php echo $sponsor_revenue?></td>
	<td > <?php echo $sponsor_remarks?></td>
 </tr>
 
 <tr height=100px>
	<td colspan="2" bgcolor=#B2B9C3>Total Funds Allotted for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td></td>
	<td colspan="2" bgcolor=#B2B9C3>Total Funds utilized so for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td></td>
	<td  colspan="2" bgcolor=#B2B9C3>Total Expenditure ESTIMATED(Rs):</td>
	<td colspan="2"></td>
		
 </tr>
 <tr height=100px>
	<td colspan="2" bgcolor=#B2B9C3>Budget Ref.code for RO Budget head<br>(9 digits-xxD01ROxx)</td>
	<td></td>
	<td colspan="2" bgcolor=#B2B9C3>Balance Funds available for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td></td>
	<td  colspan="2" bgcolor=#B2B9C3>Total Funds required from KCT(Rs):</td>
	<td colspan="2"></td>
		
 </tr>
 <tr height=100px>
  <td width=30px bgcolor=#B2B9C3>Signature:</td>
  <td width=50px ></td>
  <td></td>
  <td bgcolor=#B2B9C3 >AAD Ref No:</td>
  <td colspan="2"></td>
  <td colspan="2"></td>
  <td colspan="2"></td>
  </tr>
 <tr height=100px>
  <td width=30px rowspan="2" bgcolor=#B2B9C3>Date:</td>
  <td width=50px ></td>
  <td></td>
  <td rowspan="2"></td>
  <td colspan="2"></td>
  <td colspan="2"></td>
  <td colspan="2"></td>
  </tr>
 <tr height=40px>
	<td bgcolor=#B2B9C3>Faculty-in-charge</td>
	<td bgcolor=#B2B9C3>HOD</td>
	<td colspan="2" bgcolor=#B2B9C3>Head-AAD</td>
	<td colspan="2" bgcolor=#B2B9C3>PRINCIPAL</td>
	<td colspan="2" bgcolor=#B2B9C3>JC</td>
 </tr>
 </table>
 <br>
 <br>
 
 <a href="home1.php" align=center>HOME</a> 
	</body>
 </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  