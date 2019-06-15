<?php
$connect = mysqli_connect("localhost","root","","users");
session_start(); 
if(isset($_POST['submit']))
{   

    $email=$_POST['email'];
    $passwd=$_POST['password'];
    $compare=substr($email,0,4);
    $result=mysqli_query($connect,"select * from login where email='$email'");
    $res=mysqli_fetch_array($result);
    $_SESSION['email']=$res['email'];
    if($passwd==$res['password'])
        if($compare=="head")
            header("Location:hod_login.php");
        elseif ($email=="principal@kct.ac.in") {
       		header("Location:principal_login.php");
        }
        else
            header("Location:home1.php");
    else
        echo "<script>alert('Invalid login details');</script>";
}


?>
<!doctype html>
<html lang="en">
<head>
<script>
history.pushState(null,null,null);
window.addEventListener('popstate',function(){
 history.pushState(null,null,null);
});
</script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Google</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">

                <img src="images/kct_logo.png" width="200px" height="200px"><br><br>

                <form action="#" method="post">
                    <input placeholder="Email..." name="email" class="form-control" required><br>
                    <input type="password" placeholder="Password..." name="password" class="form-control" required><br>
                    <input type="submit" name="submit" value="Log In" class="btn btn-primary">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>

            </div>
        </div>
    </div>
</body>
</html>