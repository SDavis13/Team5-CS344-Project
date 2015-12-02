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
		<h1>History</h1>
		<p>
			<?= file_get_contents("history.txt"); ?>
		</p>
	</article>
	<div id="centering"></div>
</main>
<?php include 'footer.php' ?>
</div> 
</body>
</html>