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
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript">
		function printpage()
			{window.print()}
	</script>
    
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
<!--bakcbutton2pages-->
<script>
  document.write('<a href="' + document.referrer + '">Back to results</a>');
</script>
<!--//bakcbutton2pages-->
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
						<li><a title="Home">Booking Page </a></li>
						                                       
					</ul>
					<!--//crumbs-->
					
					<!--top right navigation-->
					<ul class="top-right-nav">
						<li><a href="#" onclick="history.go(-2)">Back to results</a></li>
						<li><a href="index" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
					<section class="three-fourth">
						<form id="booking" method="post" class="booking" name="booking">
							<fieldset>
								<h3><span>02 </span>Confirmation</h3>
								<div class="text-wrap">
								<p>Your reservation is not confirmed yet. We will contact you soon with the booking invoice. 
								If you want to see the status of your reservation, you can check your booking by accessing the main button or <a href="checkbooking" title="Print booking" >here</a>.</p>
									<p><a href="#" class="gradient-button print" title="Print booking" onclick="printpage()">Print booking</a></p>
									
								</div>
								
								<h3>Traveller info</h3>
								<div class="text-wrap">
									<div class="output">
<?php

require_once("mysql_connect.php");

$gid = intval($_GET['id']);

$q = mysql_query("SELECT * FROM all1 WHERE id='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);

if (isset($gid) and is_numeric($gid))
{
?>

<?php

$book = mysql_query("SELECT * FROM bookings ORDER BY id DESC LIMIT 1") or die ("mysql error");
$bookrow = mysql_fetch_assoc($book);

?>


										<p>Booking number:</p>
										<p><?php echo $bookrow['booknumber']; ?></p>
										<p>Fist name: </p>
										<p><?php echo $bookrow["firstname"]; ?></p>
										<p>Last name: </p>
										<p><?php echo $bookrow["lastname"]; ?></p>
										<p>E-mail address: </p>
										<p><?php echo $bookrow["email"]; ?></p>
										<p>Street Address and number:</p>
										<p><?php echo $bookrow["address"]; ?></p>
										<p>Town / City: </p>
										<p><?php echo $bookrow["city"]; ?></p>
										<p>ZIP code: </p>
										<p><?php echo $bookrow["zip"]; ?></p>
										<p>Country:</p>
										<p><?php echo $bookrow["country"]; ?></p>
									</div>
								</div>
							
								<h3>Do I have to pay a deposit? If so, how much?</h3>
								<div class="text-wrap">
									<p>In maximum 24 hours we will send you an email with the booking invoice. After the payment is validated, your booking will be confirmed.</p>
									<p>Deposits are applicable for all holidays except HOT DEALS where full payment is due immediately. If you are booking within 12 weeks of your departure date, you must pay the entire cost of your holiday. If you are booking more than 12 weeks in advance of your departure date you can choose to pay a deposit of 50%. You will also be informed at this stage of when the balance is due. </p>
								</div>
								
								<h3>Payment</h3>
								<div class="text-wrap">
									<p>You have not confirmed your booking yet.<br />All payments will be made at the property during your stay.<br />Please note that your payment must be pre-authorised prior to your arrival. </p>
									<p><strong class="dark">What payment methods do we accept?</strong></p>
									<p> Deposit/Full payment is processed through Wire Transfer – Bank Transfer. You simple need the following information: </p>
									<p>- Booking Number  - <?php echo $bookrow['booknumber']; ?></p>
									<p>- Lead Passenger Name - <?php echo $bookrow["firstname"]; ?> <?php echo $bookrow["lastname"]; ?></p>
									
								</div>
								
								<h3></h3>
								<div class="text-wrap">
									
									<p><strong>We wish you a pleasant stay</strong><br /><i>your --WebSite Name--- team</i></p>
								</div>
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
							<p><?php echo $bookrow["datepicker4"]; ?></p>
							<h6>Check-out Date</h6>
							<p><?php echo $bookrow["datepicker5"]; ?></p>
							<h6>Guests</h6>
							<p><?php echo $bookrow["guests"]; ?></p>
					

                            <h6>Days</h6>
							<p> <?php echo $bookrow["totalnights"]; ?></p>
                            <h6>Price per night</h6>
							<p> € <?php echo $bookrow["pricenight"]; ?></p>
						</div>
						<div class="price">
							<p class="total">Total Price:  € <?php echo $bookrow["totalprice"]; ?></p>
							<p>VAT (20%) included</p>
						</div>
					</article>
                    
                      
                    </form>
                    
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