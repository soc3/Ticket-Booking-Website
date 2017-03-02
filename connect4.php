<?php
session_start();
$x=$_POST['a'];
$p=$_POST['b'];
$q=$_POST['c'];
$r=$_POST['e'];
$y=$_POST['d'];
$u=$_SESSION["trainname"];
$v=$_SESSION["from2"];
if(empty($x)||empty($p)||empty($q)||empty($r)||empty($y))
{
   echo "please fill all entries";
}
else
{
$a="1234";  $b="5678"; $c="9891"; $d="4523";$e="";
mysql_connect("localhost","root","");
mysql_select_db("webproject");
echo $y;
echo " ";
if($y == 4)
{
$query="INSERT INTO pnr(name,tickets,p1,p2,p3,p4,trainname,from2) VALUES('$x','$y','$a','$b','$c','$d','$u','$v')";
mysql_query($query);
echo "pnr generated are: ";
echo "for ";
echo $trainname;
echo $a;
echo "\xA";
echo $b;
echo "\n";
echo $c;
echo "\n";
echo $d;
echo "\n";
}
else if($y == 3)
{
$query="INSERT INTO pnr(name,tickets,p1,p2,p3,p4,trainname,from2) VALUES('$x','$y','$a','$b','$c','$e','$u','$v')";
mysql_query($query);
echo "pnr generated are: ";
echo "for ";
echo $trainname;
echo $a;
echo "\n";
echo $b;
echo "\n";
echo $c;
echo "\n";
}
else if($y==2)
{
$query="INSERT INTO pnr(name,tickets,p1,p2,p3,p4,trainname,from2) VALUES('$x','$y','$a','$b','$e','$e','$u','$v')";
mysql_query($query);
echo "pnr generated are: ";
echo "for ";
echo $trainname;
echo $a;
echo "\n";
echo $b;
echo "\n";
}
else if($y==1)
{
$query="INSERT INTO pnr(name,tickets,p1,p2,p3,p4,trainname,from2) VALUES('$x','$y','$a','$e','$e','$e','$u','$v')";
mysql_query($query);
echo "pnr generated are: ";
echo "for ";
echo $trainname;
echo $a;
echo "\n";
}
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