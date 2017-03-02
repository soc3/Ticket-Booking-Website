<?php
echo ' <html>
<head>
<title>Home</title>
</head>
<style>
body{
  background-image: url("img.jpg");
}
</style>
<h1><center>Ticket Booking</center></h1>
<body align = "center">
<form action="connect3.php" method="POST">
		From Station * : <br> <select name="fromstation">  <option value="Kanpur">Kanpur</option>
  <option value="Allahabad">Allahabad</option>
  <option value="Agra">Agra</option>
  <option value="Delhi">Delhi</option>
</select> <br>
		To Station * : <br> <select name="tostation">  <option value="Kanpur">Kanpur</option>
  <option value="Allahabad">Allahabad</option>
  <option value="Agra">Agra</option>
  <option value="Delhi">Delhi</option>
</select><br>
		Journey Date * : <br> <input type="date" data-date-inline-picker="true" name="c"><br>
		<br><input type="submit" value="Submit"><br>
		<br><input type="reset" name="reset">
</form>
<a href="connect5.php">Cancel Ticket</a>
<form action = "form.html">
  <br>
  <input type="submit" value="Logout"><br>

</form>
</body>

</html> ';
?>