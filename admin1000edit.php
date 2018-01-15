<?php



function renderForm($id, $firstname, $lastname, $status, $error)

{

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>Edit Record</title>

</head>

<body>

<?php



if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

<strong>First Name: *</strong> <input type="text" name="firstname" value="<?php echo $firstname; ?>"/><br/>

<strong>Last Name: *</strong> <input type="text" name="lastname" value="<?php echo $lastname; ?>"/><br/>

<strong>Status: *</strong> <input type="text" name="status" value="<?php echo $status; ?>"/><br/>

<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

}






require_once("mysql_connect.php");




if (isset($_POST['submit']))

{


if (is_numeric($_POST['id']))

{


$id = $_POST['id'];

$firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));

$lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));

$status = mysql_real_escape_string(htmlspecialchars($_POST['status']));



if ($firstname == '' || $lastname == '' || $status == '')

{



$error = "Error - completeaza toate campurile";




renderForm($id, $firstname, $lastname, $status, $error);

}

else

{



mysql_query("UPDATE bookings SET status='$status' WHERE id='$id'")

or die(mysql_error());



header("Location: admin1000.php");

}

}

else

{



echo 'Error!';

}

}

else


{



if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{



$id = $_GET['id'];

$result = mysql_query("SELECT * FROM bookings WHERE id=$id")

or die(mysql_error());

$row = mysql_fetch_array($result);





if($row)

{



$firstname = $row['firstname'];

$lastname = $row['lastname'];

$status = $row['status'];




renderForm($id, $firstname, $lastname, $status, '');

}

else



{

echo "No results!";

}

}

else



{

echo 'Error!';

}

}

?>