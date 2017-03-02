<?php
session_start();
$x=$_GET["data"];
mysql_connect("localhost","root","");
	mysql_select_db("webproject");
	$query1="SELECT * from pnr where name='$x' ;";
	$result = mysql_query($query1);
	 $f=0;
	 echo "<table border='2'>";
	echo '<tr>
   <th>Name</th>
   <th>Tickets</th>
   <th>Pnr 1</th>
   <th>Pnr 2</th>
   <th>Pnr 3</th>
   <th>Pnr 4</th>
   <th>Train name</th>
   <th>From Station</th>
 </tr>';
while ($row = mysql_fetch_array($result)) {
    echo '<tr>';
    foreach($row as $field) {
    	if($f==0)
    	{
        $s=htmlspecialchars($field);
        echo '<td>' . $s . '</td>';
        $f=1;
      }
      else
    	$f=0;
    }
    }
echo "</table>";
?>
<html>

 <style type="text/css">
body
{
background-image:url("train.jpg");
}
</style>

</html>