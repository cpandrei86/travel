
<?php
require_once ("mysql_connect.php");


if (isset($_POST['contactuser']))	
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
		
	
		
		$sql = "INSERT INTO contact VALUES('','$name','$email','$message',now())";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: thankyou.php");
		
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