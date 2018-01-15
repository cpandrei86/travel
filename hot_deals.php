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
	<title>--WebSite Name--- - Hot deals</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/bgr/favicon.ico" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
					<!--crumbs-->
					<ul class="crumbs">
						<li><a href="index" title="Home">Home</a></li> 
						                                      
					</ul>
					<!--//crumbs-->
				</nav>
				<!--//breadcrumbs-->
				
				<!--top destinations-->
				
				
				
				<section class="full">
                <?php 
$num_rec_per_page=4;
require_once ("mysql_connect.php");
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 

$sql = "SELECT * FROM hotdeals ORDER BY id LIMIT $start_from, $num_rec_per_page "; 
$rs_result = mysql_query ($sql); 


?> 
					<h1>Hot Deals</h1>
					<div class="deals clearfix">
                     <?php 
while ($row = mysql_fetch_assoc($rs_result)) { 
?>
						<!--deal-->
						<article class="one-fourth promo">
							<div class="ribbon-small">- <?php echo $row['discount']; ?>%</div>
							<figure><a href="hot_deals_view" title=""><?php echo " <a href=\"hot_deals_view?id=".$row['id']."\"> <img src=\"".$row['poza1']."\"  /></a>";?></figure>
							<div class="details">
								<h1><?php echo "<a href='hot_deals_view?id=".$row['id']."'>". $row['title']. "</a>"?> 
									<span class="stars">
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
										<img src="images/ico/star.png" alt="" />
									</span>
								</h1>
								<span class="address"><?php echo $row['country']; ?>, <?php echo $row['city']; ?></a></span>
								
								<span class="price">Bedroom: <?php echo $row['bedroom']; ?><br/>Price: <em>€<?php echo $row['price']; ?> </em> </span>
								<div class="description">
									<p><?php echo $row['keye']; ?> <a<?php echo " <a href=\"hot_deals_view?id=".$row['id']."\"> \"More info\" </a>";?></a></p>
								</div>
								<div>
                                    <?php
echo "<a href= \"hot_deals_view?id=".$row['id']."\" title=\"Book now\" class=\"gradient-button\">Book </a>\n";
?> </div>
							</div>
						</article>
                        <?php 
							
							
}; 




?> 
						<!--//deal-->
						
						
					</div>
					
					
					
					
					
				</section>
                
				<!--//top destinations-->
			</div>
            <!--bottom navigation-->
                            <?php 
							
$sql = "SELECT * FROM hotdeals ORDER BY id"; 
$rs_result = mysql_query($sql); 
$total_records = mysql_num_rows($rs_result); 
$total_pages = ceil($total_records / $num_rec_per_page); 

 


             
 

?>
							<div class="bottom-nav">
								<!--back up button-->
								<a href="#" class="scroll-to-top" title="Back up">Back up</a> 
								<!--//back up button-->
								
								<!--pager-->
								<div class="pager">
								<span><?php echo "<a href='hot_deals?page=1'>".'First page'."</a> ";  ?> </a></span>
                                    
                                    <?php
									for ($i=1; $i<=$total_pages; $i++) { 
									
									 ?>
                                    
									<span><?php echo "<a href='hot_deals?page=".$i."'>".$i."</a> ";?></span>
									
                                     <?php
	};					
 ?>
									<span><?php echo "<a href='hot_deals?page=$total_pages'>".'Last page'."</a> ";  ?></a></span>
								</div>
								<!--//pager-->
							</div>
							<!--//bottom navigation-->
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