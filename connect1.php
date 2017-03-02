<?php

$x=$_POST['username'];
$y=$_POST['password'];
$z=$_POST['cpassword'];
$m=$_POST['email'];
$n=$_POST['dob'];
$o=$_POST['address'];
$p=$_POST['pincode'];
$q=$_POST['phone'];
$b = '@';
if (empty($x) || empty($y) || empty($z) || empty($m)  || empty($n) || empty($o) || empty($p) ) 
{
	# code...
	echo "Fill all entries";
} 
else if ((strpos($m,$b) == false))
	echo "Enter valid email";
else if($y!=$z)
	echo "Password doesn't match";
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("webproject");
	$query1="SELECT * from users where username='$x';";
	$result = mysql_query($query1);
	$count = mysql_num_rows($result);
	if($count == 0)
	{
		$query="INSERT INTO users(username,password,cpassword,email,dob,address,pincode,phone) VALUES('$x','$y','$z','$m','$n','$o','$p','$q');";
		mysql_query($query);
		echo "Database Updated, SignUp Successful";
	}
	else
	{
		echo "User exists!!";
	}
}

?>