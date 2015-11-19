<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<link rel="stylesheet" href="style.css">
	<link href="images/thumb.png" type="image/gif" rel="shortcut icon">
	<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
	<script src="js/drop.js" type="text/javascript"></script>
	<script src="animated-menu.js" type="text/javascript"></script>
</head>
<body onload="daily()">
<div id="wrapper">
<header>
<a href="#"><img id="headLogo" src="images/logo.png"> </a> 

</header>
<!-- nav !-->
<div id="nav">
<ul>
		<li class="orange">
			<p><a href="#">Home</a></p>	
		</li>
		<li id="extend2" class="orange">
			<p><a href="#">About Us</a></p>
			<p class="subtext">History</p>
			<p class="subtext">Center Rules</p>
		</li>
		<li id="extend2" class="orange">
			<p><a href="#">Volunteer</a></p>
			<p class="subtext">WSU Students</p>
			<p class="subtext">parents</p>
		</li>
		<li id="extend1" class="orange">
			<p><a href="#">Support Us</a></p>
			<p class="subtext">pew</p>
		</li>
		<li class="donate">
			<p><a href="#">Donate</a></p>
			<p class="subtext">money</p>
		</li>
</ul>
</div>
<div id="filler">
</div>
<div id="main">
<?php
try{
	$db = new PDO("mysql:dbname=kids_first;host=localhost", "root", "root");
	$stmt = $db->prepare("INSERT INTO kids_first.users (name) VALUES (:name);");
	$stmt->bindParam(':name', $name);
	$name = $_POST["name"];
	$stmt->execute();
}
catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}
?>
<!-- column 1 !-->
<h1 id="form">Your form has been submitted! Thank you!</h1>
<h1><?= $name ?></h1>

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