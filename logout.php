<?php
session_start();

if($_SESSION['status']!="Active")
{
	header("location:login.php");
	header("Cache-Control","no-cache,no-store,must-revalidate");
}

?>
