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
	if ((!empty($_POST['country'])) AND (!empty($_POST['title'])) AND (!empty($_POST['type'])) AND (!empty($_POST['city'])) AND (!empty($_POST['address'])) AND (!empty($_POST['bedroom'])) AND (!empty($_POST['sleep'])) AND (!empty($_POST['keye'])) AND (!empty($_POST['family'])) AND (!empty($_POST['notes'])) AND (!empty($_POST['luxuries'])) AND (!empty($_POST['generale'])) AND (!empty($_POST['utilities'])) AND (!empty($_POST['rooms'])) AND (!empty($_POST['furniture'])) AND (!empty($_POST['other'])) AND (!empty($_POST['outdoors'])) AND (!empty($_POST['description'])) AND (!empty($_POST['price'])) AND (!empty($_POST['discount'])) )
	{
		
		$country = htmlspecialchars($_POST['country']);
		$title = htmlspecialchars($_POST['title']);
		$type = htmlspecialchars($_POST['type']);
		$city = htmlspecialchars($_POST['city']);
		$address = htmlspecialchars($_POST['address']);
		
		$bedroom = htmlspecialchars($_POST['bedroom']);
		$sleep = htmlspecialchars($_POST['sleep']);
		$keye = htmlspecialchars($_POST['keye']);
		$family = htmlspecialchars($_POST['family']);
		$notes = htmlspecialchars($_POST['notes']);
		$luxuries = htmlspecialchars($_POST['luxuries']);
		$generale = htmlspecialchars($_POST['generale']);
		$utilities = htmlspecialchars($_POST['utilities']);
		$rooms = htmlspecialchars($_POST['rooms']);
		$furniture = htmlspecialchars($_POST['furniture']);
		$other = htmlspecialchars($_POST['other']);
		$outdoors = htmlspecialchars($_POST['outdoors']);
		$description = htmlspecialchars($_POST['description']);
		$price = htmlspecialchars($_POST['price']);
		$discount = htmlspecialchars($_POST['discount']);
		


		$files = $_FILES['fisier'];
		
		if (count($files['name']) == 15)	
		{	
			
			
			foreach ($files['name'] as $i => $file) 
			{
				$targets[$i] = 'images/hotdealsimages/'. basename($file);
				
				if ($files['error'][$i] == 0 && $files['size'][$i] < 2048000 && in_array($files['type'][$i], $allowed_types)) 
					{
						if (!move_uploaded_file($files['tmp_name'][$i], 'images/hotdealsimages/'. $file))
						{
							$targets[$i] = 'images/hotdealsimages/default.jpg';
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
		
	
		
		$sql = "INSERT INTO hotdeals VALUES('','$country','$title','$type','$city','$address','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$discount', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: add_hotdeals.php");
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
<form name="imagine" action="add_hotdeals.php" method="post" enctype="multipart/form-data">
<p>Title: 
<input type="text" name="title" />
</p>
<p>Type: Villa or AP: 
<input type="text" name="type" />
</p>
<p>country: 
<input type="text" name="country" />
</p>
<p>city: 
<input type="text" name="city" />
</p>
<p>address: 
<input type="text" name="address" />
</p>
<p>bedroom: 
<input type="text" name="bedroom" />
</p>
<p>sleep: 
<input type="text" name="sleep" />
</p>
<p>family: 
<input type="text" name="family" />
</p>
<p>Beds: 
<input type="text" name="notes" />
</p>
<p>luxuries: 
<input type="text" name="luxuries" />
</p>
<p>Max Guests: 
<input type="text" name="generale" />
</p>
<p>utilities: 
<input type="text" name="utilities" />
</p>
<p>Bathrooms: 
<input type="text" name="rooms" />
</p>
<p>furniture: 
<input type="text" name="furniture" />
</p>
<p>Review Numbers: 
<input type="text" name="other" />
</p>
<p>Pool: - Yes/No 
<input type="text" name="outdoors" />
</p>
<p>Short Description 
<input type="text" name="keye" />
</p>
<p>description (options): </p>
<p>
<textarea name="description" cols="50" rows="10"></textarea>
</p>
<p>price - (ex- $10,000.00): 
<input type="text" name="price" />
</p>
<p>Discount - (ex- 30): 
<input type="text" name="discount" />
</p>
<p>Imagine: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine2: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine3: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine4: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine5: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine6: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine7: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine8: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine9: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine10: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine11: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine12: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine13: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine14: 
<input type="file" name="fisier[]" />
</p>
<p>Imagine15: 
<input type="file" name="fisier[]" />
</p>
<p>

<input type="hidden" name="newuser" value="TRUE" />
<input type="submit" value="Salveaza" />
</p>

</body>
</html>