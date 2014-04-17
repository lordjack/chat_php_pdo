<?php
//	if(!isset($_SESSION)) 
//	{ 
//		session_start(); 
//	}
include('connection.php');
$username = $_POST['usuario'];
$password = $_POST['password'];

//$sql = "SELECT * FROM tbllogin where username='$username' and password='$password'";
$sql = "SELECT * FROM usuario where login='$username' and senha='$password'";
$qry = $con->query($sql);
 
if ($qry->fetchColumn() > 0) 
{
	$_SESSION['user'] = $username;
	header('location:home.php');
	exit();
}	
else
{
	$error = "Please check your username and password.";
	header('location:error.php?error='.$error.'');
	exit();
}
?>