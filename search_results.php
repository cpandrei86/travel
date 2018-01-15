
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
	<title>--WebSite Name--- - Search results</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/bgr/favicon.ico" />
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/jquery.raty.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/selectnav.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    
	<script type="text/javascript">
	$(document).ready(function() {
		$('dt').each(function() {
			var tis = $(this), state = false, answer = tis.next('dd').hide().css('height','auto').slideUp();
			tis.click(function() {
				state = !state;
				answer.slideToggle(state);
				tis.toggleClass('active',state);
			});
		});
		
		$('.view-type li:first-child').addClass('active');
		
		$('#star').raty({
			score    : 3,
			click: function(score, evt) {
			alert('ID: ' + $(this).attr('id') + '\nscore: ' + score + '\nevent: ' + evt);
		  }
		});
		
		
	});
	
	$(window).load(function () {
	var maxHeight = 0;
			
	$(".three-fourth .one-fourth").each(function(){
	if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
	});
	$(".three-fourth .one-fourth").height(maxHeight);	
	});	

	</script>
    
    <script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeOut(7000);
	  
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

    
<!--backbutton-->
<script>
  document.write('<a href="' + document.referrer + '">Back to results</a>');
</script>
<!--//backbutton-->

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
						
						<li><a title="Hotels">Your Search: </a></li>
						<strong><li><a title="United Kingdom"><?php echo $selected_val;	?></a></li></strong>
						  
						                                       
					</ul>
					<!--//crumbs-->
					
					<!--top right navigation-->
					<ul class="top-right-nav">
						<li><a href="index" title="Back to results">Back to results</a></li>
						<li><a href="index" title="Change search">Change search</a></li>
					</ul>
					<!--//top right navigation-->
				</nav>
				<!--//breadcrumbs-->
			
				
			
				<!--three-fourth content-->
					<section class="three-fourth">
                  
						<div class="sort-by">
							<h3>View by</h3>
							
							
							<ul class="view-type">
								<li class="grid-view"><a href="#" title="grid view">grid view</a></li>
								<li class="list-view"><a href="#" title="list view">list view</a></li>
								
							</ul>
						</div>
						
						<div class="deals clearfix">
							<!--deal-->
                            <?php
}

require_once("mysql_connect.php");

$num_rec_per_page=40;
if (isset ($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
	
	$sql = "SELECT * FROM all1 WHERE '$selected_val' = country OR '$selected_val' = city ORDER BY price ASC LIMIT $start_from, $num_rec_per_page";	
	
	$res = mysql_query($sql);
	
	if (mysql_num_rows($res)!=0) 	
	{
		
						
		while ($row = mysql_fetch_assoc($res))	
		{
?>
							<article class="one-fourth">
                            
								<figure><a href="self_catering_view" title=""><?php echo " <a href=\"self_catering_view?id=".$row['id']."\"> <img src=\"".$row['poza1']."\" /></a>";?></figure>
								<div class="details">
									<h1><?php echo "<a href='self_catering_view?id=".$row['id']."'>". $row['title']. "</a>"?> 
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h1>
									<span class="address"><?php echo "{$row['country']}";	?>  • <?php echo "{$row['city']}";	?>
                                    </span>
									<br/>
									<span class="price">Bedroom: <?php echo $row['bedroom']; ?><br/>Price: <em>€<?php echo $row['price']; ?> </em> </span>
									<br/>
									<div class="description">
										<p><?php echo "{$row['keye']}";?>. <a href="hotel.html">More info</a></p>
									</div>
									<?php
echo "<a href= \"self_catering_view?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">Book now</a>\n";
?>
                                     
								</div>
                              

							</article>
                            <?php
		}
				
	}
	else	
	{
		echo " <h1> Nothing found! Please select your search ex. Paris, ex. France</h1>";
	}
	

	
?> 
							<!--//deal-->
							
							
							
							<!--bottom navigation-->
                            <?php 
			
$sql = "SELECT * FROM all1 WHERE '$selected_val' = country OR '$selected_val' = city"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

 


             
 

?>
							<div class="bottom-nav">
								<!--back up button-->
								<a href="#" class="scroll-to-top" title="Back up">Back up</a> 
								<!--//back up button-->
								
								
							</div>
							<!--//bottom navigation-->
						</div>
                       
					</section>
                     
				<!--//three-fourth content-->
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
					</aside>
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
				<p>Carrer de s'Illa, 07713, Punta Prima, Illes Balears, Spain</p>
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
		// Initiate selectnav function
		selectnav();
	</script>
   
</body>
</html>