<?php


 $connect = mysqli_connect("localhost","root","","event");
   $i=$_POST["submit"];
    
   
	 $i=substr($i,0,10)." ".substr($i,10,18);
	
  $result=mysqli_query($connect,"select * from `eventlist1` where `sdate` ='$i'");
  $res=mysqli_fetch_array($result);
  
    
  $result1=mysqli_query($connect,"select * from `amount`");
  $res1=mysqli_fetch_array($result1);


$balance=$res1['totalrev']-$res1['utrev'];



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
	<td width=10%> <?php echo $res['department'] ?></td>
	<td width=15% bgcolor=#B2B9C3> Faculty-in-charge: </td>
	<td width=30% colspan="2">  <?php echo $res['facincharge'] ?></td>
	<td width=10% bgcolor=#B2B9C3> Submission Date </td>
	<td width=30% colspan="3"> <?php echo $res['sdate']?></td>
 </tr>
 <tr height=50px>
    
	<td colspan="2"  width=20% bgcolor=#B2B9C3>1. Title of the Event/programme:</td>
	<td colspan="3" >  <?php echo $res['event_title'] ?></td>
	<td colspan="2" width=20% bgcolor=#B2B9C3> 2. Event Venue</td>
    <td colspan="3"> <?php echo $res['event_venue'] ?></td>
  </tr>
  <tr height=50px>
    
	<td colspan="2"  bgcolor=#B2B9C3>3. Details of the event/programme:(Draft agenda/Brouchure to be attached)</td>
	<td colspan="3" >  <?php echo $res['details'] ?></td>
	<td colspan="2"  width=20% bgcolor=#B2B9C3>4. Event Date(s):  <br> Event Duration (No of days):<br>  Event Time(From To):</td>
    <td colspan="3" >  <?php echo $res['event_date'] ?></td>
  </tr>
 
  <tr height=50px>
     
	<td colspan="2" bgcolor=#B2B9C3>5. Purpose/outcome of the Event/programme:<br>(Details to be attached)</td>
	<td colspan="3" >  <?php echo $res['outcome'] ?></td>
	<td colspan="2" width=20 bgcolor=#B2B9C3> 6. Resource Persons: Name,Designation,Organistion<br>(Details to be attached)</td>
    <td colspan="3">  <?php echo $res['resource_person']?></td>
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
	<td align=center bgcolor=#B2B9C3>KCT</td>
	<td rowspan="2" align=center>CSE</td>
	<td> <?php echo $res['knfaculty'] ?></td>
	<td> <?php echo $res['knstudents'] ?></td>
	<td> <?php echo $res['knindustry']?></td>
	<td> <?php echo $res['kntotal'] ?></td>
	<td align=center bgcolor=#B2B9C3>KCT</td>
	<td> <?php echo $res['kffaculty'] ?></td>
	<td> <?php echo $res['kfstudents'] ?></td>
	<td> <?php echo $res['kfindustry'] ?></td>
 </tr>
 <tr height=50px> 
	<td align=center bgcolor=#B2B9C3>External</td>
	<td> <?php echo $res['enfaculty'] ?></td>
	<td> <?php echo $res['enstudents'] ?></td>
	<td> <?php echo $res['enindustry'] ?></td>
	<td> <?php echo $res['entotal'] ?></td>
	<td align=center bgcolor=#B2B9C3>External</td>
	<td> <?php echo $res['effaculty'] ?></td>
	<td> <?php echo $res['efstudents'] ?></td>
	<td> <?php echo $res['efindustry'] ?></td>
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
	<td colspan="2"> <?php echo $res['hono_detail'] ?></td>
	<td> <?php echo $res['hono_date'] ?></td>
	<td> <?php echo $res['hono_faculty'] ?></td>
	<td> <?php echo $res['hono_qty'] ?></td>
	<td> <?php echo $res['hono_expenditure'] ?></td>
	<td> <?php echo $res['hono_revenue'] ?></td>
	
	<td > <?php echo $res['hono_remarks'] ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>2.Momento/Price(if required)</td>
	<td colspan="2"> <?php echo $res['momo_detail'] ?></td>
	<td> <?php echo $res['momo_date'] ?></td>
	<td> <?php echo $res['momo_faculty'] ?></td>
	<td> <?php echo $res['momo_qty'] ?></td>
	<td> <?php echo $res['momo_expenditure'] ?></td>
	<td> <?php echo $res['momo_revenue'] ?></td>
	
	<td > <?php echo $res['momo_remarks'] ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>3.Postage expenses</td>
	<td colspan="2"> <?php echo $res['post_detail'] ?></td>
	<td><?php echo $res['post_date'] ?></td>
	<td><?php echo $res['post_faculty'] ?></td>
	<td><?php echo $res['post_qty'] ?></td>
	<td><?php echo $res['post_expenditure'] ?></td>
	<td><?php echo $res['post_revenue']?></td>
	
	<td ><?php echo $res['post_remarks'] ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>4.Media/Advertisement expenses(if required)</td>
	<td colspan="2"><?php echo $res['Media_detail'] ?></td>
	<td><?php echo $res['Media_date'] ?></td>
	<td><?php echo $res['Media_faculty'] ?></td>
	<td><?php echo $res['Media_qty'] ?></td>
	<td><?php echo $res['Media_expenditure'] ?></td>
	<td><?php echo $res['Media_revenue'] ?></td>
	
	<td ><?php echo $res['Media_remarks'] ?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>5.Printing & Stationery-Poster,invitation,Banner,Backdrop</td>
	<td colspan="2"><?php echo $res['print_detail']?></td>
	<td ><?php echo $res['print_date']?></td>
	<td><?php echo $res['print_faculty']?></td>
	<td><?php echo $res['print_qty']?></td>
	<td><?php echo $res['print_expenditure']?></td>
	<td><?php echo $res['print_revenue']?></td>
	<td><?php echo $res['print_remarks']?></td>
	
	
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>6.Travel & Accomodation expenses(if required)</td>
	<td colspan="2"> <?php echo $res['travel_detail']?></td>
	<td> <?php echo $res['travel_date']?></td>
	<td> <?php echo $res['travel_faculty']?></td>
	<td> <?php echo $res['travel_qty']?></td>
	<td> <?php echo $res['travel_expenditure']?></td>
	<td> <?php echo $res['travel_revenue']?></td>
	
	<td > <?php echo $res['travel_remarks']?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>7.Food-Refreshments & Lunch(if required)</td>
	<td colspan="2"> <?php echo $res['food_detail']?></td>
	<td> <?php echo $res['food_date']?></td>
	<td> <?php echo $res['food_faculty']?></td>
	<td> <?php echo $res['food_qty']?></td>
	<td> <?php echo $res['food_expenditure']?></td>
	<td> <?php echo $res['food_revenue']?></td>
	
	<td > <?php echo $res['food_remarks']?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>8.Miscellaneous expenses for stage/Reception(if required)</td>
	<td colspan="2"> <?php echo $res['expense_detail']?></td>
	<td><?php echo $res['expense_date']?></td>
	<td><?php echo $res['expense_faculty']?></td>
	<td><?php echo $res['expense_qty']?></td>
	<td><?php echo $res['expense_expenditure']?></td>
	<td><?php echo $res['expense_revenue']?></td>
	
	<td ><?php echo $res['expense_remarks']?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>9.Event report/Press Release/Archieve submission</td>
	<td colspan="2"> <?php echo $res['report_detail']?></td>
	<td> <?php echo $res['report_date']?></td>
	<td> <?php echo $res['report_faculty']?></td>
	<td> <?php echo $res['report_qty']?></td>
	<td> <?php echo $res['report_expenditure']?></td>
	<td> <?php echo $res['report_revenue']?></td>
	
	<td > <?php echo $res['report_remarks']?></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>10.Expected Revenue from Registration fee</td>
	<td colspan="6" align=center>students & staff</td>
	
	<td>  <?php echo $res['revenue']?></td>
	<td ></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>11.Sponsorship/Funding expected/applied/obtained</td>
	<td colspan="6"> <?php echo $res['sponsor_info']?> </td>
	
	<td> <?php echo $res['sponsor_revenue']?></td>
	<td > <?php echo $res['sponsor_remarks']?></td>
 </tr>
 
 <tr height=100px>
	<td colspan="2" bgcolor=#B2B9C3>Total Funds Allotted for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td><?php echo $res1['totalrev']?></td>
	<td colspan="2" bgcolor=#B2B9C3>Total Funds utilized so for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td><?php echo $res1['utrev']?></td></td>
	<td  colspan="2" bgcolor=#B2B9C3>Total Expenditure ESTIMATED(Rs):</td>
	<td colspan="2"> <?php echo $res['totalexp']?></td>
		
 </tr>
 <tr height=100px>
	<td colspan="2" bgcolor=#B2B9C3>Budget Ref.code for RO Budget head<br>(9 digits-xxD01ROxx)</td>
	<td> </td></td>
	<td colspan="2" bgcolor=#B2B9C3>Balance Funds available for REVENUE ORGANISING(RO) budget head:(Rs)</td>
	<td><?php echo $balance?></td>
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
 <tr height=50px>
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
 
	</body>
 </html>
  