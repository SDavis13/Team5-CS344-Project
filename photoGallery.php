<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>template 1</title>
	<link rel="stylesheet" href="style.css">
	<link href="images/thumb.png" type="image/gif" rel="shortcut icon">
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
	<script src="js/drop.js" type="text/javascript"></script>
	<script src="animated-menu.js" type="text/javascript"></script>
	<script src="photoGallery.js" type="text/javascript"></script>
</head>
<body onload="daily()">
<div id="wrapper">
<header>
</header>
<!-- nav !-->
<div id="nav">
<ul>
		<li class="orange">
			<p><a href="#">Home</a></p>	
		</li>
		<li id="sim2" class="orange">
			<p><a href="#">About Us</a></p>
			<p class="subtext">History</p>
			<p class="subtext">Center Rules</p>
		</li>
		<li id="sim1" class="orange">
			<p><a href="#">Volunteer</a></p>
			<p class="subtext">WSU Students</p>
			<p class="subtext">parents</p>
		</li>
		<li class="orange">
			<p><a href="#">menu4</a></p>
			<p class="subtext">pew</p>
		</li>
		<li id="sim" class="donate">
			<p><a href="#">Donate</a></p>
			<p class="subtext">money</p>
		</li>
</ul>
</div>
<div id="filler">
</div>
<div id="main">
<!-- photo gallery stuff -->
<h1 class="Header">Photo Gallery</h1>
<div class="mainImg">
	<img id="mainPicture" src="images/PhotoGallery1.jpg" alt="Selected Picture" width="500" height="350"/>
</div>
	<?php for ($i = 1; $i < 12; $i++){
	?>
		<div class="img">
			<img src="images/PhotoGallery<?= $i ?>.jpg" alt="Kids First Winona Picture" width="132" height="95"/>
		</div>
	<?php } ?>
	
	
<div id="centering"></div>
</div>

<!-- footer !-->
<footer>
	<p id="about">
		Things and stuff here
	</p>
	<a id="donate" href="contact.html"><h3>Contact Us</h3></a>
	<p id="copy">All content &copy; 2015, Min Lee.</p>
</footer> 
</div> 
</body>
</html>