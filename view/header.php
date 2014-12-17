<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <!--it links the css stylesheet to our php file-->
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/js" href="js/main.js">
        <link href='http://fonts.googleapis.com/css?family=Rozha+One' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
        <title></title>
    </head>
    <body>
        <header id="header"> 
            Tania's Blog
            <p id="p">App Academy</p>
            <div id="div"></div>
            <nav>
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
                <a href="/../controller/log-out.php">Logout</a>
            </nav>
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