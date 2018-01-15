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
	<title>--WebSite Name--- - Hot Deals</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/bgr/favicon.ico" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/infobox.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	




<script type="text/javascript">
	function initialize() {
		var secheltLoc = new google.maps.LatLng(49.47216, -123.76307);

		var myMapOptions = {
			 zoom: 15
			,center: secheltLoc
			,mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);


		var marker = new google.maps.Marker({
			map: theMap,
			draggable: true,
			position: new google.maps.LatLng(49.47216, -123.76307),
			visible: true
		});

		var boxText = document.createElement("div");
		boxText.innerHTML = "<strong>Best ipsum hotel</strong><br />1400 Pennsylvania Ave,<br />Washington DC<br />www.bestipsumhotel.com";

		var myOptions = {
			 content: boxText
			,disableAutoPan: false
			,maxWidth: 0
			,pixelOffset: new google.maps.Size(-140, 0)
			,zIndex: null
			,closeBoxURL: ""
			,infoBoxClearance: new google.maps.Size(1, 1)
			,isHidden: false
			,pane: "floatPane"
			,enableEventPropagation: false
		};

		google.maps.event.addListener(marker, "click", function (e) {
			ib.open(theMap, this);
		});

		var ib = new InfoBox(myOptions);
		ib.open(theMap, marker);
	}
</script>

<!--backbutton-->
<script>
  document.write('<a href="' + document.referrer + '">Back to results</a>');
</script>
<!--//backbutton-->

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
						<li>Search results</li>                                       
					</ul>
					<!--//crumbs-->
					
					<!--top right navigation-->
					<ul class="top-right-nav">
						<li><a href="javascript:history.back()">Back to results</a></li>
						<li><a href="index" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->

				<!--hotel three-fourth content-->
				<section class="three-fourth">
				
                <?php

require_once("mysql_connect.php");

$gid = intval($_GET['id']);

$q = mysql_query("SELECT * FROM hotdeals WHERE id='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);

if (isset($gid)  && is_numeric($gid))
{
?>
					<!--gallery-->
					
					 <div class="slideshow-container">
					 
                     
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza1']."\" style=\"width:100%;\" /></a>"; ?>
  </div>

  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza2']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>

  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza3']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza4']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza5']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza6']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza7']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza8']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza9']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza10']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza11']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza12']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza13']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza14']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <div class="mySlides fade">
    <?php echo "<img src=\"".$row['poza15']."\" style=\"width:100%;\" /></a>"; ?>
    
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  
} 
</script>
					<!--//gallery-->
				
					<!--inner navigation-->
					<nav class="inner-nav">
                    
						<ul>
							
							<li class="description"><a href="#description" title="Description">Description</a></li>
							<li class="facilities"><a href="#facilities" title="Facilities">Facilities</a></li>
							<li class="location"><a href="#location" title="Location">Location</a></li>
							<li class="reviews"><a href="#reviews" title="Reviews">Reviews</a></li>
							
						</ul>
                        
					</nav>
					<!--//inner navigation-->
					
					
					
					<!--description-->
					<section id="description" class="tab-content">
						<article>
							<h1>General	</h1>
                            
                           <br/>
                            
							<div class="text-wrap">	
								<p>
								
								<br/>
								<?php echo $row['description']; ?> .</p>
							
                            </div>
							
							<h1>Check-in</h1>
							<div class="text-wrap">	
								<p>Anytime after 14:00 PM </p>
							</div>
							
							<h1>Check-out</h1>
							<div class="text-wrap">	
								<p>Untill 12:00 PM </p>
							</div>
							
							<h1>Cancellation</h1>
							<div class="text-wrap">	
								<p> <strong>Full refund 5 days prior to arrival.</strong> <br /><br />Accommodation fees (the total nightly rate you're charged) are refundable in certain circumstances as outlined below. <br /> <br />If there is a complaint from either party, notice must be given to us within 24 hours of check-in.  <br /><br /> We will mediate when necessary, and has the final say in all disputes.<br /> For a full refund of accommodation fees, cancellation must be made five full days prior to listing’s local check in time (or 3:00 PM if not specified) on the day of check in.<br /><br /> For example, if check-in is on Friday, cancel by the previous Sunday before check in time. <br /> If the guest cancels less than 5 days in advance, the first night is non-refundable but 50% of the accommodation fees for remaining nights will be refunded. <br /> <br />If the guest arrives and decides to leave early, 50% of the accommodation fees for the nights not spent 24 hours after the cancellation occurs are refunded.</p>
							</div>
                            
                            <h1>Guest Refund Policy</h1>
							<div class="text-wrap">	
								<p> <strong>If you experience a travel issue that prevents you from being able to complete a trip with us, and you’re unable to resolve with the host, our Guest Refund Policy may be applied in certain circumstances.</strong> <br /><br /> <strong>Eligible travel issues </strong><br /> <br />Situations that may be eligible for a refund under this policy generally fall into one of three categories:  <br /><br /> &#9679;The host fails to provide reasonable access to the booked listing.<br /> &#9679;The listing booked is misrepresented (ex: number of bedrooms, location, lacks promised amenities).<br /> &#9679;The listing isn't generally clean, is unsafe, or there's an animal in the listing that wasn't disclosed prior to booking. <br /><br /> We will either provide you with a refund or use reasonable efforts to find and book you at another comparable accommodation for any unused nights left in your reservation. The amount of any refund will depend on the nature of the travel Issue suffered. <br /> <br />If the guest arrives and decides to leave early, 50% of the accommodation fees for the nights not spent 24 hours after the cancellation occurs are refunded.</p>
							</div>
							
							<h1>Children and extra beds</h1>
							<div class="text-wrap">	
								<p><strong>Free!</strong> All children under 8 years stay free of charge when using existing beds.<br /><strong>Free!</strong> All children under 2 years stay free of charge for children’s cots/cribs.<br /><br />All older children or adults are charged € 40 per person per night for extra beds.<br />The maximum number of extra beds/children’s cots permitted in a room is 1.<br />Any type of extra bed or child’s cot/crib is upon request and needs to be confirmed by management.<br />Supplements are not calculated automatically in the total costs and will have to be paid for separately.</p>
							</div>
							
							<h1>Pets</h1>
							<div class="text-wrap">	
								<p>Pets are allowed. Charges may be applicable.</p>
							</div>
							
							<h1>Payment Accepted</h1>
							<div class="text-wrap">	
								<p>Bank Wire Transfer<br />The property reserves the right to pre-authorise payment prior to arrival.</p>
							</div>
						</article>
					</section>
					<!--//description-->
					
					<!--facilities-->
					<section id="facilities" class="tab-content">
						<article>
							<h1>Facilities</h1>
							<div class="text-wrap">	
								<ul class="three-col">
								<li>Bedrooms: <?php echo $row['bedroom']; ?> </li>
								<li>Bathrooms: <?php echo $row['rooms']; ?> </li>
								<li>Beds: <?php echo $row['notes']; ?> </li>
								<li>Max Guests:<?php echo $row['generale']; ?> </li>
									<li>Internet</li>
									<li>Kitchen</li>
									<li>Ironing board</li>
									<li>Cable TV</li>
									<li>Heating</li>
									<li>Iron</li>
									<li>Air conditioning</li>
									<li>TV</li>
									<li>Hair dryer</li>
									<li>Essentials</li>
									<li>Crib</li>
									<li>Hangers</li>
									<li>Shampoo</li>
									<li>Family amenities</li>
									<li>Washer</li>
									<li>Dryer</li>
									<li>Family/kid friendly</li>
									<li>Car hire</li>
									<li>Pool: <?php echo $row['outdoors']; ?> </li>
									<li>Airport Shuttle Service</li>
								</ul>
							</div>
							
							<h1>Safety features</h1>
							<div class="text-wrap">	
								<p>First aid kit, Fire extinguisher </p>
							</div>
							
							<h1>Internet</h1>
							<div class="text-wrap">	
								<p><strong>Free!</strong> WiFi is available in all areas and is free of charge. </p>
							</div>
							
							<h1>Parking</h1>
							<div class="text-wrap">	
								<p>Private parking is possible (reservation is not needed) <strong>Free!</strong>.</p>
							</div>
						</article>
					</section>
					<!--//facilities-->
					
					<!--location-->
					<section id="location" class="tab-content">
						<article>
							<!--map-->
								<div class="gmap" id="map_canvas"></div>
							<!--//map-->
						</article>
					</section>
					<!--//location-->
					
					<!--reviews-->
					<section id="reviews" class="tab-content">
						<article>
							<h1>Reviews</h1>
							<div class="score">
								<span class="achieved">9 </span>
								<span> / 10</span>
								<p class="info">Based on <?php echo $row['other']; ?> reviews</p>
								<p class="disclaimer">Guest reviews are written by our customers <strong>after their stay.</strong></p>
							</div>
							
							<dl class="chart">
								<dt>Clean</dt>
								<dd><span id="data-one" style="width:100%;">10&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Comfort</dt>
								<dd><span id="data-two" style="width:100%;">10&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Location</dt>
								<dd><span id="data-three" style="width:90%;">9&nbsp;&nbsp;&nbsp;</span></dd>
								<dt>Value for money</dt>
								<dd><span id="data-six" style="width:80%;">8&nbsp;&nbsp;&nbsp;</span></dd>
							</dl>
						</article>
						
						<article>
							<h1>Guest reviews</h1>
							<ul class="reviews">
<?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
								<!--review-->
								<li>
									<figure class="left"><?php echo "<img src=\"".$row['poza1']."\" style=\"width:70px;\" alt=\"avatar\" />\n"; ?></figure>
									<address><span><?php echo $row['guestname']; ?></span><br />Guests:<?php echo $row['numberguests']; ?><br /><?php echo $row['country']; ?><br /><?php echo $row['date']; ?></address>
									<div class="pro"><p><?php echo $row['positive']; ?></p></div>
									<div class="con"><p><?php echo $row['negative']; ?></p></div>
								</li>
								<!--//review-->
                                
                                <?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
								<!--review-->
								<li>
									<figure class="left"><?php echo "<img src=\"".$row['poza1']."\" style=\"width:70px;\" alt=\"avatar\" />\n"; ?></figure>
									<address><span><?php echo $row['guestname']; ?></span><br />Guests:<?php echo $row['numberguests']; ?><br /><?php echo $row['country']; ?><br /><?php echo $row['date']; ?></address>
									<div class="pro"><p><?php echo $row['positive']; ?></p></div>
									<div class="con"><p><?php echo $row['negative']; ?></p></div>
								</li>
								<!--//review-->
                                 <?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
								<!--review-->
								<li>
									<figure class="left"><?php echo "<img src=\"".$row['poza1']."\" style=\"width:70px;\" alt=\"avatar\" />\n"; ?></figure>
									<address><span><?php echo $row['guestname']; ?></span><br />Guests:<?php echo $row['numberguests']; ?><br /><?php echo $row['country']; ?><br /><?php echo $row['date']; ?></address>
									<div class="pro"><p><?php echo $row['positive']; ?></p></div>
									<div class="con"><p><?php echo $row['negative']; ?></p></div>
								</li>
								<!--//review-->
                                 <?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
								<!--review-->
								<li>
									<figure class="left"><?php echo "<img src=\"".$row['poza1']."\" style=\"width:70px;\" alt=\"avatar\" />\n"; ?></figure>
									<address><span><?php echo $row['guestname']; ?></span><br />Guests:<?php echo $row['numberguests']; ?><br /><?php echo $row['country']; ?><br /><?php echo $row['date']; ?></address>
									<div class="pro"><p><?php echo $row['positive']; ?></p></div>
									<div class="con"><p><?php echo $row['negative']; ?></p></div>
								</li>
								<!--//review-->
                                 <?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
								<!--review-->
								<li>
									<figure class="left"><?php echo "<img src=\"".$row['poza1']."\" style=\"width:70px;\" alt=\"avatar\" />\n"; ?></figure>
									<address><span><?php echo $row['guestname']; ?></span><br />Guests:<?php echo $row['numberguests']; ?><br /><?php echo $row['country']; ?><br /><?php echo $row['date']; ?></address>
									<div class="pro"><p><?php echo $row['positive']; ?></p></div>
									<div class="con"><p><?php echo $row['negative']; ?></p></div>
								</li>
								<!--//review-->
								
								
								
								
								
								
								
							
                                <?php
								?>
							</ul>
						</article>
					</section>
					<!--//reviews-->
					
					
                    
                   
				</section>
				<!--//hotel content-->
				
				<!--sidebar-->
				<aside class="right-sidebar">
                
					<!--hotel details-->
                    <?php

require_once("mysql_connect.php");

$gid = intval($_GET['id']);

$q = mysql_query("SELECT * FROM hotdeals WHERE id='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);

if (isset($gid) and is_numeric($gid))
{
?>
					<article class="hotel-details clearfix">
						<h1><?php echo $row['title']; ?> 
							
						</h1>
						<span class="address"><?php echo $row['country']; ?>, <?php echo $row['city']; ?></span>
                         <span class="stars">
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
								<img src="images/ico/star.png" alt="" />
							</span>
						<div class="description">
                       
							<p><h4>Price: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; € <?php echo $row['price']; ?> / night <br/> Max Guests: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['generale']; ?> <br/>Discount Applied:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;-  <?php echo $row['discount']; ?>%</h4>  </p>
						</div>
						
						<div class="description">
                       
							<p><?php echo $row['keye']; ?>. </p>
						</div>
						<div class="tags">
							<?php
echo "<a href= \"inquiryhotdeals?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">&nbsp;&nbsp;Inquiry&nbsp;&nbsp;</a>\n";
?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php
echo "<a href= \"bookinghotdeals-step1?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">Book now</a>\n";
?>
						</div>
					</article>
                         <?php
}
else
{
	echo "<h1>Not found</h1>";
}
	
?>
					<!--//hotel details-->
<?php

require_once("mysql_connect.php");

$q = mysql_query("SELECT * FROM review WHERE RAND()<(SELECT ((1/COUNT(*))*10) FROM review) ORDER BY RAND() LIMIT 1; ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>						
					<!--testimonials-->
					<article class="testimonials clearfix">
						<blockquote><?php echo $row['positive']; ?> </blockquote>
						<span class="name">- <?php echo $row['guestname']; ?></span>
					</article>
					<!--//testimonials-->
					
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
     <?php
}
else
{
	echo "<h1>Not found</h1>";
}
	
?>
	<!--//footer-->
	<script>
		// Initiate selectnav function
		selectnav();
	</script>
	</body>
</html>