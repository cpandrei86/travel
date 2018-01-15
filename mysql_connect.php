<?php
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_DATABASE","test");
	
	$link = mysql_connect(DB_HOST,DB_USER,DB_PASS) 
	or die(mysql_error());
	
	mysql_select_db(DB_DATABASE) or die(mysql_error());
?>