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
	<title>--WebSite Name--- - Booking</title>
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
    var a = document.forms["bookingform"]["firstname"].value;
    if (a == "") {
        alert("First Name must be filled out");
        return false;
    }
	var b = document.forms["bookingform"]["lastname"].value;
    if (b == "") {
        alert("Last Name must be filled out");
       return false;
    }
	var c = document.forms["bookingform"]["email"].value;
    if (c == "") {
        alert("Email must be filled out");
       return false;
    }
	var d = document.forms["bookingform"]["confirmemail"].value;
    if (d == "") {
        alert("Please confirm your email");
       return false;
    }
	var x = document.forms["bookingform"]["confirmemail"].value;
    if (x != c) {
        alert("Email do not match");
       return false;
    } 
	
	
	
	var e = document.forms["bookingform"]["address"].value;
    if (e == "") {
        alert("Address must be filled out");
       return false;
    }
	var f = document.forms["bookingform"]["city"].value;
    if (f == "") {
        alert("City must be filled out");
       return false;
    }
	var g = document.forms["bookingform"]["zip"].value;
    if (g == "") {
        alert("Zip must be filled out");
       return false;
    }
	var h = document.forms["bookingform"]["country"].value;
    if (h == "") {
        alert("Country must be filled out");
       return false;
    }
	var h = document.forms["bookingform"]["guests"].value;
    if (h == "") {
        alert("Number of guests can't be 0");
       return false;
    }
	var i = document.forms["bookingform"]["datepicker4"].value;
    if (i == "") {
        alert("Check-In must be filled out");
       return false;
    }
	var j = document.forms["bookingform"]["datepicker5"].value;
    if (j == "") {
        alert("Check-Out must be filled out");
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
					<!--crumbs-->
					<ul class="crumbs">
						<li><a title="Home">Booking Page</a></li>
						                                      
					</ul>
					<!--//crumbs-->
					
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
echo "<form id=\"booking\" name = \"bookingform\" onsubmit=\"return validateForm()\" method=\"post\" action=\"add_booking.php?id=".$row['id']."\" class=\"booking\">\n"; 
echo "\n";
?>	
	
								<fieldset>
								<h3><span>01 </span>Traveller info</h3>
                                                              
                                <div class="row twins">
									<div class="f-item">
										<label for="first_name">First name</label>
										<input type="text" id="first_name" name="firstname" placeholder="Please enter your First name"/>
										
									</div>
									<div class="f-item">
										<label for="last_name">Last name</label>
										<input type="text" id="last_name" name="lastname" placeholder="Please enter your Last name"/>
									</div>
								</div>
								
								<div class="row twins">
									<div class="f-item">
										<label for="email">Email address</label>
										<input type="email" id="email" name="email" placeholder="Please enter your email" />
									</div>
									<div class="f-item">
										<label for="confirm_email">Confirm email address</label>
										<input type="text" id="confirm_email" name="confirmemail" placeholder="Please confirm your email"/>
									</div>
									<span class="info">You’ll receive the invoice to this email</span>
								</div>
								
								<div class="row twins">
									<div class="f-item">
										<label for="address">Street Address an Number</label>
										<input type="text" id="address" name="address" placeholder="Please enter your Address"/>
									</div>
									<div class="f-item">
										<label for="city">Town / City</label>
										<input type="text" id="city" name="city" placeholder="Please enter your City" />
									</div>
								</div>
								
								<div class="row twins">
									<div class="f-item">
										<label for="zip">ZIP Code</label>
										<input type="text" id="zip" name="zip" placeholder="Please enter your Zip"/>
									</div>
									<div class="f-item">
										<label for="country">Country</label>
										<input type="text" id="country" name="country" placeholder="Please enter your Country"/>
									</div>
								</div>
								<div class="row twins">
									<div class="f-item">
										<label for="zip">Number of Guests</label>
										<input type="text" id="guests" name="guests" placeholder="Please enter guests number"/> Max. <?php echo $row['generale']; ?> guests
									</div>
									
								</div>
								
								<div class="row">
									<div class="f-item">
										<label>Special requirements: <span>(Optional)</span></label>
										<textarea name="text" rows="10" cols="10"></textarea>
									</div>
									<span class="info"><h2></h2></span>
								</div>
                                <input type="hidden" name="newuser" value="TRUE" />
								<input type="submit"  class="gradient-button" value="Proceed to next step" id="next-step" />
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
							<h6>Check-in Date</h6>
						
							<p><div class="datepicker-wrap"><input type="text" placeholder="Select Check-in" id="datepicker4" 
                            name="datepicker4" readonly/></div></p>
							<h6>Check-out Date</h6>
							<p><div class="datepicker-wrap"><input type="text" placeholder="Select Check-out" id="datepicker5" 
                            name="datepicker5" readonly/></div></p>
                            
							
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