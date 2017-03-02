<?php
session_start();
$x=$_POST['a'];
$y=$_POST['b'];
$p=$_POST['c'];
$q=$_POST['d'];
$r=$_POST['e'];
$s=$_POST['f'];
$u=$_POST['g'];
$v=$_POST['h'];
$l=" ";
$a="1234";  $b="5678"; $c="9891"; $d="4523";$e="";
mysql_connect("localhost","root","");
mysql_select_db("webproject");
$query1="SELECT * from pnr where name='$x' ;";
	$result = mysql_query($query1);
	$row = mysql_fetch_array($result);
if($y > $row[1])
{
	echo "cannot cancel, you have booked less tickets";
}
else if($y==1)
{
	$t=$row[1]-$y;
	if($p==$a)
	{
	$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
    mysql_query($query);		
	}
	else if($p==$b)
	{
		$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
        mysql_query($query);
	}
	else if($p==$c)
	{
	$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
    mysql_query($query);		
	}
	else if($p==$d)
	{
		$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
        mysql_query($query);
	}
$query="UPDATE pnr set tickets='$t' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
echo "Ticket Successfully cancelled";
echo '<a href="connect7.php?data='.$x.'">Booked Ticket History</a>';
}
else if($y==2)
{
	$t=$row[1]-$y;
if($p==$a && $q==$b || $q==$a && $p==$b)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$c && $q==$d||$p==$d && $q==$c)
{
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$a && $q==$c||$p==$c && $q==$a)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$a && $q==$d||$p==$d && $q==$a)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$b && $q==$c||$p==$c && $q==$b)
{
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$b && $q==$d||$p==$d && $q==$b)
{
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
$query="UPDATE pnr set tickets='$t' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
echo "Ticket Successfully cancelled";
echo '<a href="connect7.php?data='.$x.'">Booked Ticket History</a>';
}
else if($y==3)
{
if($p==$a && $q==$b && $r==$c)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$a && $q==$c && $r==$d)
{
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$b && $q==$c && $r==$d)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}
else if($p==$a && $q==$b && $r==$d)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
}

$query="UPDATE pnr set tickets='$t' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
echo "Ticket Successfully cancelled";
echo '<a href="connect7.php?data='.$x.'">Booked Ticket History</a>';
}
else if($y==4)
{
$query="UPDATE pnr set p1='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p2='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p3='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set p4='$l' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
$query="UPDATE pnr set tickets='$t' where name='$x' and trainname='$u' and from2='$v';";
mysql_query($query);
echo "Ticket Successfully cancelled";
echo '<a href="connect7.php?data='.$x.'">Booked Ticket History</a>';
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