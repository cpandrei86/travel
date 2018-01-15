
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
	<title>--WebSite Name--- - Home</title>
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
	<script type="text/javascript">	
		$(document).ready(function(){
			$(".form").hide();
			$(".form:first").show();
			$(".f-item:first").addClass("active");
			$(".f-item:first span").addClass("checked");
		});
	</script>
 
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
	
	<!--slider-->
	<section class="slider clearfix">
		<div id="sequence">
			<ul>
				<li>
					<div class="info animate-in">
						<h2>Last chance Summer sale</h2><br />
						<p>Holidays last chance, Say YES to a holiday for less</p>
					</div>
					<img class="main-image animate-in" src="images/imagessite/4c9c32776a40ba895d25ebb109aac19a.jpg" alt="" />
				</li>
				
				<li>
					<div class="info animate-in">
						<h2>Save on your Autumn holiday!</h2><br />
						<p>Best places to visit in the fall!</p>
					</div>
					<img class="main-image animate-in" src="images/imagessite/Travel Desktop Wallpaper  Download HD Wallpapers.jpg" alt="" />
				</li>	
				
				<li>
					<div class="info animate-in">
						<h2>Book your winter holiday now!</h2><br />
						<p>December 2017 holidays 40% off! An unique opportunity to realize your dreams</p>
					</div>
					<img class="main-image animate-in" src="images/imagessite/Hd nature Wallpapers For Mac - 500 Collection HD Wallpaper.jpg" alt="" />
				</li>	
				<li>
					<div class="info animate-in">
						<h2>Check out our Hot Deals</h2><br />
						<p>Save Now, Book Later</p>
					</div>
					<img class="main-image animate-in" src="images/imagessite/maldive-islands-resort-3840x2160.jpg" alt="" />
				</li>
				
			</ul>
		</div>
	</section>
	<!--//slider-->
	
	<!--search-->
	<div class="main-search">
		<form id="main-search" name="mainsearch" method="POST" action="search_results" >
			<!--column-->
			<div class="column radios">
				<h4><span>01</span> What?</h4>
				<div class="f-item">
					<input type="radio" name="radio" id="self_catering" value="form2" />
					<label for="self_catering">Holiday Rentals</label>
				</div>
			
				
				
				
			</div>
			<!--//column-->
			
			<div class="forms">
				
				<!--form self catering-->
				<div class="form" id="form2">
					<!--column-->
					<div class="column">
						<h4><span>02</span> Where?</h4>
						<div class="f-item">
							<label for="destination2">Your destination</label>
							<input type="text" placeholder="Country or City" id="destination2" name="sitesearch" />
						</div>
					</div>
					<!--//column-->
					
					<!--column-->
					<div class="column twins">
						<h4><span>03</span> When?</h4>
						<div class="f-item datepicker">
							<label for="datepicker1">Check-in date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker4" 
                            name="datepicker4" readonly /></div>
						</div>
						<div class="f-item datepicker">
							<label for="datepicker2">Check-out date</label>
							<div class="datepicker-wrap"><input type="text" placeholder="" id="datepicker5" 
                            name="datepicker5" readonly /></div>
						</div>
					</div>
					<!--//column-->
				
					<!--column-->
					<div class="column twins last">
						<h4><span>04</span> Who?</h4>
						<div class="f-item spinner">
							<label for="spinner1">Guests</label>
							<input type="text" placeholder="" id="spinner4" name="spinner4" />
						</div>
						
					</div>
					<!--//column-->
				</div>	
				<!--//form self catering-->
				
			</div>
            
			<input type="submit"  name="submitsearch" value="Proceed to results" class="search-submit" id="search-submit" />
		</form>
        <?php

if(isset($_POST['submitsearch'])){
$_SESSION['sitesearch']=$_POST['sitesearch'];
}

?>
	</div>
	<!--//search-->
	
	<!--main-->
	<div class="main" role="main">
		<div class="wrap clearfix">
			
			
			<!--top destinations-->
			<section class="destinations clearfix full">
				<h1>Top destinations around the world</h1>
				
				<!--column-->
				<article class="one-fourth">
                <?php

require_once("mysql_connect.php");

$gid = 'France';

$q = mysql_query("SELECT * FROM all1 WHERE country ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationparis" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></figure>
					<div class="details">
						<a href="locationparis" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationparis" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo $row['price']; ?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationparis" title="View all">
									<span class="small">to</span>
									<span class="price">€ 1200</span>
								</a>
							</div>
						</div>
					</div>

				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
    <?php

require_once("mysql_connect.php");

$gid = 'London';

$q = mysql_query("SELECT * FROM all1 WHERE city ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
                            
					<figure><a href="locationlondon" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></figure>
					<div class="details">
						<a href="locationlondon" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">to</span>
									<span class="price">€ 500</span>
								</a>
							</div>
						</div>
					</div>
                                       
 <?php

	
?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
                 <?php

require_once("mysql_connect.php");

$gid = 'Austria';

$q = mysql_query("SELECT * FROM all1 WHERE country ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationaustria" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></figure>
					<div class="details">
						<a href="locationaustria" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationaustria" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationaustria" title="View all">
									<span class="small">to</span>
									<span class="price">€ 570</span>
								</a>
							</div>
						</div>
					</div>
<?php

	
?>



				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
                <?php

require_once("mysql_connect.php");

$gid = 'belgium';

$q = mysql_query("SELECT * FROM all1 WHERE country ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationbelgium" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationbelgium" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationbelgium" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationbelgium" title="View all">
									<span class="small">to</span>
									<span class="price">€ 770</span>
								</a>
							</div>
						</div>
					</div>
                    <?php

	
?>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
                 <?php

require_once("mysql_connect.php");

$gid = 'switzerland';

$q = mysql_query("SELECT * FROM all1 WHERE country ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationswitzerland" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationswitzerland" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
                                        <?php

	
?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth promo">
               <?php

require_once("mysql_connect.php");

$gid = 'spain';

$q = mysql_query("SELECT * FROM all1 WHERE country ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<div class="ribbon-small">- 20%</div>
					<figure><a href="locationspain" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationspain" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationspain" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationspain" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
 <?php

	
?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
<?php

require_once("mysql_connect.php");

$gid = 2;

$q = mysql_query("SELECT * FROM france WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationspain" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationspain" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationspain" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationspain" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
<?php

?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
                <?php

require_once("mysql_connect.php");

$gid = 2;

$q = mysql_query("SELECT * FROM switzerland WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationswitzerland" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationswitzerland" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
 <?php

?>
				</article>
				<!--//column-->
				<!--column-->
				<article class="one-fourth">
<?php

require_once("mysql_connect.php");

$gid = 2;

$q = mysql_query("SELECT * FROM uk WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationlondon" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationlondon" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
<?php

?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
<?php

require_once("mysql_connect.php");

$gid = 3;

$q = mysql_query("SELECT * FROM switzerland WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationswitzerland" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationswitzerland" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationswitzerland" title="View all">
									<span class="small">to</span>
									<span class="price">€ 5520</span>
								</a>
							</div>
						</div>
					</div>
<?php

?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
<?php

require_once("mysql_connect.php");

$gid = 3;

$q = mysql_query("SELECT * FROM uk WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationlondon" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationlondon" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationlondon" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
<?php

?>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
                <?php

require_once("mysql_connect.php");

$gid = 2;

$q = mysql_query("SELECT * FROM belgium WHERE id ='".$gid."'") or die ("mysql error");

$row = mysql_fetch_assoc($q);


?>
					<figure><a href="locationbelgium" title=""><img u="image" <?php echo "<a href=\"".$row['poza1']."\" $('#gallery').lightBox(); /> <img src=\"".$row['poza1']."\" style=\"width:270px;\" style=\"height:152px;\" />";?></a></a></figure>
					<div class="details">
						<a href="locationbelgium" title="View all" class="gradient-button">View all</a>
						<h5><?php echo "<td> ".$row['city']."</td>";?></h5>
						<span class="count"><?php echo "<td> ".$row['country']."</td>";?></span>
						<div class="ribbon">
							<div class="half hotel">
								<a href="locationbelgium" title="View all">
									<span class="small">from</span>
									<span class="price">€ <?php echo "<td> ".$row['price']."</td>";?></span>
								</a>
							</div>
							<div class="half hotel">
								<a href="locationbelgium" title="View all">
									<span class="small">to</span>
									<span class="price">€ 550</span>
								</a>
							</div>
						</div>
					</div>
 <?php

?>
				</article>
				<!--//column-->
			</section>
			<!--//top destinations-->
			
			
			<!--info boxes-->
			<section class="boxes clearfix">
				<!--column-->
				<article class="one-fourth">
					<h2>Handpicked Hotels</h2>
					<p>All accommodations fulfil strict selection criteria. The result? Vacation rentals that won’t leave you with unwanted surprises.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Detailed Descriptions</h2>
					<p>To give you an accurate impression of the hotel, we endeavor to publish transparent, balanced and precise hotel descriptions. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Exclusive Knowledge</h2>
					<p>We’ve done our research. Our scouts are always busy finding out more about our hotels, the surroundings and activities on offer nearby.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>Passionate Service</h2>
					<p>Our team will cater to your special requests. We offer expert and passionate advice for finding the right accommodations. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Best Price Guarantee</h2>
					<p>We offer the best accommodations at the best prices. If you find the same room category on the same dates cheaper elsewhere, we will refund the difference. Guaranteed, and quickly. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>Secure Booking</h2>
					<p>Our reservation system is secure and your personal information is encrypted.<br />We work to high standards and guarantee your privacy. </p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth">
					<h2>24/7 Guest Support</h2>
					<p>Every guest is appointed a Personal Concierge, with local service now available in key destinations. Upon arrival, our 24Seven Concierge is available 24/7.</p>
				</article>
				<!--//column-->
				
				<!--column-->
				<article class="one-fourth last">
					<h2>How We Work</h2>
					<p>Search our website for your dream vacation! Call or e-mail us and speak to a specialist. Tell us what's important to you, when you want to go and how much you want to spend.</p>
				</article>
				<!--//column-->
			</section>
			<!--//info boxes-->
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