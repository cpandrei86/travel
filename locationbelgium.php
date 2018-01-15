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
	<title>--WebSite Name--- - Belgium</title>
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
				
					<h1>Belgium</h1>
					
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
$gid = 'Belgium';
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
								<span><?php echo "<a href='locationbelgium?page=1'>".'First page'."</a> "; // Goto 1st page  ?> </a></span>
                                    
                                    <?php
									for ($i=1; $i<=$total_pages; $i++) { 
									
									 ?>
                                    
									<span><?php echo "<a href='locationbelgium?page=".$i."'>".$i."</a> ";?></span>
									
                                     <?php
	};					
 ?>
									<span><?php echo "<a href='locationbelgium?page=$total_pages'>".'Last page'."</a> "; // Goto last page ?></a></span>
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
							<h1>Belgium</h1>
							<figure class="left_pic"><img src="images/uploads/belgium.jpg" alt="Things to do - Paris general" /></figure>
							<p class="teaser">The real heaven of beer, chocolate, fries and waffles. But these are of course not the only reasons for visiting Belgium. Bruges is a postcard perfect stop on any tour of Europe. It is one of the best preserved pre-motorized cities in Europe and offers the kind of charms rarely available elsewhere. </p>
							<p>The historic city center is a prominent World Heritage Site of UNESCO. The Historic Centre of Bruges is an outstanding example of an architectural ensemble, illustrating significant stages in the commercial and cultural fields in medieval Europe.

Near Bruges you can enjoy the city of Ghent. Being located closely to Bruges this is city is ideal for as well a day trip as a complete city trip. It’s less known then Bruges but certainly just as beautiful, one of the hidden gems in Europe. </p>
							<p>If you want to relax and enjoy a little pampering then surely you’re going to want to visit the town of Spa, from which the all spas take their name!

But probably the most comprehensive town is Bruxelles. Here you can have a stop at the Atomium which was recently renovated and all but three of the steel spheres are available to enter and contain everything from an exhibition space, to a restaurant, to a place for Belgian school kids to have sleepovers. Designed by André Waterkeyn (the director of a federation of metallurgical companies and not a sculptor by trade), one of the original ideas had been to build an upside down version of the Eiffel Tower, but in keeping with a 1950s atomic age theme, they built the Atomium. Nearby the Atomium is Mini-Europe, a theme park featuring miniature replicas of European monuments. </p>
							<p>If you want to find out more about machines and planes then you should go both in Cinquantenaire Park where you will find  the Royal Museum of the Armed Forces and Military History which is a military museum that occupies the two northernmost halls of the historic complex in Cinquantenaire Park in Brussels, Belgium, and also pay a visit to AutoWorld, a vintage car museum. Also, in the center of Bruxelles you will find the Kunstberg, meaning “hill/mount of the arts”. </p>
							<p>Without doubt you should visit the Royal Greenhouses of Laeken, the most impressive of Leopold’s creations in Brussels. Built on the grounds of the Palace of Laeken between 1884 and 1886, is an extravagant creation, complete with thirty pavilions connected to the prize of the complex, the Winter Gardens. Towering over the grounds, the beautiful glass dome of the garden shines royally above all else. Inside, the beauty is no less impressive. Exotic tropical plants make up a sizable portion of the gardens. However, the standouts of the collection are the azaleas and geraniums, which, when in bloom, brightly light up the corridors of the garden, catching the sunlight and pleasing every side of the senses. </p>
							<p> For a real experience in nature, you should try Pairi Daiza, a privately owned 55-hectare zoo and botanical garden located in Brugelette in the province of Hainaut in Belgium. The animal theme park is located on the site of the former Cistercian Cambron Abbey, and is home to over 4,000 animals.</p>
							<table>
								<tr>
									<th>Capital</th>
									<td>Brussels</td>
								</tr>
								<tr>
									<th>Country</th>
									<td>Belgium</td>
								</tr>
								<tr>
									<th>Area</th>
									<td>30,528 km2 (11,787 sq mi)</td>
								</tr>
								<tr>
									<th>Time zone</th>
									<td>UTC+01:00</td>
								</tr>
								<tr>
									<th>Languages spoken</th>
									<td>Dutch, French, German</td>
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
							<figure class="left_pic"><img src="images/uploads/sportbelgium.jpg" alt="Things to do - London Sports and nature" /></figure>
							<p class="teaser">The romantic landscape of Belgium is completed by the opportunities full of adrenaline like Kayaking in the Ardennes. The river Lesse is shallow and safe but the downstream current carries you along with minimal paddling effort. The hire stations are accessible by bus and train, and the route passes through sun-dappled woodland, past chateaux and cliffs to the confluence with the Meuse, where refreshments await.</p>
							<p>On a hot afternoon in summer the whole of Belgium takes to the river – a hilarious regatta of kids, grannies, sedate couples, stag parties and even the odd pooch. Also you can see Belgium on two wheels either on
Sonian Forest near Brussels, or in Bruges. Sonian has well marked, smooth, flat cycle routes criss-crossing through tall dense beech trees and beautiful old oaks.</p>
						<p>Bruges can be discovered in several ways, on foot, on two wheels, by boat or by the carriage, or why not by ballooning. Cycling in Bruges is the perfect way to discover the historical centre. Bruges citizens make fanatical use of their bikes. Up to 60% of all incoming traffic in the city center are cyclists. In 2012 Bruges received a nomination for ¨Belgium cycle city of the year¨. Also, for 15 years Bruges has been the starting point for the Tour of Flanders. </p>
						<p>If you are a runner, try running the 7km circle around the old center. Walk along the canal and see all of the medieval gates that used to control the traffic in and out of Bruges. Simply stunning!  Or you should opt for a beautiful walk among the city’s remaining windmills. Four old, romantic looking windmills are still located alongside the old moat and medieval city gates, on Bruges’ original city wall, now covered with lush green grass. </p>
						<p>Another option is to climb the Lion’s Mound In Waterloo. Napoleon was defeated in Belgium before it officially became Belgium, in 1815 during the Battle of Waterloo. Several sites in this city south of Brussels tell the story of what happened before, during and after the battle, but the most famous one is the Lion’s Mound. You can climb all the way to the top of this artificial hill and have a view over what used to be the battlefield. </p>
						</article>
					</section>
					<!--//Sports and nature-->
					
					<!--Nightlife-->
					<section id="nightlife" class="tab-content">
						<article>
							<h1>Nightlife</h1>
							<figure class="left_pic"><img src="images/uploads/Nightlifebelgium.jpg" alt="Things to do - London Nightlife" /></figure>
							<p class="teaser">Belgians are known for their beer, so you better stop at one of their breweries. 

Tucked away on a cobblestone backstreet in the heart of Brussels is the Délirium Café. Its bold name stems from the Belgian pale ale Delirium Tremens, and the front doors sport painted pink elephants in honor of the “Best Beer in the World.” Known for it’s hefty beverage selection, this bar offers a collection of over 2,000 beers

De Brugse Bierkaai makes four different types of beers, and you can get a tour of the facilities that comes with a free flight.</p>
							<p>This brewery makes dark, light and specialty beers for you to try. You can also have a snack here as well. There’s also De Halve Maan and the Straffe Hendrick  brewery as well for even more beers to try.

Bruges is not just for lovers, but also for party lovers. So, when the sun goes down you can have some little fun in the center. Here you can find plenty of Bars. Most of them are traditional Belgian but you can also find Irish influences in the different pubs around the center square too. However, you may find it difficult to converse with the bartenders if you don’t speak much of the language. </p>
						<p>When it comes to clubs, you will likely be able to find something open on Friday or Saturday nights.

In Bruges as in whole Belgium you will find also whopping 16 Michelin-starred restaurants, from the well-established De Karmeliet with its elegant tasting menu to new kid on the block Lieven with its modern take on the classics. More affordable though is Zeno, where a three-course seasonal menu is just €38 with an atmosphere reminiscent of dining in someone’s (very stylish) home. </p>
						</article>
					</section>
					<!--//Nightlife-->
					
					<!--Culture and history-->
					<section id="culture" class="tab-content">
						<article>
							<h1>Culture and history</h1>
							<figure class="left_pic"><img src="images/uploads/culturebelgium.jpg" alt="Things to do - London general" /></figure>
							<p class="teaser">In Belgium you can find a lots of beautiful castle that worth paying a visit. The Gravensteen is a castle in Ghent originating from the Middle Ages. The name means “castle of the counts” in Dutch. Gravensteen is situated at an altitude of 9 meters.</p>
							<p>This fairytale castle was built as a show of power but was nearly torn down thanks to its history of torture.  Constructed over the site of a much weaker looking wooden castle by a pompous count, the fairytale fortress known as Gravensteen became a house of torture and injustice and was almost torn down later on due to the memory of those atrocities. </p>
						<p>Today, the site has been greatly restored still retaining a decorative moat on three sides, and is open to the public, even featuring a torture museum, possibly as some sort of mea culpa. Despite its grim past, Gravensteen is still one of the most stunning historic castles remaining in the world.       

The Castle of Vêves occupies a rocky platform just outside the village of Celles, in the province of Namur, Belgium. It is classified as Major Heritage of Wallonia

The Cloth Hall is a large cloth hall, a medieval commercial building, in Ypres, Belgium. It was one of the largest commercial buildings of the Middle Ages, when it served as the main market and warehouse. </p>
						<p>The Belfry of Bruges is a medieval bell tower that sits in Market Square, and it is listed as one of the top things to do in Bruges. It’s 366 steps to reach the top and once you do you’ll be rewarded with panoramic views of the city.

If you are an art lover for certain the Groeningen Museum is the spot. It houses an impressive collection of Flemish and Belgian paintings by many great masters. The museum is located in the Groeningedistrict on the former site of the Eekhout Abbey. </p>
						<p>Whenever you happen to be on a city trip in beautiful Bruges, don’t forget to pay this permanent exhibition on Salvador Dalí a visit. Located in the city’s most prestigious building, the Belfry, this exhibition is an experience you won’t easily find in other museums. An audiovisual spectacle with sensational and dramatic decor, it represents not only Dalí’s work but the man’s character and vision of life as well. A fantastic collection of graphic works, sculptures, aquarelles and drawings are there to be marveled at while bathing in a golden and pink light. An unforgettable experience.

Last but not at least you should see the See-through church in Borgloon. This chapel/art installation by Belgian architects Pieterjan Gijs and Arnout Van Vaerenbergh is modelled on the traditional village church, but constructed from horizontal steel plates so that from some angles, it appears solid, while from others it dissolves into the landscape.  </p>
						<p>Belgium is the undisputed home of gourmet chocolate and Bruges is the best place to shop for it. Pay a visit to The Chocolate Line – and get ready to swear off the Dairy Milk forever. This is real chocolate, handcrafted by Dominique Persoone and his team, and featuring flavour combinations you can hardly imagine. Caramel with apple balsamic vinegar, perhaps? Or almond praline with crispy bacon and quinoa?

Finally, don’t forget to buy just one more souvenir out of lance from Breidelstraat, a concentration of lace shops that can furnish you with everything from handkerchiefs to clothing. </p>
						
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
								<a href="https://www.tripadvisor.com/Hotel_Review-g188644-d292822-Reviews-NH_Collection_Brussels_Centre-Brussels.html" target="_blank">
									<h3>NH Collection Brussels
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 91 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g188644-d196130-Reviews-Hotel_Amigo-Brussels.html" target="_blank">
									<h3>Hotel Amigo
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											
										</span>
									</h3>
									<p>From <span class="price">€ 229 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g188671-d227981-Reviews-Crowne_Plaza_Brugge-Bruges_West_Flanders_Province.html" target="_blank">
									<h3>Crowne Plaza Brugge
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 131 <small>/ per night</small></span></p>
									
								</a>
							</li>
							<li>
								<a href="https://www.tripadvisor.com/Hotel_Review-g188671-d243526-Reviews-Hotel_Prinsenhof_Bruges-Bruges_West_Flanders_Province.html" target="_blank">
									<h3>Hotel Prinsenhof Bruges
										<span class="stars">
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
											<img src="images/ico/star.png" alt="" />
										</span>
									</h3>
									<p>From <span class="price">€ 159 <small>/ per night</small></span></p>
									
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