<?php

$host= "localhost";
$dbUsername= "root";
$dbpassword= "";
$dbname= "shop_net";
	
$connect= new mysqli($host,$dbUsername,$dbpassword,$dbname);	
if($connect->connect_error)
{
	die('Connection Error');
}
else
{		
	$lemail=$_POST['lemail'];
	$lpassword=$_POST['lpassword'];
	
	$sql= "SELECT lemail From loginsign Where lemail='$lemail' AND lpassword='$lpassword'";
		
	$result= $connect->query($sql);	
	if($result-> num_rows> 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<script language="javascript">';
			echo 'alert("Welcome to SHP@NET")';
			echo '</script>';
			include("product.html");
		}
	}
	else
	{
			echo '<script language="javascript">';
			echo 'alert("Signup before login")';
			echo '</script>';
			include("signup.html");
	}
	$connect->close();
}	

?>

