<?php
function mail_to_user($status,$to_mail_name,$event_name){
	require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();                               
$mail->Host = 'smtp.gmail.com;';
$mail->SMTPAuth = true;                       
$mail ->Username = 'kaviraj.writer123@gmail.com';
$mail ->Password = '05/09/1998loveu';
$mail->SMTPSecure = 'tls';                           
$mail->Port = 587;                                   
$mail->setFrom('kaviraj.writer123@gmail.com', 'From Event');
$mail->addCC('kishore1.16cs@kct.ac.in');
$mail->addAddress($to_mail_name); 
$mail->IsHTML(true);                                 
$mail->Subject = 'Event Notification';
$mail->Body    = 'The '.$event_name.' is '.$status.' by the Principal';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo '<script>alert("Mail could not be sent.");</script>';
} else {
    echo '<script>alert("Mail has been sent.");</script>';
}

}
 $connect = mysqli_connect("localhost","root","","event");




 if(isset($_POST['approve']))
 {
   $i=$_POST["approve"];
   $i=substr($i,0,10)." ".substr($i,10,18);
  $result=mysqli_query($connect,"update `eventlist1` set `principal`='1' where `sdate` ='$i'");
  $result2=mysqli_query($connect,"select * from `eventlist1` where `sdate` ='$i'");
  $res2=mysqli_fetch_array($result2);
  $department=strtolower($res2['department']);
  $expenditure=$res2['totalexp'];
  $result3=mysqli_query($connect,"select * from amount where `department`='$department'");
  $res3=mysqli_fetch_array($result3);
  $total=$res3['totalrev'];
  $updated_amount=$total-$expenditure;
  $result4=mysqli_query($connect,"update `amount` set `totalrev`='$updated_amount' where `department`='$department'");
  $to_mail_name=$res2['faculty_email'];
  $event_name=$res2['event_title'];
  $status="Approved";
  mail_to_user($status,$to_mail_name,$event_name);

 }
 if(isset($_POST['reject']))
 {
  $i=$_POST["reject"];
  $i=substr($i,0,10)." ".substr($i,10,18);
  $result=mysqli_query($connect,"update `eventlist1` set `principal`='2' where `sdate` ='$i'");
   $result2=mysqli_query($connect,"select `faculty_email`,`event_title` from `eventlist1` where `sdate` ='$i'");
  $res2=mysqli_fetch_array($result2);
  $to_mail_name=$res2['faculty_email'];
  $event_name=$res2['event_title'];
  $status="Rejected";
  mail_to_user($status,$to_mail_name,$event_name);
 }
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
 <?php
  
 $result=mysqli_query($connect,"select * from `eventlist1` where principal=0 && hod=1");

 
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

echo "<tr>";
echo "<th colspan=2 style='text-align:center;'>";
echo "<p>";
echo '<button type="submit" name="submit" value='.$i.'>'."View".'</button>';
echo "</p>";
echo "</th>";
echo "</tr>";
echo '</form>';
echo "<form action='#' method='post'>";
echo "<tr>";
echo "<td style='text-align:center;'>";;
echo "<p>";
echo '<button type="submit" name="approve" value='.$i.'>'."Approve".'</button>';
echo "</p>";
echo "</td>";
echo "<td style='text-align:center;'>";
echo "<p>";
echo '<button type="submit" name="reject" value='.$i.'>'."Reject".'</button>';
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</form>";

 }
 
 ?>
 
 
 
 </body>
 </html>