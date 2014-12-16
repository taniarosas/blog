<?php 

	require_once(__DIR__ . "/controller/login-verify.php");
	//view is probably where you'll get info from the model or have html code
	//__DIR__ concatinates
	//using header file 
	//it stores the header html code in the header.php file
	require_once(__DIR__ . "/view/header.php");
	if(authenticateUser()){

	//using navigation file
	//it stores the info in navigation
	require_once(__DIR__ . "/view/navigation.php");
		}
	//this is where youll have html code and get info from the model
	//the DIR concatinates
	require_once(__DIR__ . "/controller/create-db.php");

	require_once(__DIR__ . "/controller/read-posts.php");

	//using the footer file
	//it stores the footer html code in the footer.php file
	require_once(__DIR__ . "/view/footer.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header id="header"> 
		Tania's Blog
		<p id="p">App Academy</p>
		<div id="div"></div>
	</header>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  	<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  	</ol>
  <!-- Wrapper for slides -->
  	<div class="carousel-inner">
    <div class="item active">
      <img src="f.jpg" alt="image">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="c.jpg" alt="image">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="b.jpg" alt="image">
      <div class="carousel-caption"> 
      </div>
    </div>
  	</div>
  <!-- Controls -->
  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  	</a>
  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  	</a>
</div>
<section id="section">
		<div id="div1">
			<p>Drinking vinegar chillwave tousled artisan. Seitan freegan wolf, slow-carb fixie master cleanse occupy gentrify Williamsburg Wes Anderson meggings before they sold out Pinterest crucifix 90's. Taxidermy Echo Park you probably haven't heard of them cold-pressed, Neutra seitan narwhal. Brooklyn Thundercats lumbersexual, post-ironic kale chips fap locavore trust fund wayfarers migas distillery messenger bag fashion axe actually. Pinterest pickled irony lomo. Seitan ethical +1 beard, before they sold out yr Helvetica kitsch pork belly irony. Pop-up pork belly mustache wayfarers, Neutra Marfa selvage hoodie synth yr.</p>
		</div>
		<div id="div2">
			<p><h2><center>About Me</center></h2></p>
			<div id="div5"></div>
			<article id="article">
				<img src="me.jpeg" alt="Mountain View" style="width:293px;height:194px">
			</article>
		</div>
		<div id="div3">
			<p>Butcher Portland chia disrupt. Vinyl fingerstache VHS gastropub. Brunch mixtape scenester organic, deep v plaid selfies authentic sartorial butcher before they sold out chambray fanny pack. Salvia hashtag disrupt keffiyeh, XOXO ennui chambray Schlitz sartorial gentrify polaroid chia pug. DIY sriracha ugh, Marfa Vice Helvetica fingerstache Thundercats yr. Selvage tilde seitan messenger bag. Tumblr trust fund meditation before they sold out PBR&B, Pinterest actually VHS umami four loko art party.s</p>
		</div>
		<div id="div4">
			<p><h2><center>Social</center></h2></p>
			<div id="div5"></div>
				<ul id="social"  class="social-icons">
				<a class="google" href="http://www.google.com">
				<img src="http://i.imgur.com/6y0iC8L.png?1"></a>
				<a class="twitter" href="http://www.twitter.com">
				<img src="http://i.imgur.com/XcI9Ego.png?1"></a>
				<a class="youtube" href="http://www.youtube.com">
				<img src="http://i.imgur.com/IBQanzi.png?1"></a>
				<a class="youtube" href="http://www.facebook.com">
				<img src="http://i.imgur.com/qqQk6GW.png?1"></a>
			</ul>
		</div>
	</section>
	
</body>
</html>
	<footer id="footer">
		Copyright &copy 2014 Tania's Blog
	</footer>