<!DOCTYPE html>
<html>
<head>
	<?php $title = "Form" ?>
	<?php include 'head.php'; ?>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
<div id="main">
<?php
try{
	include dbconnect.php;
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
<?php include 'footer.php' ?>
</div> 
</body>
</html>