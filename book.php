<?php
session_start();
$s=$_SESSION["trainname"];
//echo $s;
if(isset($_GET["data"]) || isset($_GET["data2"]))
{
	$data=$_GET["data"];
	$data2=$_GET["data2"];
	//echo $data;//trainname 
	//echo $data2;//from2
  $_SESSION["trainname"]=$data;
  $_SESSION["from2"]=$data2;
	    		echo "Ticket is Available Book Now";
      	//$query2="UPDATE trains set available='$s3' where trainname='$data' and from2='$data2';";
		  //  $result=mysql_query($query2);
		    echo '<html>
<form method = "POST" action ="connect4.php">
Name : <br>
<input type="text" name="a" size="30"><br>
Age : <br>
<input type="text" name="b" size="30"><br>
Gender : <br>
<input type="text" name="c" size="30"><br>
Berth Prefernce : <br>
<input type="text" name="e" size="30"><br>
No. of Tickets : <br>
<input type="text" name="d"   size="30"><br>
<input type="submit" value="submit"><br>
<input type = "reset" value="reset"><br>
</form>
</html>
';
}	
?>
<html>

 <style type="text/css">
body
{
background-image:url("train.jpg");
}
</style>

</html>