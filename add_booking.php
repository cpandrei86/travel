
<?php
require_once ("mysql_connect.php");


if (isset($_POST['newuser']))	
{
	if ((!empty($_POST['firstname'])) AND (!empty($_POST['lastname'])) AND (!empty($_POST['email'])) AND (!empty($_POST['confirmemail']))
	AND (!empty($_POST['address'])) AND (!empty($_POST['city'])) AND (!empty($_POST['zip'])) AND (!empty($_POST['country'])) AND (!empty($_POST['guests']))
	AND (!empty($_POST['datepicker4'])) AND (!empty($_POST['datepicker5'])) )
	{
		
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$email = htmlspecialchars($_POST['email']);
		$confirmemail = htmlspecialchars($_POST['confirmemail']);
		$address = htmlspecialchars($_POST['address']);
		$city = htmlspecialchars($_POST['city']);
		$zip = htmlspecialchars($_POST['zip']);
		$country = htmlspecialchars($_POST['country']);
		$guests = htmlspecialchars($_POST['guests']);
		$text = htmlspecialchars($_POST['text']);
		$datepicker4 = htmlspecialchars($_POST['datepicker4']);
		$datepicker5 = htmlspecialchars($_POST['datepicker5']);
		$str = 'ABCDEFGHIJKLMNPQRSTUVWXYZ12345678911112131415161718192212223242526';
		$booknumber = str_shuffle($str);
		$booknumber = substr($booknumber,1,7);
		

		
		
		$gid = intval($_GET['id']);
		$q = mysql_query("SELECT * FROM all1 WHERE id='".$gid."'") or die ("mysql error");
		$row = mysql_fetch_assoc($q);
		if (isset($gid) and is_numeric($gid))
{
		
		$title = $row['title'];
		$pricenight = $row['price'];
		$location = $row['address'];
		$start = $datepicker4;
		$end = $datepicker5;
		$totalnights = (strtotime($end)- strtotime($start))/24/3600; 
		$totalprice = $pricenight * $totalnights;
		$status = 'Pending';
		
		
		$sql = "INSERT INTO bookings VALUES('','$firstname','$lastname','$email','$confirmemail','$address','$city','$zip','$country','$guests','$text','$datepicker4','$datepicker5','$booknumber','$title','$pricenight','$totalnights','$totalprice','$location','$status', now())";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: booking-step3?id=".$row['id']."\"");
		
	}
	else
	{
		
		$error = "Error";
	}	
	
	




}
else
{
	header("Location: error.php");
}
	

	
	

}

?>