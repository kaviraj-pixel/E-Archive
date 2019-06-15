<?php
 $connect = mysqli_connect("localhost","root","","event");
 session_start();
 $faculty_email=$_SESSION['email'];
 $compare_dept=strtoupper(substr($faculty_email,-13,-10));
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
 //mail area
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();                               
$mail->Host = 'smtp.gmail.com;';
$mail->SMTPAuth = true;                       
$mail ->Username = '#your email';
$mail ->Password = '#yout email password';
$mail->SMTPSecure = 'tls';                           
$mail->Port = 587;                                   
$mail->setFrom('#your email', 'From Event');
if($department=="CSE"){
$mail->addAddress('#receivers password', ''); 
}
if($department=="ECE"){
$mail->addAddress('#receivers password', ''); 
}
$mail->IsHTML(true);                                 
$mail->Subject = 'Event Notification';
$mail->Body    = 
'<table>
  <tr>
    <th>Staff Coordiantor:</th>
    <td>'.$facincharge.'</td>
  </tr>
   <tr>
    <th>Event Name:</th>
    <td>'.$event_title.'</td>
  </tr>
</table>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo '<script>alert("Mail could not be sent.");</script>';
} else {
    echo '<script>alert("Mail has been sent.");</script>';
}

  }
  if(isset($_POST['delete']))
 {
  $i=$_POST["delete"];
  $i=substr($i,0,10)." ".substr($i,10,18);
  $result5=mysqli_query($connect,"delete from `eventlist1` where `sdate` ='$i'");
}
  $result=mysqli_query($connect,"select * from `eventlist1` where faculty_email='$faculty_email'");
   $result1=mysqli_query($connect,"select * from `amount` where department='$compare_dept'");
  $res1=mysqli_fetch_array($result1);
$balance=$res1['totalrev']-$res1['utrev'];



 
 ?>
 <html>
 <head>
 <title>home</title>
 <style>
 table{
	 border:3px solid #a95744;
	 width:400px;
	 float:left;
	 margin: 30px;
	 display:inline-block;
   padding: 10px;
 }
 th{
  text-align: right;
  font: 400 15px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
  font-weight: bold;
  margin: 2px;
  width: 50%;
  padding: 5px;
 }
 td{
  text-align: left;
  font: 400 15px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
  
  margin: 2px;
  
 }
 
 
				#accept{
        font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;   text-align: center;  
          box-sizing: border-box;
          border-radius: 10px;
          background-color: lightgreen;
          color:black;
        }
        #request{
          font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;text-align: center;  
          box-sizing: border-box;
          border-radius: 10px;
          background-color: lightblue;
          color:black;
        }
        #reject{
          font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;   text-align: center;  
          box-sizing: border-box;
          border-radius: 10px;
          background-color: #ca4c4cfc;
          color:white;
        }
	
   
 a,button[type=submit]{
      
      text-decoration: none;
      padding: 6px;
     outline:none;
     height:40px;
     width: 60%;
     background:#a95744;
     color:#fff;
     font-size:15px;
     border-radius:4px;
     cursor: pointer;
  font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
     
     }
     button[type=submit]{
  margin-left: 10%;
  border-radius: 8px;
}
     a:hover,button[type=submit]:hover{
       border:2px solid #a95744;
  color:#9c4c36;
   background:white;
   font-weight:bold;
     font-family:  Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
     }
     #title{
      text-align: center;
       font: 400 23px Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
       border-bottom: 1pt solid black;
       
     }
 </style>
 </head>
 <body>
  <h3 align="right">
  <a href="logout.php" >logout</a></h3>
   <h3 align=right style="font-weight: bold">AVAILABLE BALANCE:<?php echo $balance;?></h3>
 <h3 align=center>
<a  href="form1.php">ADD NEW EVENT</a></h3>
<center>
 <?php
  
 
 echo '<form action="view1.php" method="post">';
 
 

 while($res=mysqli_fetch_array($result))
 { echo "<table>";
	 
	 $i=$res['sdate'];
	 $i=str_replace(' ','',$i);
	
	 
	
	 echo "<tr >";
	 echo "<th colspan=2 id='title'>".$res['event_title']."</th>";
	 echo"</tr><tr></tr><tr></tr>";
	  echo "<tr>";
	 echo  "<th>COORDINATOR :</th>";
	 if($res['coordinator']==0)
		 echo "<td id='request'>REQUESTED</td>";
	 else if($res['coordinator']==1)
		 echo "<td id='accept'>ACCEPTED</td>";
    
	 echo "</tr>";
	 echo "<tr>";
	 
	 echo  "<th>HOD         :</th>";
	 if($res['hod']==0)
		 echo "<td id='request'>REQUESTED</td>";
	 else if($res['hod']==1)
		  echo "<td id='accept'>ACCEPTED</td>";
    else if($res['hod']==2)
      echo "<td id='reject'>REJECTED</td>";
	  echo "</tr>";
	  echo "<tr>";
	 
	 echo  "<th>PRINCIPAL   :</th>";
	 if($res['principal']==0)
		 echo "<td id='request'>REQUESTED</td>";
	 else if($res['principal']==1)
		  echo "<td id='accept'>ACCEPTED</td>";
   else if($res['principal']==2)
      echo "<td id='reject'>REJECTED</td>";
	  echo "</tr>";
echo "<tr><th>Expenditure  :  </th><td style='text-align:center;'>".$res['totalexp']."</td></tr>";
echo "<tr><th>Expenditure Status:   </th><td style='text-align:center;'>";
if($balance>$res['totalexp']){echo "Available";}else{echo "Not Available";}
echo "</td></tr>";
echo "<tr>";
echo "<th>";
echo "<p>";
echo '<button type="submit" name="submit" value='.$i.'>'."View".'</button>';
echo "</p>";
echo "</th>";
echo '</form>';
echo "<form action='#' method='post'>";
echo "<td style='text-align:center;'>";
echo "<p>";
echo '<button type="submit" name="delete" value='.$i.'>'."Delete".'</button>';
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
 echo "</form>";

 }

 ?>
 
 </center>

 </body>
 </html>
