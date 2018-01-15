<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title>--WebSite Name--- - Inquiry</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/bgr/favicon.ico" />
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/sequence.jquery-min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/sequence.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    
<!--bakcbutton2pages-->
<script>
  document.write('<a href="' + document.referrer + '">Back to results</a>');
</script>
<!--//bakcbutton2pages-->

<script>
	$( function() {
		var dateFormat = "mm/dd/yy",
			from = $( "#datepicker4" )
				.datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					numberOfMonths: 3
				})
				.on( "change", function() {
					to.datepicker( "option", "minDate", getDate( this ) );
				}),
			to = $( "#datepicker5" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 3
			})
			.on( "change", function() {
				from.datepicker( "option", "maxDate", getDate( this ) );
			});

		function getDate( element ) {
			var date;
			try {
				date = $.datepicker.parseDate( dateFormat, element.value );
			} catch( error ) {
				date = null;
			}

			return date;
		}
	} );
	</script>

<script>
function validateForm() {
    var a = document.forms["bookingform"]["name"].value;
    if (a == "") {
        alert("First Name must be filled out");
        return false;
    }
	var c = document.forms["bookingform"]["email"].value;
    if (c == "") {
        alert("Email must be filled out");
       return false;
    }
	var h = document.forms["bookingform"]["message"].value;
    if (h == "") {
        alert("Please write your message");
       return false;
    }
	
	
}



</script>


</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><a href="index" title="--WebSite Name---"><img src="images/txt/logo.png" alt="--WebSite Name---" /></a></h1>
			<!--//logo-->
			
			
			
			<!--search-->
			<div class="search">
            
				<form id="search-form" method="POST" action="search_results">
					<input type="search" placeholder="Search by country or city" name="sitesearch" id="site_search" /> 
					<input type="submit" id="submit-site-search" value="submit-site-search" name="submitsearch"/>
				</form>
<?php



if(isset($_POST['submitsearch'])){
$_SESSION [$selected_val = $_POST['sitesearch']];
   

}

?>
			</div>
			<!--//search-->
			
			
		</div>
		
		<!--main navigation-->
		<nav class="main-nav" role="navigation" id="nav">
			<ul class="wrap">
				<li><a href="index" title="index">Home</a></li>
				<li><a href="search_results_self_catering" title="Self catering">Holiday Rentals</a></li>
				<li><a href="hot_deals" title="Hot deals">Hot deals</a></li>
				<li><a href="checkbooking" title="Login">Check Booking</a></li>
				<li><a href="contact.html" title="Login">Contact</a></li>
			</ul>
		</nav>
		<!--//main navigation-->
	</header>
	<!--//header-->
	
	<!--main-->
	<div class="main" role="main">		
		<div class="wrap clearfix">
			<!--main content-->
			<div class="content clearfix">
				<!--breadcrumbs-->
				<nav role="navigation" class="breadcrumbs clearfix">
					
					
					<!--top right navigation-->
					<ul class="top-right-nav">
						<li><a href="#" onclick="history.go(-1)">Back to results</a></li>
						<li><a href="index" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
                 
					<section class="three-fourth">
 <?php

require_once("mysql_connect.php");

$gid = intval($_GET['id']);

$q = mysql_query("SELECT * FROM all1  WHERE id='".$gid."'") or die ("mysql error");


$row = mysql_fetch_assoc($q);

if (isset($gid) and is_numeric($gid))
{
?>	                   
                   
						<?php
echo "<form id=\"booking\" name = \"bookingform\" onsubmit=\"return validateForm()\" method=\"post\" action=\"add_inquiry.php?id=".$row['id']."\" class=\"booking\">\n"; 
echo "\n";
?>	
	
								<fieldset>
								<h3>Inquiry for <?php echo $row['title']; ?> </h3>
                                                              
                                <div class="row twins">
									<div class="f-item">
										<label for="first_name">Your name</label>
										<input type="text" id="first_name" name="name" placeholder="Please enter your name" required />
										
									</div>
									
								</div>
								
								<div class="row twins">
									<div class="f-item">
										<label for="email">Your email</label>
										<input type="email" id="email" name="email" placeholder="Please enter your email" required />
									</div>
                                    <span class="info">You’ll receive an answer to this email</span>
									
								</div>
								
								
								
								
								<div class="row twins">
									
									
								</div>
								
								<div class="row">
									<div class="f-item">
										<label>Your message</label>
										<textarea name="message" rows="10" cols="10" required > I would like to inquire about the property <?php echo $row['title']; ?>.</textarea>
									</div>
									<span class="info"><h2></h2></span>
								</div>
                                <input type="hidden" name="newuser" value="TRUE" />
								<input type="submit"  class="gradient-button" value="Send Inquiry" id="next-step" />
							</fieldset>
						
					</section>
				<!--//three-fourth content-->
			
				<!--right sidebar-->
				<aside class="right-sidebar">
					<!--Booking details-->
					<article class="booking-details clearfix">
                    <?php echo "<img src=\"".$row['poza1']."\" style=\"width:100%;\" /></a>"; ?>
						<h1><?php echo $row['title']; ?>
							
						</h1>
						<span class="address"><?php echo $row['country']; ?>, <?php echo $row['city']; ?></span>
						<span class="stars">
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
							</span>
						<div class="booking-info">
							<h6>Property</h6>
							<p><?php echo $row['type']; ?></p>
							<h6>Property Description</h6>
							<p>Entire Property</p>
							
						
								
                            
							
						</div>
						<div class="price">
							<p class="total"> Price: € <?php echo $row['price']; ?> / night </p>
							<p>VAT (20%) included</p>
						</div>
                        </form>



					</article>
					<!--//Booking details-->
                   
					<!--Need Help Booking?-->
					<article class="default clearfix">
						<h2>Need Help Booking?</h2>
						<p>Email our customer services team to speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="email-green"><a href="#">booking@mail.com</a></p>
					</article>
					<!--//Need Help Booking?-->
				</aside>
				<!--//right sidebar-->
			</div>
			<!--//main content-->
		</div>
	</div>
	<!--//main-->
	
	<!--footer-->
	<footer>
		<div class="wrap clearfix">
			<!--column-->
			<article class="one-fourth">
				<h3>--WebSite Name---</h3>
				<p>Carrer de s'Illa, 07713, Punta Prima, Illes Balears, Spain </p>
				<p class="phone-green">1- 555 - 555 - 555</p>
				<p class="email-green"><a href="#">booking@mail.com</a></p>
			</article>
			<!--//column-->
			
			<!--column-->
			<article class="one-fourth">
				<h3>Customer support</h3>
				<ul>
					<li><a href="aboutus.html" title="About us">About us</a></li>
					<li><a href="aboutus.html" title="Faq">Faq</a></li>
					<li><a href="aboutus.html" title="How do I make a reservation?">How do I make a reservation?</a></li>
					<li><a href="aboutus.html" title="Payment options">Payment options</a></li>
					
				</ul>
			</article>
			<!--//column-->
			
			<article class="one-fourth">
							
					
					<img  src="images/imagessite/tripp.png" alt="" />
					
				
			</article>
			
			<!--column-->
			<article class="one-fourth last">
				
				<img  src="images/imagessite/bank.png" alt="" />
			</article>
			<!--//column-->
	
			<section class="bottom">
				<p class="copy">Copyright 2017 --WebSite Name---. All rights reserved</p>
				<nav>
					<ul>
						<li><a href="aboutus.html" title="About us">About us</a></li>
						<li><a href="contact.html" title="Contact">Contact</a></li>
						<li><a href="aboutus.html" title="FAQ">FAQ</a></li>
						
					</ul>
				</nav>
			</section>
		</div>
	</footer>
    <?php
}
else
{
	header("Location: error.php");
}
	
?>




	<!--//footer-->
	<script>
		// Initiate selectnav function
		selectnav();
	</script>
	
	
</body>
</html>