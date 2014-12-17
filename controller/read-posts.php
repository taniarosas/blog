<div id="post">
<h2><center>Posts:</center></h2>
<?php

//connect to the directory
require_once(__DIR__ . "/../model/config.php");
//using the query variable to select from the posts table
$query = "SELECT * FROM posts";
//result gets posts from the database
$result = $_SESSION["connection"]->query($query);
//this if statement makes it so you can actually post your posts on your page
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        //making a div named post
        echo "<div class='posts'>";
        //were using h2 so the title is larger and were grabbing from the row the title is in
        echo "<h2>" . $row['title'] . "</h2>";
        //echoing the Date Time in my index.php when i post a post
        echo "<p>" . $row['DateTime'] . "</p>";
        //this is for space
        echo "<br />";
        //this is grabbing from the row our posts are in
        echo "<p>" . $row['post'] . "</p>";
        //this is for space at the bottom
        echo "<br/>";
        //this closes the div
        echo "</div>";
    }
}
?>
</div>
<section id="section">
              <div id="div2">
                <p><h2><center>About Me</center></h2></p>
                <div id="div5"></div>
                <article id="article">
                    <img src="me.jpeg" alt="Mountain View" style="width:293px;height:194px">
                </article>
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
            <div id="div1">
                <p>Drinking vinegar chillwave tousled artisan. Seitan freegan wolf, slow-carb fixie master cleanse occupy gentrify Williamsburg Wes Anderson meggings before they sold out Pinterest crucifix 90's. Taxidermy Echo Park you probably haven't heard of them cold-pressed, Neutra seitan narwhal. Brooklyn Thundercats lumbersexual, post-ironic kale chips fap locavore trust fund wayfarers migas distillery messenger bag fashion axe actually. Pinterest pickled irony lomo. Seitan ethical +1 beard, before they sold out yr Helvetica kitsch pork belly irony. Pop-up pork belly mustache wayfarers, Neutra Marfa selvage hoodie synth yr.</p>
            </div>
            <div id="div3">
                <p>Butcher Portland chia disrupt. Vinyl fingerstache VHS gastropub. Brunch mixtape scenester organic, deep v plaid selfies authentic sartorial butcher before they sold out chambray fanny pack. Salvia hashtag disrupt keffiyeh, XOXO ennui chambray Schlitz sartorial gentrify polaroid chia pug. DIY sriracha ugh, Marfa Vice Helvetica fingerstache Thundercats yr. Selvage tilde seitan messenger bag. Tumblr trust fund meditation before they sold out PBR&B, Pinterest actually VHS umami four loko art party.s</p>
            </div>
        </section>
