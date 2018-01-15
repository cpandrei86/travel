<?php

require_once ("mysql_connect.php");

if (isset($_GET['id']) && is_numeric($_GET['id']))

{
$id = $_GET['id'];

$result = mysql_query("DELETE FROM inquiry WHERE id=$id")or die(mysql_error());
header("Location: admin1000.php");
}
else{
header("Location: admin1000.php");
}



?>