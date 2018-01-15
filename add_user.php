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
	if ((!empty($_POST['country'])) AND (!empty($_POST['title'])) AND (!empty($_POST['type'])) AND (!empty($_POST['city'])) AND (!empty($_POST['address'])) AND (!empty($_POST['style'])) AND (!empty($_POST['bedroom'])) AND (!empty($_POST['sleep'])) AND (!empty($_POST['keye'])) AND (!empty($_POST['family'])) AND (!empty($_POST['notes'])) AND (!empty($_POST['luxuries'])) AND (!empty($_POST['generale'])) AND (!empty($_POST['utilities'])) AND (!empty($_POST['rooms'])) AND (!empty($_POST['furniture'])) AND (!empty($_POST['other'])) AND (!empty($_POST['outdoors'])) AND (!empty($_POST['description'])) AND (!empty($_POST['price'])) AND (!empty($_POST['season'])))
	{
		
		$country = htmlspecialchars($_POST['country']);
		$title = htmlspecialchars($_POST['title']);
		$type = htmlspecialchars($_POST['type']);
		$city = htmlspecialchars($_POST['city']);
		$address = htmlspecialchars($_POST['address']);
		$style = htmlspecialchars($_POST['style']);
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
		$season = htmlspecialchars($_POST['season']);


		$files = $_FILES['fisier'];
		
		if (count($files['name']) == 15)	
		{	
			
			
			foreach ($files['name'] as $i => $file) 
			{
				$targets[$i] = 'images/propertyimages/'. basename($file);
				
				if ($files['error'][$i] == 0 && $files['size'][$i] < 2048000 && in_array($files['type'][$i], $allowed_types)) 
					{
						if (!move_uploaded_file($files['tmp_name'][$i], 'images/propertyimages/'. $file))
						{
							$targets[$i] = 'images/propertyimages/default.jpg';
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
		
	
		
		$sql = "INSERT INTO all1 VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		
		
		header("Location: add_user.php");
	}
		
		
	else
	{
		
		$error = "Error - completeaza toate campurile";
	}	
	
	if ($_POST['season'] == 'spring') 
		{
		$sql = "INSERT INTO spring VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['season'] == 'summer') 
		{
		$sql = "INSERT INTO summer VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['season'] == 'autumn') 
		{
		$sql = "INSERT INTO autumn VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['season'] == 'winter') 
		{
		$sql = "INSERT INTO winter VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['style'] == 'france') 
		{
		$sql = "INSERT INTO france VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['style'] == 'austria') 
		{
		$sql = "INSERT INTO austria VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['style'] == 'belgium') 
		{
		$sql = "INSERT INTO belgium VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['style'] == 'switzerland') 
		{
		$sql = "INSERT INTO switzerland VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	
	if ($_POST['style'] == 'spain') 
		{
		$sql = "INSERT INTO spain VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
		}
		
		else
	{
		
		$error = "Error - completeaza toate campurile";
	}
	if ($_POST['style'] == 'uk') 
		{
		$sql = "INSERT INTO uk VALUES('','$country','$title','$type','$city','$address','$style','$bedroom','$sleep','$keye','$family','$notes','$luxuries','$generale','$utilities','$rooms','$furniture','$other','$outdoors','$description','$price','$season', $targets_string)";
		
		mysql_query($sql) or die(mysql_error());
		
		$msg .= "";	
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
<form name="imagine" action="add_user.php" method="post" enctype="multipart/form-data">
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
<p>Country Database: 
<select name="style">
<option value="select">select</option>
<option value="france">France</option>
<option value="austria">Austria</option>
<option value="belgium">Belgium</option>
<option value="switzerland">Switzerland</option>
<option value="spain">Spain</option>
<option value="uk">UK</option>
</select>
</p>
<p>bedroom: 
<input type="text" name="bedroom" />
</p>
<p>season: 
<select name="season">
<option value="select">select</option>
<option value="spring">spring</option>
<option value="summer">summer</option>
<option value="autumn">autumn</option>
<option value="winter">winter</option>
</select>
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