<?php

require_once ("mysql_connect.php");

$allowed_types = array(
    'image/gif',
    'image/jpeg',
	'image/png',
	'image/JPG',
	'image/jpg',
    
);

if (isset($_POST['newuser']))	
{
	if ((!empty($_POST['guestname'])) AND (!empty($_POST['numberguests'])) AND (!empty($_POST['country'])) AND (!empty($_POST['date'])) AND (!empty($_POST['positive'])) AND (!empty($_POST['negative'])))
	{
		
		$guestname = htmlspecialchars($_POST['guestname']);
		$numberguests = htmlspecialchars($_POST['numberguests']);
		$country = htmlspecialchars($_POST['country']);
		$date = htmlspecialchars($_POST['date']);
		$positive = htmlspecialchars($_POST['positive']);
		$negative = htmlspecialchars($_POST['negative']);
		


		$files = $_FILES['fisier'];
		
		if (count($files['name']) == 1)	
		{	
			
			
			foreach ($files['name'] as $i => $file) 
			{
				$targets[$i] = 'images/reviewimages/'. basename($file);
				
				if ($files['error'][$i] == 0 && $files['size'][$i] < 2048000 && in_array($files['type'][$i], $allowed_types)) 
					{
						if (!move_uploaded_file($files['tmp_name'][$i], 'images/reviewimages/'. $file))
						{
							$targets[$i] = 'images/reviewimages/default.jpg';
							$messages[] = $file['name'] . ' not saved!';
						}	
					}
			}	
			
			
		}
		
		
		$targets_string = '';
		if (!empty($targets)) 
			{
				$targets_string = "'". implode("', '", $targets) ."'";
			}
			
		echo $targets_string;
	
		require_once("mysql_connect.php");
		
	
		
		$sql = "INSERT INTO review VALUES('','$guestname','$numberguests','$country','$date','$positive','$negative', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: add_review.php");
	}
		
		
	else
	{
		
		$error = "Error - completeaza toate campurile";
	}	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


?>
<!DOCTYPE html PUBLIC "--//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title></title>
</head>

<body>
<?php

?>
<?php

if (isset($error))
{
	echo "<p>$error</p>";
}
?>
<form name="imagine" action="add_review.php" method="post" enctype="multipart/form-data">
<p>Guest Name: 
<input type="text" name="guestname" />
</p>
<p>Number Guests: 
<input type="text" name="numberguests" />
</p>
<p>Guest Country: 
<input type="text" name="country" />
</p>
<p>Date: 
<input type="text" name="date" />
</p>
<p>Review positive: 
<input type="text" name="positive" />
</p>

<p>Review negative: 
<input type="text" name="negative" />
</p>

<p>Imagine: 
<input type="file" name="fisier[]" />
</p>

<p>

<input type="hidden" name="newuser" value="TRUE" />
<input type="submit" value="Salveaza" />
</p>

</body>
</html>