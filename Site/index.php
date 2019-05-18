<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Linkin Park</title>
			<link rel="stylesheet" type="text/css" href="Home.css" />
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body background="Eikones/Background.jpg">
	

		<!--Menu-->
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Albums.html">Albums</a></li>
			<li><a href="Members.html">Band</a></li>
			<li><a href="Media.html">Media</a></li>
			<li><a href="store.php">Store</a></li>
			<!--123
			<li><a href="News.html">News</a></li>
			<li><a href="Tour.html">Tour</a></li>
			<li><a href="Interview.html">Interview</a></li>
			
			<li><a href="Store.html">Store</a></li>
			-->
			<?php
             if(!isset($_SESSION['username']))
    {
        
        echo '<li style="float:right"><a href="login.php">Login</a></li>';
    }
    else
    {
        $creator = $_SESSION['username'];
        echo '<li style="float:right"><a href="logout.php">Logout '.$creator.'</a></li>';

    }
	?>		
			<li style="float:right"><a href="registration.php">Sign up</a></li>
			<li style="float:right"><a href="https://www.facebook.com/linkinpark/" class="facebook"><i class="fa fa-facebook"></i></a> 
			<li style="float:right"><a href="https://twitter.com/linkinpark?lang=el" class="twitter"><i class="fa fa-twitter"></i></a> 
			<li style="float:right"><a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q" class="youtube"><i class="fa fa-youtube"></i></a> 
			<li style="float:right"><a href="https://www.linkedin.com/company/linkin-park" class="linkedin"><i class="fa fa-linkedin"></i></a> 
		</ul>
		
		
		<!--Social Media-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		<!--Background-->
		<div class="bg-image"></div>
		<div class="bg-text">
			<h1>Linkin Park</h1>
		</div>


		<!--Images in the bottom side-->
		<div class="row">
			<div class="column">
				<!--Store image-->
				<a href="store.php"><img src="Eikones/Store.jpg" class="corners"></a>
			</div>
			<div class="column">
				<!--Album image-->
				<a href="OneMoreLight.html"><img src="Eikones/Album.jpg" class="corners"></a>
			</div>
		</div>
		

	<!--Footer-->
	<footer class="footer-distributed">

		<div class="footer-right">

			<a href="https://www.facebook.com/linkinpark/"><i class="fa fa-facebook"></i></a>
			<a href="https://www.facebook.com/linkinpark/"><i class="fa fa-twitter"></i></a>
			<a href="https://www.instagram.com/linkinpark/?hl=el"><i class="fa fa-instagram"></i></a>
			<a href="https://www.tumblr.com/privacy/consent?redirect=http%3A%2F%2Flinkinpark.tumblr.com%2F"><i class="fa fa-tumblr"></i></a>
				
		</div>

		<div class="footer-left">

			<p class="footer-links">
				<a href="index.php">Home</a>
				·
				<a href="Albums.html">Albums</a>
				·
				<a href="Members.html">Band</a>
				·
				<a href="Media.html">Media</a>
			</p>
			<p>Linkin Park</p>
		</div>
	</footer>
		
		
	</body>
</html>