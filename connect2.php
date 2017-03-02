<?php
session_start();
$x=$_POST['a'];
$y=$_POST['b'];
if (empty($x) || empty($y) ) 
{
	# code...
	echo "Fill all entries";
} 
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("webproject");
	$query1="SELECT * from users where username='$x';";
	$result = mysql_query($query1);
	$count = mysql_num_rows($result);
	if($count == 0)
	{
		echo "SignUp First!";
	}
	else
	{
		header("location:home.php");
	}
}

?>