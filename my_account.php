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
	<title>--WebSite Name--- - My account</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/bgr/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	
	<script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeOut(9000);
	  
    })
  </script>
  <style type="text/css">
    .loader {
      background: url('https://i.pinimg.com/originals/5f/27/55/5f2755bd6f27c61562fb6f7bfebe3c00.gif') 50% 50% no-repeat rgb(666, 666, 666);
      background-color: white;
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 999999999999999999999999999999999999999;
      
    }
  </style>  
  
</head>
<body>
<div class="loader"> </div>
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
session_start(); 
if(isset($_POST['submitsearch'])){
$selected_val = $_POST['sitesearch'];
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
						<li><a href="index" title="Home">Home</a></li>
						                                    
					</ul>
					<!--//crumbs-->
				
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
				<section class="three-fourth">
	<?php

error_reporting(0);

require_once ("mysql_connect.php");
$_SESSION [$selected_val = $_POST['booknumber']];

$sql = "SELECT * FROM bookings WHERE '$selected_val' = booknumber";	
	
	$res = mysql_query($sql);
	
	if (mysql_num_rows($res)!=0) 	
	{
		
						
		while ($row = mysql_fetch_assoc($res))	
		{

?>		
					<h1>My account</h1>
					
					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
							<li><a href="#MyBookings" title="My Bookings">My Bookings</a></li>
							
							<li><a href="#MySettings" title="Settings">My Details</a></li>
							<li><a href="#Mystatus" title="status">My Statuses</a></li>
						</ul>
					</nav>
					<!--//inner navigation-->
					
					<!--My Bookings-->
					<section id="MyBookings" class="tab-content">
						<!--booking-->
						<article class="bookings">
							<h1><a >Booking details</a></h1>
							<div class="b-info">
								<table>
									<tr>
										<th>Booking number</th>
										<td><?php echo $row['booknumber']; ?></td>
									</tr>
                                    <tr>
										<th>Property title</th>
										<td><?php echo $row['title']; ?></td>
									</tr>
									<tr>
										<th>Location</th>
										<td><?php echo $row['location']; ?></td>
									</tr>
									<tr>
										<th>Check-in</th>
										<td><?php echo $row['datepicker4']; ?></td>
									</tr>
									<tr>
										<th>Check-out</th>
										<td><?php echo $row['datepicker5']; ?></td>
									</tr>
									<tr>
										<th>Nights</th>
										<td><?php echo $row['totalnights']; ?></td>
									</tr>
									<tr>
										<th>Guests</th>
										<td><?php echo $row['guests']; ?></td>
									</tr>
                                    
                                    <tr>
										<th>Price</th>
										<td>€ <?php echo $row['pricenight']; ?> / night</td>
									</tr>
									<tr>
										<th>Total Price:</th>
										<td><strong>€ <?php echo $row['totalprice']; ?></strong></td>
									</tr>
                                    <tr>
										<th>Your requirements:</th>
										<td> <?php echo $row['text']; ?></td>
									</tr>
									<tr>
										<th>Remaining Days</th>
										

<?php


$future = strtotime($row['datepicker4']); 
$timefromdb = time();
$timeleft = $future-$timefromdb;
$daysleft = round((($timeleft/24)/60)/60); 


?>


										<td><?php echo $daysleft; ?> days until Check-in</td>
									</tr>
									
																		
									
								</table>
							</div>
							<div class="actions">
								<table>
									<tr>
										<th>Reservation </th>
										<td><strong><?php echo $row['status']; ?></strong></td>
									</tr>
									
                                    
								</table>
							</div>
							
							
							
							
							
							
							
							
							
							
							
						</article>
						<!--//booking-->
 	
							
					</section>
					<!--//My Bookings-->
					
<?php


?>					
					
					
					<!--MySettings-->
					<section id="MySettings" class="tab-content">
						<article class="mysettings">
							<h1>Personal details</h1>
							<table>
								<tr>
									<th>First name:</th>
									<td><?php echo $row['firstname']; ?>
										
									</td>
									
								</tr>
								<tr>
									<th>Last name:</th>
									<td><?php echo $row['lastname']; ?>
										
									</td>
									
								</tr>
								<tr>
									<th>E-mail address: </th>
									<td><?php echo $row['email']; ?>
										
									</td>
									
								</tr>
								
								<tr>
									<th>Street Address and number:</th>
									<td><?php echo $row['address']; ?>
										
									</td>
									
								</tr>
								
								<tr>
									<th>Town / City: </th>
									<td><?php echo $row['city']; ?>
										
									</td>
									
								</tr>
								
								<tr>
									<th>ZIP code:</th>
									<td><?php echo $row['zip']; ?>
										
									</td>
									
								</tr>
								
								<tr>
									<th>Country:</th>
									<td><?php echo $row['country']; ?>
										
									</td>
									
								</tr>
							</table>

						</article>
					</section>
					<!--//MySettings-->
				<?php

?> 	

<?php
							
							}
				
							}
	else	
	{
		echo " <h1> This booking number is not correct </h1>";
	}
	
	
							?>
							<!--MySettings-->
					<section id="Mystatus" class="tab-content">
						<article class="bookings">
							<h1>Reservation statuses</h1>
							<table>
								<tr>
									<th>Pending</th>
									<td>Invoice is not sent yet, or the payment is not validated.</td>
									
								</tr>
								<tr>
									<th>Approved</th>
									<td>Payment is validated. --WebSite Name--- has collected the payment from the guest and the booking is complete. </td>
									
								</tr>
								<tr>
									<th>Declined</th>
									<td>A host declined a guest's reservation request. --WebSite Name--- will not charge you. </td>
									
								</tr>
								
								
							</table>

						</article>
					</section>
					<!--//MySettings-->
				</section>
				<!--//three-fourth content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">

					<!--Need Help Booking?-->
					<article class="default clearfix">
						<h2>Need Help Booking?</h2>
						<p>Speak to one of our advisors who will help you with all of your holiday needs.</p>
						<p class="email-green"><a href="#">booking@mail.com</a></p>
					</article>
					<!--//Need Help Booking?-->
					
					<!--Why Book with us?-->
					<article class="default clearfix">
						<h2>Why Book with us?</h2>
						<h3>Low rates</h3>
						<p>Get the best rates, or get a refund.<br />No booking fees. Save money!</p>
						<h3>Largest Selection</h3>
						<p>50+ accommodations worldwide<br />Over 500 guest reviews</p>
						<h3>We’re Always Here</h3>
						<p>Call or email us, anytime<br />Get 24-hour support before, during, and after your trip</p>
					</article>
					<!--//Why Book with us?-->
					
				</aside>
				<!--//sidebar-->
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
	<!--//footer-->
    
    
	<script>
		
		selectnav();
	</script>
</body>
</html>