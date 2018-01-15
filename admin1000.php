<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
<style>
table {
    width:100%;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: Red;
    color: white;
}

</style>
<title>View Records</title>

</head>

<body>



<?php




require_once("mysql_connect.php");




$result = mysql_query("SELECT * FROM bookings")

or die(mysql_error());




echo "<p><strong>Bookings </strong></p>";

echo "<table id='t01' border='1' cellpadding='10'>";

echo "<tr> <th>DATE</th> <th>First Name</th>  <th>Last Name</th> <th>Email</th> <th>Address</th><th>City</th><th>Zip</th>
<th>Country</th><th>Guests</th><th>Requirements</th><th>Date From</th><th>Date To</th><th>Booking #</th><th>Title</th><th>Price/night</th>
<th>Total Nights</th><th>Total Price</th><th>Location</th><th>Status</th> 
   <th></th> <th></th><th>ID</th></tr>";





while($row = mysql_fetch_array( $result )) {





echo "<tr>";

echo '<td>' . $row['localdate'] . '</td>';
echo '<td>' . $row['firstname'] . '</td>';
echo '<td>' . $row['lastname'] . '</td>';
echo '<td>' . $row['email'] . '</td>';
echo '<td>' . $row['address'] . '</td>';
echo '<td>' . $row['city'] . '</td>';
echo '<td>' . $row['zip'] . '</td>';
echo '<td>' . $row['country'] . '</td>';
echo '<td>' . $row['guests'] . '</td>';
echo '<td>' . $row['text'] . '</td>';
echo '<td>' . $row['datepicker4'] . '</td>';
echo '<td>' . $row['datepicker5'] . '</td>';
echo '<td>' . $row['booknumber'] . '</td>';
echo '<td>' . $row['title'] . '</td>';
echo '<td>' . $row['pricenight'] . '</td>';
echo '<td>' . $row['totalnights'] . '</td>';
echo '<td>' . $row['totalprice'] . '</td>';
echo '<td>' . $row['location'] . '</td>';
echo '<td>' . $row['status'] . '</td>';


echo '<td><a href="admin1000edit.php?id=' . $row['id'] . '">Edit</a></td>';

echo '<td><a href="admin1000delete.php?id=' . $row['id'] . '">Delete</a></td>';
echo '<td>' . $row['id'] . '</td>';
echo "</tr>";

}





echo "</table>";

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
===================================================================================================================================================
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>





 <?php
$query = "SELECT * FROM inquiry";
$result = mysql_query($query);
$counter = 1;
while ($row = mysql_fetch_array($result))
{
  
 ?>



 <!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t02 tr:nth-child(even) {
    background-color: #eee;
}
table#t02 tr:nth-child(odd) {
   background-color:#fff;
}
table#t02 th {
    background-color: Blue;
    color: white;
}

</style>
</head>
<body>
<caption><strong>Questions</strong></caption>
<table  id="t02" style="width:100%">
 <caption>&nbsp;</caption>
  <tr>
	<th>NO: </th>
	<th>Date Submitted</th>
    <th>Name</th>
	<th>Email</th>
	<th>Message</th>
	<th>Title</th>
	<th>Price/night</th>
	<th>Country</th>
	<th>Mode</th>
	<th>Delete</th>
	
  </tr>
  <tr>
	<td><strong><?php print $counter?></strong></td>
	<td><?php print $row["localdate"];?></td>
    <td><?php print $row["name"];?></td>
    <td><?php print $row["email"];?></td>
	<td><?php print $row["message"];?></td>
	<td><?php print $row["title"];?></td>
	<td><?php print $row["pricenight"];?></td>
	<td><?php print $row["country"];?></td>
	<td><?php print $row["mode"];?></td>
	<?php echo '<td><a href="deleteinquiry.php?id=' . $row['id'] . '">Delete</a></td>'; ?>
	<?php $counter++; ?>
  </tr>
  <?php

}

?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
===================================================================================================================================================
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 
 <?php
$query = "SELECT * FROM contact";
$result = mysql_query($query);
$counter = 1;
while ($row = mysql_fetch_array($result))
{
  
 ?>



 <!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
}

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t03 tr:nth-child(even) {
    background-color: #eee;
}
table#t03 tr:nth-child(odd) {
   background-color:#fff;
}
table#t03 th {
    background-color: green;
    color: white;
}

</style>
</head>
<body>
<caption><strong>Contact Form</strong></caption>
<table  id="t03" style="width:100%">
 <caption>&nbsp;</caption>
  <tr>
	<th>NO: </th>
	<th>Date Submitted</th>
    <th>Name</th>
	<th>Email</th>
	<th>Message</th>
	<th>Delete</th>
  </tr>
  <tr>
	<td><strong><?php print $counter?></strong></td>
	<td><?php print $row["localdate"];?></td>
    <td><?php print $row["name"];?></td>
    <td><?php print $row["email"];?></td>
	<td><?php print $row["message"];?></td>
	<?php echo '<td><a href="deleteform.php?id=' . $row['id'] . '">Delete</a></td>'; ?>
	<?php $counter++; ?>
  </tr>
  <?php

}

?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



</body>

</html>