<!DOCTYPE html>
<html>
<head>
	<?php $title = "Volunteering" ?>
	<?php include 'head.php'; ?>
</head>
<div id="wrapper">
<?php include 'header.php'; ?>
<main>
	<!-- column 1 !-->
	<div id="left"> 
		<div class="border"> 
			<span class="title">Wish List:</span> 
			<p>
				<?= file_get_contents("wishList.txt"); ?>
			</p>
		</div>
	</div>
	<!-- column 1 !-->
	<div id="left">
		<div class="border"> 
				<span class="title">Donate Money:</span> 
			<p>
				<a href="https://www.alumni.winona.edu/netcommunity/onlinegift">Donation Site!</a>
			</p>
		</div>
	</div>
	<div id="centering"></div>
</main>
<?php include 'footer.php' ?>
</div> 
</body>
</html>