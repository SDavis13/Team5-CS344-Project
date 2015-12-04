<!DOCTYPE html>
<html>
<head>
	<?php $title = "Confirmation" ?>
	<?php include 'head.php'; ?>
	<script src="js/timer.js"></script>
</head>
<body onload="goHome()">
<div id="wrapper">
<?php include 'header.php'; ?>
<main>
	<?php
	try{
		include 'dbconnect.php';
		$stmt = $db->prepare("INSERT INTO kids_first.users (name, email) VALUES (:name, :email);");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$name = $_POST["name"];
		$email = $_POST["email"];
		$stmt->execute();
		
		$stmtb = $db->prepare("SELECT user_id FROM kids_first.users WHERE name = :nameb AND email = :emailb;");
		$stmtb->bindParam(':nameb', $nameb);
		$stmtb->bindParam(':emailb', $emailb);
		$nameb = $_POST["name"];
		$emailb = $_POST["email"];
		$stmtb->execute();
		$result = $stmtb->fetch(PDO::FETCH_ASSOC);
		
		$stmtc = $db->prepare("INSERT INTO kids_first.responses (frequency, reason_for_volunteering, enjoy_time, help_career_choice, change_career_path, help_get_job, user_id) VALUES (:freq, :reasonv, :enjoytime, :helpcareer, :changecareer, :helpjob, :userid);");
		$stmtc->bindParam(':freq', $freq);
		$stmtc->bindParam(':reasonv', $reasonv);
		$stmtc->bindParam(':enjoytime', $enjoytime);
		$stmtc->bindParam(':helpcareer', $helpcareer);
		$stmtc->bindParam(':changecareer', $changecareer);
		$stmtc->bindParam(':helpjob', $helpjob);
		$stmtc->bindParam(':userid', $userid);
		$freq = $_POST["times"];
		$reasonv = $_POST["reasonVolunteering"];
		$enjoytime = $_POST["enjoyTime"];
		$helpcareer = $_POST["helpCareerChoice"];
		$changecareer = $_POST["changeCareerPath"];
		$helpjob = $_POST["helpJob"];
		$userid = $result["user_id"];
		$stmtc->execute();
		
		// TextArea Put Operations
		$message = $_POST['message'];
		$file = 'responselist.txt';
		$current = file_get_contents($file);
		$current .= $message.PHP_EOL;
		file_put_contents($file, $current);
		
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	?>
	<!-- column 1 !-->
	<h1 id="form">Your form has been submitted! Thank you! We are redirecting you to the homepage now.</h1>

	<div id="centering"></div>
</main>
<?php include 'footer.php' ?>
</div> 
</body>
</html>