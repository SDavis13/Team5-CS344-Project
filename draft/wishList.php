<!DOCTYPE html>
<html>
<head>
	<?php $title = "Center Rules" ?>
	<?php include 'head.php'; ?>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
<div id="main">
	<h1>Wish List:</h1>
	<?php
		$overview = file_get_contents("wishList.txt");
	?>
	<p>
		<?= $overview ?>
	</p>
		
<div id="centering"></div>
</div>
<?php include 'footer.php' ?>
</div> 
</body>
</html>