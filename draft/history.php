<!DOCTYPE html>
<html>
<head>
	<?php $title = "History" ?>
	<?php include 'head.php'; ?>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
<main>
	<article>
		<div id="full">
			<div class="border"> 
				<span class="title">History</span> 
				<p>
					<?= file_get_contents("history.txt"); ?>
				</p>
			</div>
		</div>
	</article>
	<div id="centering"></div>
</main>
<?php include 'footer.php' ?>
</div> 
</body>
</html>