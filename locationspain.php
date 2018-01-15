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
	<title>--WebSite Name--- - Spain</title>
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
				
					<h1>Spain</h1>
					
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
$gid = 'Spain';
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
									
                                    <?php
echo "<a href= \"self_catering_view?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">Book</a>\n";
?>

                                    

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
								<span><?php echo "<a href='locationspain?page=1'>".'First page'."</a> "; // Goto 1st page  ?> </a></span>
                                    
                                    <?php
									for ($i=1; $i<=$total_pages; $i++) { 
									
									 ?>
                                    
									<span><?php echo "<a href='locationspain?page=".$i."'>".$i."</a> ";?></span>
									
                                     <?php
	};					
 ?>
									<span><?php echo "<a href='locationspain?page=$total_pages'>".'Last page'."</a> "; // Goto last page ?></a></span>
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
							<h1>Spain</h1>
							<figure class="left_pic"><img src="images/uploads/spain.jpg" alt="Things to do - Paris general" /></figure>
							
							<p>Besides the astonishing architectural heritage and the relaxing natural beauty, what makes the portrait of Spain genuine is the bustling flea market at El Rastro in Madrid, the frenzied nightlife scene of Ibiza or of Barrio del Carmen in Valencia, the intrinsic fear of the Pamplona Bull Running, the sheer fun of Buñol’s La Tomatina festival, the week-long joy in La Feria de Sevilla of the flamenco, the pleasure from tapas and wine, the constant fiestas and siestas, and of course, the corrida.
</p>
						
							<table>
								<tr>
									<th>Capital</th>
									<td>Madrid</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>Spain</td>
								</tr>
								<tr>
									<th>Area</th>
									<td>504,782 km2 (194,897 sq mi)</td>
								</tr>
								<tr>
									<th>Time zone</th>
									<td>UTC+01:00</td>
								</tr>
								<tr>
									<th>Languages spoken</th>
									<td>Spanish</td>
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
							<figure class="left_pic"><img src="images/uploads/sportspain.jpg" alt="Things to do - London Sports and nature" /></figure>
							
							<p>In Spain, you better run! bullfighting is an inescapable part of Spain's history and are places where you can be a toreador right in the street. Also, if you are a football lover than Camp Now, Barcelona’s football stadium is the place for you.  We recommend you to try to pick up some tickets and bare witness to possibly the greatest footballer of all time, Messi. If you do, try and learn some of the chants before you head to the game, or go to a bar beforehand and befriend someone heading to the match.
							<br />If you don’t like big crowds, but you still want to keep in shape, than a walk along Las Ramblas is ideal. This street is set out only for pedestrians and is lined with markets. Soon as you get tired, you can stop off in a cafe on the Las Ramblas, where some coffee and tapas can go a long way. Also, you can try a walk at World’s Scariest Pathway in the tiny Spanish village of El Chorro in the north west of Malaga.
							</p>
							
						</article>
					</section>
					<!--//Sports and nature-->
					
					<!--Nightlife-->
					<section id="nightlife" class="tab-content">
						<article>
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/Nightlifespain.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">When talking about parties definitely Ibiza is the right place. The Island that never sleeps hosts  the world’s biggest nightclub. As stated by the Guinness Book of Records, Privilege takes the throne as the largest place to party on Earth. Founded in the 70’s as a bar and public swimming pool near the village of San Rafael, the club has a capacity of 10,000 people and is especially famous for its extravagant burlesque parties, acrobatic shows, explosive atmosphere, and extraordinary resident and guest DJs.
							
							</p>
							<p>If you prefer a more romantic and authentic night you should try to listen and why not enjoy dancing Flamenco in the gardens of the Alcazar in Seville or in Madrid. Flamenco is not 'a dance'. It's a complete art form that involves singing, guitar, handclaps and, sometimes, dancing.

Another option is dinning in the World’s Oldest Restaurant, almost 300-year-old, Sobrino de Botin is situated in the heart of the Spanish capital, in Madrid, just off Plaza Mayor, this beloved culinary institution founded in 1725 still uses the original 18th century wood-fired oven to prepare some of the best roasted lamb in town. But also you can’t miss eating pinxtos, the local name for tapas. San Sebastian in the Basque Country is fast emerging as the foodie destination in not only Spain but the whole of Europe. Pinxtos The local name for tapas, these are the most gourmet tapas you'll find anywhere in the country.
</p>
							<p>You can’t visit Spain and not enjoy the paella and Spanish wine. There are several paella varieties - bypass the seafood version and go for paella Valenciana. Made from meat instead of seafood, this is the original paella and so is the most 'authentic'. Regarding the Spanish wine, particularly the red, is some of the best in the world, and a lot cheaper than in neighboring France.  </p>
							<p>There are several wonderful place when you want to have a drink. For instance, you can drink a Bharma Beer in the World’s First Lost Themed Bar. Inspired by the American TV show “Lost”, Bharma greets the fans of the mind-bending series with “Black Smoke” sandwiches, Bharma Initiative brew beer, and pieces of wreckage of Oceanic Flight 815 hanging on the walls. Situated in Barcelona, this cool themed bar filled with Lost memorabilia is a one-of-a-kind experience. Or, we give you another option, have a drink in the Only Ice Bar on the Beach Nestled on the beach of El Somorrostro and overlooking the blue waters of the Mediterranean Sea, Icebarcelona is the only beach ice bar in the world. With a spectacular interior made entirely of ice and an ambient temperature that fluctuates between -2° and -10°C, the trendy lounge is not just a great alternative for those who want to escape the scorching heat of the Spanish summers, but also a unique experience that can only be enjoyed in Barcelona. </p>
							<p>A trip to Barcelona gives you so many opportunities, including dinning in the world’s only dessert restaurant. Tucked away in the Ciutat Vella, EspaiSucre (sugar space) is the brainchild of patissier Jordi Butrón and comes with an innovative concept. The restaurant has a cutting-edge industrial-style design and is not just a tapas bar devoted to desserts, but also a cooking school, where both professionals and amateurs can come to learn the art of patisserie. </p>
						</article>
					</section>
					<!--//Nightlife-->
					
					<!--Culture and history-->
					<section id="culture" class="tab-content">
						<article>
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/culturespain.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">Spain has so many treasures and so much history and culture that it’s nearly impossible to turn a corner without stumbling upon something fascinating. It is a country so special and unique that those who visit for the first time will most likely feel right at home, and will almost always return.
</p>
							<p>The best city to start a tour of Spain is Madrid. From there you can get to anywhere: spend your whole trip in the capital and in the surrounding cities of Toledo and Segovia, head south to Andalusia or north to Barcelona and San Sebastian, or go off the beaten path and head to Galicia. Also, the work of Pablo Picasso and Salvador Dali can be found in the Centro de Arte Reina Sofia, one of Madrid's three essential museums. Museo del Prado is another one to be spotted on the map. It houses excellent art from the 14th to the 19th centuries from the likes of Velázquez, Goya and El Greco. The Museo Thyssen-Bornemisza completes the triumvirate of essential Madrid museums.
							<br />Barcelona is without a doubt another popular city for turists. With its Gaudi architecture, Las Ramblas and the vibrant city life, it is a vacation in itself

In the hills of Granada is the Alhambra Moorish fortress, which protected the city's inhabitants from invasion by the Christians for hundreds of years. It certainly worked - Granada was the last city to fall during the Reconquista, the Spanish leg of the Crusades. With its Moorish Alhambra fortress, the free tapas and Moroccan tea houses, you won’t want to leave. 
</p>
							<p>Seville at its best is truly captivating, including its cathedral with its Giralda tower, the neighboring Alcazar castle and garden complex and the Plaza de España.

The Camino de Santiago is an ancient pilgrimage to the tomb of St James in Santiago de Compostela. For most people this involves walking up to 800km across northern Spain, though you can start from anywhere you like. For those who embark on the most popular route, the Camino Frances, this involves a walk through the Pyrenees, through Pamplona and the wine country of La Rioja, before a long stint walking across the Spanish meseta. After reaching Leon, a city renowned for its tapas, you cross into the wonderful green countryside of Galicia.</p>
							<p> Bilbao is home of the Guggenheim Museum, one of Spain's most important museums, and a great place to sample excellent pintxos. Here Frank Gehry’s masterpiece highlights some of the most bizarre art you will find, mainly from the 20th century. The shape of the building itself is something of a wonder. </p>
							<p>San Sebastian has one of the nicest beaches in Spain and even better pintxos. But Spain offers also the possibility for skying. If you are staying in Malaga then you actually have a relatively short journey before you can get your ski’s on. The Sierra Nevada ski resorts are famous worldwide due to the fact that you can ski in the mountains and then head down to the beach to get a tan all within the same day. Don’t be fooled into thinking that this makes any difference on the ski resort as it is definitely one of the best you will find in Europe, despite the contrast of weather in such a close distance.  </p>
							<p>But on top of the to-do list is La Tomatina from Valencia. Is the greatest festival in the world. The party starts with a massive feast on Paella. The following morning thousands of people take to the streets with tomato’s in hand, ready to throw to their hearts content. This is potentially one of the biggest food fights in the world, although make sure you squeeze the tomato before throwing so that it bursts upon impact, preventing them from feeling any pain at all. As soon as the bottle rocket sounds, it’s clean up time and everyone heads on to a bar or to wash themselves. Withal, in Valencia you can see what is considered by Christian theologians to be the Holy Grail, the rumors are not confirmed.  </p>
							
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
								<a href="https://www.tripadvisor.com/Hotel_Review-g187497-d296915-Reviews-Hotel_Pulitzer-Barcelona_Catalonia.html" target="_blank">
									<h3>Hotel Pulitzer
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 204 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187497-d2102457-Reviews-Alma_Barcelona-Barcelona_Catalonia.html" target="_blank">
									<h3>Alma Barcelona
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 235 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187497-d6204834-Reviews-Catalonia_Square-Barcelona_Catalonia.html" target="_blank">
									<h3>Catalonia Square
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 203 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g187497-d583963-Reviews-Grand_Hotel_Central-Barcelona_Catalonia.html" target="_blank">
									<h3>Grand Hotel Central
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 280 <small>/ per night</small></span></p>
									
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