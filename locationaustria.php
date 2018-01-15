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
	<title>--WebSite Name--- - Austria</title>
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
				
					<h1>Austria</h1>
					
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
$gid = 'Austria';
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
							
$sql = "SELECT * FROM all1 WHERE country='".$gid."' "; 
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
								<span><?php echo "<a href='locationaustria?page=1'>".'First page'."</a> "; // Goto 1st page  ?> </a></span>
                                    
                                    <?php
									for ($i=1; $i<=$total_pages; $i++) { 
									
									 ?>
                                    
									<span><?php echo "<a href='locationaustria?page=".$i."'>".$i."</a> ";?></span>
									
                                     <?php
	};					
 ?>
									<span><?php echo "<a href='locationaustria?page=$total_pages'>".'Last page'."</a> "; // Goto last page ?></a></span>
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
							<h1>Austria</h1>
							<figure class="left_pic"><img src="images/uploads/austria.jpg" alt="Things to do - Paris general" /></figure>
							<p class="teaser">Austria, one of Europe's most popular holiday destinations, attracts tourists year-round, and winter is almost as busy as summer in the spectacular mountain regions. </p>
							<p>IVisitors are drawn as much for the scenic beauty of this Alpine republic's provinces as they are for splendid cities like Vienna (Wien), the historic capital, and beautiful Salzburg, birthplace of Wolfgang Amadeus Mozart. One of Europe's smallest countries, Austria is predominantly a nation of upland areas and high mountains, with the Eastern Alps occupying a good 60 percent of its territory. The River Danube flows for about 350 kilometers from west to east through the northern part of the country, adding to its attraction as a tourist destination.
 </p>
						
							<table>
								<tr>
									<th>Capital</th>
									<td>Vienna</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>Austria</td>
								</tr>
								<tr>
									<th>Area</th>
									<td>83,879 km2 (32,386 sq mi)</td>
								</tr>
								<tr>
									<th>Time zone</th>
									<td>UTC+01:00</td>
								</tr>
								<tr>
									<th>Languages spoken</th>
									<td>Austrian German</td>
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
							<figure class="left_pic"><img src="images/uploads/sportaustria.jpg" alt="Things to do - London Sports and nature" /></figure>
							<p class="teaser">Climbing from the village of Kitzbühel can be reached the 1,998 meters, the Kitzbüheler Horn in the Tyrol region, one of the most picturesque of Austria's many summits.</p>
							<p>To the south of the Kitzbüheler Horn rises the 1,772-meter-high Hornköpfli, that can be reached by cableway. In addition to the great views, on the summit, you'll find the Gipfelhaus, a unique mountaintop home; a chapel; a restaurant; and an Alpine garden. During the ski season, the mountains in the immediate vicinity of Kitzbühel bustle with skiers from all over the world. If you want to have fun while snowboarding then the Snowbombing in Mayrhofen is the deal. The festival will take over the picturesque Alps. A week long festival features numerous artists, musicians, venues and other events. In addition, wonderful views, skiing and snowboarding opportunities attract European youth from Ibiza-like environment. “Ride & Seek” competition allows to watch professional athletes demonstrating their dangerous stunts on snow.
							<br />At an altitude of 1,076 meters, Krimml - perched high above the Salzachtal in a wooded valley - is a wonderful place to stop for a few days if you're into hiking. In addition to various excellent walks to the waterfalls, there's a rewarding climb to the Schettbrücke and continuing to the spectacular Krimmler Tauernhaus. From here, expert climbers can tackle the 2,911-meter-high Glockenkarkopf on the Italian frontier.
							</p>
							<p>For nature lovers another option is Eisriesenwelt that could easily be described as an amusement park. Home to a complex of underground ice caves, Eisriesenwelt offers dozens of miles of paths through stunning caverns. After climbing down more than 700 steps, the Eispalast emerges. This is an enormous palace made from ice, and when light hits its walls it sparkles beautifully. The nearest city to Eisriesenwelt is Werfen, where visitors can catch a round-trip shuttle that departs regularly from the city’s train station.
							
							</p>
							
						</article>
					</section>
					<!--//Sports and nature-->
					
					<!--Nightlife-->
					<section id="nightlife" class="tab-content">
						<article>
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/Nightlifeaustria.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">Vienna's club scene is all about parties with music of the highest quality.</p>
							<p>Electronic music from Vienna is known for creating an international sensation - and with good reason. The parties range from chic to underground. Clubs such as Flex have already attained cult status. The program there is just as varied as at the city's other party venues.
							</p>
							<p>Also, Vienna is known for the world’s largest wine-growing capital city. The most extensive area is on the northern fringe in districts 16-19, but the highest quality vines lie over the Danube in the 21st district. On balmy summer evenings, join the Viennese for an evening in a Heuriger, one of the scores of rustic wine taverns dotted among the vineyards that skirt the Vienna Woods. </p>
							
						</article>
					</section>
					<!--//Nightlife-->
					
					<!--Culture and history-->
					<section id="culture" class="tab-content">
						<article>
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/cultureaustria.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">The spectacular Hofburg Palace in Vienna was for centuries the seat of Austria's monarchy, the powerful Habsburgs.</p>
							<p>Now the President conducts state business in the same rooms that once belonged to Emperor Joseph II. Nearly every Austrian ruler since 1275 ordered additions or alterations, resulting in many different architectural influences, including Gothic, Renaissance, Baroque, Rococo, and Classicism. Together with its squares and gardens, the entire Hofburg complex occupies 59 acres encompassing 19 courtyards and 2,600 rooms. Highlights of a visit include the Imperial Silver Collection and an array of dining services giving a taste of the lavish imperial banquets that once took place here; the Sisi Museum, focusing on the life and times of Empress Elisabeth; and the Imperial Apartments, a series of 19 rooms once occupied by Emperor Franz Joseph and his wife.
							
							<br />In Vienna’s inner city is the Ringstraße, or Ring Road, along which countless landmarks are found. Just one of these landmarks is the Vienna State Opera House. The structure itself was constructed in the 19th century in a Neo-Renaissance style. Marble staircases and painted ceilings make this is a truly grand destination. After bombing in World War II, the structure was rebuilt to be true to the original style. While a tour of the building is wonderful, what is even better is attending a musical performance or even a ball, many of which are held annually at the Vienna State Opera.
							
							</p>
							<p>Located west of Vienna, the historic city of Krems marks the point where the blue Danube and the Krems rivers converge at the beginning of the Wachau Valley. Krems boasts a historic city center, and the pedestrian friendly layout encourages exploring the ancient city gates and the castle called Gozzoburg. Krems has a reputation for its impressive wine industry, and many visitors come to explore exactly that. The Weinstadmuseum is a wine-focused museum in the center of town, and there travelers can get great recommendations for local wineries and tasting rooms dotted throughout Krems and along the banks of the Danube.
							</p>
							<p>One of the major tourist attractions in Vienna is Schönbrunn Palace. Comparable in grandeur to Versailles, this 1,441 room palace was built between 1696 and 1712 at the request of Emperor Leopold I and turned into the imperial summer palace by Maria Theresa. The Palace Park offers a lot of attractions, such as the Privy Garden, the oldest zoo in the world, a maze and labyrinth, and a marble summerhouse situated on top of a 60 meter high hill. </p>
							<p>Numerous cities claim a connection to Wolfgang Amadeus Mozart, but few were as important to the famous composer as Salzburg. It's here you'll find No. 9 Getreidegasse, the house where Mozart was born on January 27th, 1756. Now a museum called Mozart's Birthplace, the rooms once occupied by his family are full of mementos, instruments, and portraits. Another address associated with Mozart is Makartplatz 8, where he took up residence in 1773. Mozart's Residence contains many interesting artifacts related to his life and times, and was where the composer entertained Europe's musical elite and wrote many of his symphonies. Afterwards, head to Mozart Square with its large monument to the city's favorite son. Salzburg also hosts a number of music festivals in honor of the composer, including Mozart Week (Jan-Feb) and the six-week long Salzburg Festival (June-Aug). </p>
							<p>Innsbruck is home to the Hofkirche, or Court Church, with its spectacular Tomb of Emperor Maximilian I who died in 1519. Widely considered the finest work of German Renaissance sculpture, the monument's central feature is the massive black marble sarcophagus with a bronze figure of the Emperor. On the sides of the sarcophagus are 24 marble reliefs depicting events in the Emperor's life, and around it stand 28 larger-than-life-size bronze statues of the Emperor's ancestors and contemporaries (look out for King Arthur). Other pieces of sculpture include 23 bronze statues of saints from the Habsburg family and 20 bronze busts of Roman emperors. Innsbruck also has the Maximilianeum, a museum of collectibles from the life of Emperor Maximilian including original documents and belongings. </p>
							<p> Hallstatt, undoubtedly one of the most picturesque small towns in Austria, is a good place from which to explore the spectacular Dachstein Salzkammergut region, a UNESCO World Heritage site. You'll be rewarded with a chance to explore the Dachstein Caves, one of Europe's most impressive cavern networks, which are, in places, up to 1,174 meters deep. Highlights include the Giant Ice Cave with its sub-zero summer temperatures and huge caverns with magnificent frozen waterfalls, and the Mammoth Cave with its huge pipe-shaped galleries formed by an ancient underground river. Above ground, visitors can tackle the superb 5 Fingers viewing platform, an incredible metal structure hanging over a 400-meter sheer drop with excellent views of the surrounding Alps.</p>
							<p> Melk Abbey is one of the world's most famous monastic sites, and its spectacular buildings are laid out around seven courtyards. The most prominent part of this massive 325-meter-long complex is the west end and its twin-towered church rising above a semicircular terrace range. Perched on a rocky outcrop high above the town of Melk and overlooking the Danube, the abbey contains numerous other great reasons to spend a few hours touring it: the tomb of Saint Coloman of Stockerau; the remains of Austria's first ruling family, the House of Babenberg; the superb 196-meter-long Imperial Corridor with its portraits of Austria's rulers, including one of the Empress Maria Theresa; and the Imperial Rooms with their displays relating to the abbey's history, along with statues and paintings.</p>
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
								<a href="https://www.tripadvisor.com/Hotel_Review-g190454-d482579-Reviews-Hollmann_Beletage-Vienna.html" target="_blank">
									<h3>Hollmann Beletage
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 208 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g190454-d264915-Reviews-Das_Capri-Vienna.html" target="_blank">
									<h3>Das Capri
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 101 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g190454-d777415-Reviews-The_Ring_Relais_Chateaux-Vienna.html" target="_blank">
									<h3>The Ring, Relais & Chateaux
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 200 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g190454-d263905-Reviews-Hotel_Altstadt_Vienna-Vienna.html" target="_blank">
									<h3>Hotel Altstadt Vienna
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 162 <small>/ per night</small></span></p>
									
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