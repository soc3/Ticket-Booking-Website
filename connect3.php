<?php
session_start();
$x=$_POST['fromstation'];
$y=$_POST['tostation'];
	mysql_connect("localhost","root","");
	mysql_select_db("webproject");
	$query1="SELECT * from trains where to2='$y' and from2='$x' ;";
	$result = mysql_query($query1);
	//$count = mysql_num_rows($result);
	echo "<table border='2'>";
	echo '<tr>
   <th>Train No.</th>
   <th>Train Name</th>
   <th>From Station</th>
   <th>To Station</th>
   <th>Departure</th>
   <th>Arrival</th>
   <th>Distance</th>
   <th>Travel Time</th>
   <th>Availability</th>
 </tr>';
 $f=0;
while ($row = mysql_fetch_array($result)) {
    echo '<tr>';
    $k=0;
    foreach($row as $field) {
      $k=$k+1;
    	if($f==0)
    	{
        $s=htmlspecialchars($field);
        if($k==3)
        {

          //$_SESSION["trainname"]=$s;
        echo '<td>' . '<a href="book.php?data='.$s.'&data2='.$s2.'">' . $s . '</a>'. '</td>';
        $s1=$s;
        }
        else if($k==5)
        {
         echo '<td>' . '<a href="book.php?data='.$s1.'&data2='.$s.'">' . $s . '</a>'. '</td>'; 
         $s2=$s;
        }
        else
        echo '<td>' . $s . '</td>';
        $f=1;
    }
    else
    	$f=0;
  }
    /*echo '</tr>';
    echo '<html>
    <body>
    <input type = "submit" value = "Book Ticket">
    </body>
    </html>';*/
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