<!DOCTYPE html>
<html>
<head>
	<?php $title = "Photo Gallery" ?>
	<?php include 'head.php'; ?>
	<script src="photoGallery.js" type="text/javascript"></script>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
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
<?php include 'footer.php' ?>
</div> 
</body>
</html>