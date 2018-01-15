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
	<title>--WebSite Name--- - France</title>
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
      $(".loader").fadeOut(5000);
	  
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
					
				
				</nav>
				<!--//breadcrumbs-->

				<!--three-fourth content-->
				<section class="three-fourth">
				
					<h1>France</h1>
					
					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
                        
							<li><a href="#self_catering" title="Self-catering">Self-catering</a></li> 
                      <li><a href="#general_info" title="General information">General information</a></li>
							<li><a href="#sports_and_nature" title="Sports and nature">Sports and nature</a></li>
							<li><a href="#nightlife" title="Nightlife">Nightlife</a></li>
							<li><a href="#culture" title="Culture and history">Culture / history</a></li>
							
							
							
							
						</ul>
					</nav>
					<!--//inner navigation-->
                    <!--Self Catering-->
					<section id="self_catering" class="tab-content">
                    <?php 
$num_rec_per_page=5;
require_once("mysql_connect.php");
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$gid = 'France';
$sql = "SELECT * FROM all1 WHERE country='".$gid."' LIMIT $start_from, $num_rec_per_page "; 
$rs_result = mysql_query ($sql); //run the query


?> 


						<div class="deals">
 <?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?>
							<!--deal-->
							<article class="full-width">
                            
								<figure><a href="self_catering_view" title=""><?php echo " <a href=\"self_catering_view?id=".$row['id']."\"> <img src=\"".$row['poza1']."\"  /></a>";?></figure>
								<div class="details">
									<h1><?php echo "<a href='self_catering_view?id=".$row['id']."'>". $row['title']. "</a>"?>
									
										
									</h1>
									<span class="address"><?php echo $row['country']; ?>, <?php echo $row['city']; ?></span>
									<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									<span class="price">Bedroom: <?php echo $row['bedroom']; ?><br/>Price: <em>€<?php echo $row['price']; ?> </em> </span>
									<div class="description">
										<p><?php echo $row['keye']; ?> <a<?php echo " <a href=\"self_catering_view?id=".$row['id']."\"> \"More info\" </a>";?></a></p>
									</div>	
									<div>
                                    <?php
echo "<a href= \"self_catering_view?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">Book </a>\n";
?> </div>

                                    

								</div>
                                
							</article>
                            <?php 
							
							
}; 




?> 
							<!--//deal-->
						
							
							<!--bottom navigation-->
                            <?php 
							
$sql = "SELECT * FROM all1 WHERE country='".$gid."'"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

 


             
 

?>
							<div class="bottom-nav">
								<!--back up button-->
								<a href="#" class="scroll-to-top" title="Back up">Back up</a> 
								<!--//back up button-->
								
								<!--pager-->
								<div class="pager">
								<span><?php echo "<a href='locationparis?page=1'>".'First page'."</a> "; // Goto 1st page  ?> </a></span>
                                    
                                    <?php
									for ($i=1; $i<=$total_pages; $i++) { 
									
									 ?>
                                    
									<span><?php echo "<a href='locationparis?page=".$i."'>".$i."</a> ";?></span>
									
                                     <?php
	};					
 ?>
									<span><?php echo "<a href='locationparis?page=$total_pages'>".'Last page'."</a> "; // Goto last page ?></a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
						</div>


					</section>
					<!--//Self Catering-->
					
					<!--General information-->
					<section id="general_info" class="tab-content">
						<article>
							<h1>Paris</h1>
							<figure class="left_pic"><img src="images/uploads/paris.jpg" alt="Things to do - Paris general" /></figure>
							<p class="teaser">Paris the city of love, the fashion capital, history venue, literally a fairy-like town. </p>
							<p>It is probably the most interesting city of Europe and even in the world. Paris has a lot of interesting architecture and museums to offer, and is also a Walhalla for shopaholics. A city as Paris is one that everyone should visit and experience.

A trip to Paris is the perfect get-away. One weekend or a couple of days in Paris will be enough to make you feel one with the city and forget about the daily routine back home. Wander around, experience the arty culture, shop until you drop, visit the highlights, just relax in a city park and enjoy the stunning view from the Eiffel tower. </p>
						
							<table>
								<tr>
									<th>Capital</th>
									<td>Paris</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>France</td>
								</tr>
								<tr>
									<th>Area</th>
									<td>643,801 km2 (248,573 sq mi)</td>
								</tr>
								<tr>
									<th>Time zone</th>
									<td>UTC+01:00</td>
								</tr>
								<tr>
									<th>Languages spoken</th>
									<td>French</td>
								</tr>
								<tr>
									<th>Currency</th>
									<td>Euro (€)</td>
								</tr>
								<tr>
									<th>Visa requirements</th>
									<td>No Visa needed</td>
								</tr>
							</table>
						</article>
					</section>
					<!--//General information-->
					
					<!--Sports and nature-->
					<section id="sports_and_nature" class="tab-content">
						<article>
							<h1>Sports and nature</h1>
							<figure class="left_pic"><img src="images/uploads/sportparis.jpg" alt="Things to do - London Sports and nature" /></figure>
							<p class="teaser">The stone beauty of Paris gives way to flowers, greenery, nature and waterways as you stroll through parks and gardens and along the River Seine and Canal Saint-Martin, or perhaps go for a run, a bike ride or other sporting activities.</p>
							<p>Far from the noise and bustle, you can Palais-Royal Gardens. Once a royal residence, the hushed arcades and manicured gardens of the Palais-Royal are now home to world-class perfumers. But nothing can be compare to having a walk to the beautiful Luxembourg Gardens. Bordered by Saint-Germain-des-Prés and the Latin Quarter, these lovely gardens are beloved by Parisians longing to bask on a lawn chair in the sunshine or enjoy an impromptu picnic. <br />Children of all ages race their sailboats in the basin behind the Sénat, romp in the enclosed children's' playground, take in a puppet show, or ride the city's oldest merry-go-round. A favorite circuit for joggers and amblers, the many paths are also perfect for an afternoon stroll past espaliered orchards and the old apiary, where beekeeping is taught and the honey is sold in the fall. Don't miss the excellent art exhibits at the renowned Musée de Luxembourg. </p>
							<p>Just behind the Notre-Dame gardens, you can find a pedestrian bridge, the Pont Saint-Louis, which leads to the atmospheric streets and lively shopping of the Ile Saint-Louis. A perfect walk for flaneurs just taking in the majestic facades and quiet courtyards of beautiful 17th-century mansions, this peaceful island is truly an oasis. Enjoy traditional Parisian fare at the Brasserie de l'Isle Saint-Louis or sample one of the 90 scrumptious flavors of handmade, all-natural ice creams and sorbets—in flavors like wild strawberry, noisette, rum raisin, and white chocolate—at Bertillon, Paris's most famous ice-cream maker. </p>
							<p>Finally, but not at least, give your legs a workout and climb the 284 steps to the top of the Arc de Triomphe.</p>
						</article>
					</section>
					<!--//Sports and nature-->
					
					<!--Nightlife-->
					<section id="nightlife" class="tab-content">
						<article>
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/Nightlifeparis.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">Paris lives, both daily as nightly. In every district of Paris you will find a different atmosphere and different types of day- and nightlife. The Parisian nightlife offers something for everyone. Jazz, rock, pop, disco and techno; you will find everything in this lively city. </p>
							<p>There are cozy music bars with live music, fancy cocktail bars or huge dance clubs. Enjoy dancing in Paris in classic disco’s with exciting lightning, moving dance floors and lounge areas to relax and enjoy a cocktail. </p>
							<p>In the Parisian nightlife you won’t easily get bored when you enjoy the night scene. Actually: there is no time to sleep at all! </p>
							
						</article>
					</section>
					<!--//Nightlife-->
					
					<!--Culture and history-->
					<section id="culture" class="tab-content">
						<article>
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/cultureparis.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">The most recognized symbol of Paris is the Tour Eiffel, but the ultimate traveler's prize is the Louvre. This is the world's greatest art museum—and the largest, with 675,000 square feet of works from almost every civilization on earth. The three most popular pieces here are, of course, the Mona Lisa, the Venus de Milo, and Winged Victory. Beyond these must-sees, your best bet is to focus on whatever interests you the most—and don't despair about getting lost, for you're bound to stumble on something memorable. 

But the Cathédrale de Notre-Dame is the symobolic heart of Paris and, for many, of France itself. Napoléon was crowned here, and kings and queens exchanged marriage vows before is altar. There are a few things worth seeing inside the Gothic cathedral, but the real highlights are the exterior architectural details and the unforgettable view of Paris, framed by stone gargoyles, from the top of the south tower. Begun in 1163, completed in 1345, badly damaged during the Revolution, and restored by architect Eugène Viollet-le-Duc in the 19th century, Notre-Dame may not be France's oldest or largest cathedral, but in beauty and architectural harmony it has few peers—as you can see by studying the facade from the square in front.</p>
							<p>This immensely popular museum rose phoenix-like in late 2014, when it finally reopened after an ambitious (and often controversial) five-year makeover that cost an estimated €52 million. Home to the world’s largest public collection of Picasso’s inimitable oeuvre, it now covers almost 54,000 square feet in two buildings: the regal 17th-century Hôtel Salé and a sprawling new structure in the back garden that's dedicated to temporary exhibitions. Diego Giacometti’s exclusively designed furnishings in the former are an added bonus.<br />Once the great sculptor's studio, this stately 18th-century mansion is one of Paris's most beautiful museums and contains more than 6,000 of Rodin's sculptures, including his great masterpieces The Thinker, The Kiss, The Burghers of Calais, and The Gates of Hell, along with 8,000 drawings and gouaches. The lovely grounds of the Musée Rodin, complete with a fountain, rose gardens, and a pleasant outdoor café make for a delightful afternoon outdoors. The museum also hosts special exhibitions and a cycle of exhibits on contemporary works. Following three years of renovations, the museum fully re-opened in November 2015. </p>
							<p>Musée d'Orsay is also a spot that worse paying a visit. The old Belle Époque Orsay train station was recently renovated and contains the world's largest collection of Impressionist masterpieces by the likes of Cézanne, Monet, Manet, Van Gogh, Degas, Gaugin, and many others. With two excellent cafés and a magnificent restaurant original to the train station, dining is a breeze and guided tours of the museum highlights in English are available every day (see the museum website for times and scheduling). There's also a fabulous bookstore for stocking up on gifts. </p>
							
						</article>
					</section>
					<!--//Culture and history-->
					
					
					

					
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
					
					<!--Popular hotels in the area-->
					<article class="default clearfix">
						<h2>Popular hotels in the area</h2>
						<ul class="popular-hotels">
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187147-d4340356-Reviews-Hotel_Fabric-Paris_Ile_de_France.html" target="_blank">
									<h3>Hotel Fabric
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 181 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187147-d207792-Reviews-Regina_Hotel-Paris_Ile_de_France.html" target="_blank">
									<h3>Regina Hotel
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 372 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187147-d235567-Reviews-Hotel_Keppler-Paris_Ile_de_France.html" target="_blank">
									<h3>Hotel Keppler
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 205 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187147-d6675948-Reviews-Hotel_Da_Vinci_Spa-Paris_Ile_de_France.html" target="_blank">
									<h3>Hotel Da Vinci
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 283 <small>/ per night</small></span></p>
									
								</a>
							</li>
						</ul>
						
					</article>
					<!--//Popular hotels in the area-->
					
                    
                    
                    
                    
					<!--Deal of the day-->
<?php

require_once("mysql_connect.php");

$gid = 'Paris';
$q = mysql_query("SELECT * FROM all1 WHERE city='".$gid."' ") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<article class="default clearfix">
						<h2>Deal of the day</h2>
						<div class="deal-of-the-day">
							
								<figure><a href="self_catering_view.php" title=""><?php echo " <a href=\"self_catering_view?id=".$row['id']."\"> <img src=\"".$row['poza1']."\"  /></a>";?></figure>
								<h3><?php echo $row['title']; ?>
								<br/><?php echo $row['city']; ?>, <?php echo $row['country']; ?>
									<span class="stars">
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
									</span>
								</h3>
								<p>From <span class="price">€ <?php echo $row['price']; ?> <small>/ per night</small></span></p>
								
							
						</div>
					</article>
					<!--//Deal of the day-->
                    
                    
                    
                    
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
		// Initiate selectnav function
		selectnav();
	</script>
</body>
</html>