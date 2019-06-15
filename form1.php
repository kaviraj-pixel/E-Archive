<?php

?>
<!DOCTYPE html>
<head>
<title>app form</title>
<style>
h2{color:#FF0000;}
table,td{border:solid 1px #37568C;border-spacing:0;}
input,textarea{
    width: 98%;
    height: 50px;
    display: block;
}

 a,input[type=submit]{
      
      text-decoration: none;
      padding: 6px;
     outline:none;
     height:40px;
     width: 80%;
     background:#a95744;
     color:#fff;
     font-size:15px;
     border-radius:4px;
     cursor: pointer;
  font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
     
     }
     input[type=submit]{
	margin-left: 10%;
	border-radius: 8px;
}
     a:hover,input[type=submit]:hover{
       border:2px solid #a95744;
  color:#9c4c36;
   background:white;
   font-weight:bold;
     font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
     }
</style>
</head>
<body>
<form method="post" action="home1.php" >
<table >
 <tr>
	<td colspan="8"><h1 align=center >KUMARAGURU COLLEGE OF TECHNOLOGY, COIMBATORE-641 049</h1>
	<h2 align=center >ATTENDING FDP/TRAINING/CONFERENCE/IV-PERMISSION & EXPENDITURE APPROVAL FORM- ACADEMIC </h2></td>
	<td colspan="2"><p align=center>FORM NO:AC/ATT/15-16</p><p align=center>VERSION NO: 5.0</P></td>
 </tr>
 <tr height=50px>
    
	<td width=10% colspan="2" bgcolor=#B2B9C3> Department Name: </td>
	<td width=10%> <select  name="department">
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
                <option value="EEE">EEE</option>
                <option value="IT" >IT</option>
                <option value="BT" >BT</option>
                </select> </td>
	<td width=15% bgcolor=#B2B9C3> Faculty-in-charge: </td>
	<td width=30% colspan="2"> <input type="text" name="faculty-incharge" autofocus required /></td>
	<td width=10% bgcolor=#B2B9C3> Submission Date </td>
	<td width=30% colspan="3"> </td>
 </tr>
 <tr height=50px>
    
	<td colspan="2"  width=20% bgcolor=#B2B9C3>1. Title of the Event/programme:</td>
	<td colspan="3" >   <input type="text" name="event-title" autofocus required /></td>
	<td colspan="2" width=20% bgcolor=#B2B9C3> 2. Event Venue</td>
    <td colspan="3"><input type="text" name="event-venue" autofocus required /></td>
  </tr>
  <tr height=50px>
      
	<td colspan="2"  bgcolor=#B2B9C3>3. Details of the event/programme:(Draft agenda/Brouchure to be attached)</td>
	<td colspan="3" > <textarea name="details"></textarea> </td>
	<td colspan="2"  width=20% bgcolor=#B2B9C3>4. Event Date(s):  <br> Event Duration (No of days):<br>  Event Time(From To):</td>
    <td colspan="3" >  <input type="date" name="event-date" autofocus required /></td>
  </tr>
 
  <tr height=50px>
     
	<td colspan="2" bgcolor=#B2B9C3>5. Purpose/outcome of the Event/programme:<br>(Details to be attached)</td>
	<td colspan="3" >  <textarea name="outcome"></textarea></td>
	<td colspan="2" width=20 bgcolor=#B2B9C3> 6. Resource Persons: Name,Designation,Organistion<br>(Details to be attached)</td>
    <td colspan="3"><textarea name="resource-person"></textarea> </td>
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
	<td> <input type="number" name="kct-faculty" autofocus min="0"/></td>
	<td> <input type="number" name="kct-students" autofocus min="0"/></td>
	<td> <input type="number" name="kct-industry" autofocus min="0"/> </td>
	<td> </td>
	<td align=right bgcolor=#B2B9C3>KCT</td>
	<td><input type="number" name="kct-facultyf" autofocus min="0"/></td>
	<td><input type="number" name="kct-studentsf" autofocus min="0"/></td>
	<td><input type="number" name="kct-industryf" autofocus min="0"/></td>
 </tr>
 <tr height=50px> 
	<td align=right bgcolor=#B2B9C3>External</td>
	<td><input type="number" name="external-faculty" autofocus min="0"/></td>
	<td><input type="number" name="external-students" autofocus min="0"/></td>
	<td><input type="number" name="external-industry" autofocus min="0"/> </td>
	<td></td>
	<td align=right bgcolor=#B2B9C3>External</td>
	<td><input type="number" name="external-facultyf" autofocus min="0"/></td>
	<td><input type="number" name="external-studentsf" autofocus min="0"/></td>
	<td><input type="number" name="external-industryf" autofocus min="0"/>  </td>
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
	<td colspan="2"><input type="text" name="hono-detail" autofocus /></td>
	<td> <input type="date" name="hono-date" autofocus /></td>
	<td><input type="text" name="hono-faculty" autofocus /></td>
	<td><input type="text" name="hono-qty" autofocus /></td>
	<td> <input type="text" name="hono-expenditure" autofocus /></td>
	<td> <input type="text" name="hono-revenue" autofocus /></td>
	<td> <input type="text" name="hono-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>2.Momento/Price(if required)</td>
        <td colspan="2"><input type="text" name="momo-detail" autofocus /></td>
        <td><input type="date" name="momo-date" autofocus /></td>
	<td><input type="text" name="momo-faculty" autofocus /></td>
	<td><input type="text" name="momo-qty" autofocus /></td>
	<td><input type="text" name="momo-expenditure" autofocus /></td>
        <td><input type="text" name="momo-revenue" autofocus /></td>
	<td><input type="text" name="momo-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>3.Postage expenses</td>
	<td colspan="2"><input type="text" name="post-detail" autofocus /></td>
	<td><input type="date" name="post-date" autofocus /></td>
	<td><input type="text" name="post-faculty" autofocus /></td>
	<td><input type="text" name="post-qty" autofocus /></td>
	<td><input type="text" name="post-expenditure" autofocus /></td>
	<td><input type="text" name="post-revenue" autofocus /></td>	
	<td><input type="text" name="post-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>4.Media/Advertisement expenses(if required)</td>
	<td colspan="2"><input type="text" name="Media-detail" autofocus /></td>
	<td><input type="date" name="Media-date" autofocus /></td>
	<td><input type="text" name="Media-faculty" autofocus /></td>
	<td><input type="text" name="Media-qty" autofocus /></td>
	<td><input type="text" name="Media-expenditure" autofocus /></td>
	<td> <input type="text" name="Media-revenue" autofocus /></td>	
	<td ><input type="text" name="Media-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>5.Printing & Stationery-Poster,invitation,Banner,Backdrop</td>
	<td colspan="2"><input type="text" name="print-detail" autofocus /></td>
	<td > <input type="date" name="print-date" autofocus /></td>
	<td><input type="text" name="print-faculty" autofocus /></td>
	<td> <input type="text" name="print-qty" autofocus /></td>
	<td> <input type="text" name="print-expenditure" autofocus /></td>
	<td><input type="text" name="print-revenue" autofocus /></td>
	<td> <input type="text" name="print-remarks" autofocus /></td>
	
	
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>6.Travel & Accomodation expenses(if required)</td>
	<td colspan="2"><input type="text" name="travel-detail" autofocus /></td>
	<td>  <input type="date" name="travel-date" autofocus /></td>
	<td> <input type="text" name="travel-faculty" autofocus /></td>
	<td> <input type="text" name="travel-qty" autofocus /></td>
	<td><input type="text" name="travel-expenditure" autofocus /></td>
	<td>  <input type="text" name="travel-revenue" autofocus /></td>	
	<td> <input type="text" name="travel-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>7.Food-Refreshments & Lunch(if required)</td>
	<td colspan="2"> <input type="text" name="food-detail" autofocus /></td>
	<td> <input type="date" name="food-date" autofocus /></td>
	<td> <input type="text" name="food-faculty" autofocus /></td>
	<td>  <input type="text" name="food-qty" autofocus /></td>
	<td>  <input type="text" name="food-expenditure" autofocus /></td>
	<td><input type="text" name="food-revenue" autofocus /></td>	
	<td><input type="text" name="food-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>8.Miscellaneous expenses for stage/Reception(if required)</td>
	<td colspan="2"><input type="text" name="expense-detail" autofocus /></td>
	<td><input type="date" name="expense-date" autofocus /></td>
	<td><input type="text" name="expense-faculty" autofocus /></td>
	<td> <input type="text" name="expense-qty" autofocus /></td>
	<td> <input type="text" name="expense-expenditure" autofocus /></td>
	<td> <input type="text" name="expense-revenue" autofocus /></td>	
	<td > <input type="text" name="expense-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>9.Event report/Press Release/Archieve submission</td>
	<td colspan="2"><input type="text" name="report-detail" autofocus /></td>
	<td> <input type="date" name="report-date" autofocus /></td>
	<td><input type="text" name="report-faculty" autofocus /></td>
	<td><input type="text" name="report-qty" autofocus /></td>
	<td> <input type="text" name="report-expenditure" autofocus /></td>
	<td><input type="text" name="report-revenue" autofocus /></td>	
	<td> <input type="text" name="report-remarks" autofocus /></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>10.Expected Revenue from Registration fee</td>
	<td colspan="6" align=center>students & staff</td>
	
	<td><input type="text" name="revenue" autofocus/></td>
	<td ></td>
 </tr>
 <tr height=50px>
	<td colspan="2" bgcolor=#B2B9C3>11.Sponsorship/Funding expected/applied/obtained</td>
	<td colspan="6"><textarea name="sponsor-info" placeholder="Details about the sponsorship"></textarea></td>
	
	<td><input type="text" name="sponsor-revenue" autofocus /></td>
	<td><input type="text" name="sponsor-remarks" autofocus /></td>
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
    <br><br>
  <input name="submit" type="submit" value="Submit" />
</form>
 
 <h3 align="center">
 <a href="home1.php" align=center>HOME</a> </h3>
	</body>
 </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  