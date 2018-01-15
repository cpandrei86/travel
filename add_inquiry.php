
<?php
require_once ("mysql_connect.php");


if (isset($_POST['newuser']))	
{
	if ((!empty($_POST['name'])) AND (!empty($_POST['email'])) AND (!empty($_POST['message'])) )
	{
		
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		
		$gid = intval($_GET['id']);
		$q = mysql_query("SELECT * FROM all1 WHERE id='".$gid."'") or die ("mysql error");
		$row = mysql_fetch_assoc($q);
		if (isset($gid) and is_numeric($gid))
{
		
		$title = $row['title'];
		$pricenight = $row['price'];
		$country = $row['country'];
		$mode = "Standard";
		
		$sql = "INSERT INTO inquiry VALUES('','$name','$email','$message','$title','$pricenight','$country','$mode', now())";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: thankyou");
		
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