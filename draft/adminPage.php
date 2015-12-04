<!DOCTYPE html>
<html>
<head>
	<?php $title = "Admin" ?>
	<?php include 'head.php'; ?>
	<script src="js/fusioncharts.js"></script>
	<script src="themes/fusioncharts.theme.ocean.js"></script>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
<main>
	<?php
	try{
		include 'fusioncharts.php';
		function pullGraphInfo($chartName, $colName, $questionMessage){
			$sql = "SELECT ".$colName." FROM kids_first.responses;";
			include 'dbconnect.php';
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$enjoytime = $stmt->fetchAll();
			
			$yescount = 0;
			$nocount = 0;
			for($i = 0; $i < sizeof($enjoytime); $i++){
				if($enjoytime[$i][0] == "yes"){
					$yescount = $yescount + 1;
				}else{
					$nocount = $nocount + 1;
				}
			}
			$columnChart = new FusionCharts("Column2D", $chartName , 250, 400, $colName, "json", '
				{
					"chart":
					{
						"caption":"'.$questionMessage.'",
						"theme":"ocean",
						"baseFontSize":"12",
						"yAxisMinValue":"'.($yescount + $nocount).'",
						"yAxisMaxValue":"'.($yescount + $nocount).'"
					},
					"data":
					[
						{
							"label":"yes",
							"value":"'.$yescount.'"
						},
						{
							"label":"no",
							"value":"'.$nocount.'"
						}
					]
				}');
				
			$columnChart->render();
		}
		
	}
	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	
	pullGraphInfo("enjoyTime", "enjoy_time", "Did you enjoy your time with Kids First?");
	pullGraphInfo("helpCareer", "help_career_choice", "Did Kids First help with your career choice?");
	pullGraphInfo("changeCareer", "change_career_path", "Did it change your career path?");
	pullGraphInfo("helpJob", "help_get_job", "Did Kids First help with getting a job?");
	
	?>
	<!-- column 1 !-->
	
	<h1 id="form">Form Results</h1>
	<div id="enjoy_time" class="chart"><!-- Fusion Charts will render here--></div>
	<div id="help_career_choice" class="chart"><!-- Fusion Charts will render here--></div>
	<div id="change_career_path" class="chart"><!-- Fusion Charts will render here--></div>
	<div id="help_get_job" class="chart"><!-- Fusion Charts will render here--></div>
	<div id="full">
		<div class="border">
			<span class="title">How Kids First Has Impacted Teaching</span> 
			<p>
				<?php
				$responses = file("responselist.txt");
				
				foreach($responses as $response){
					echo "\"".$response."\"";
					?><br><?php
				}
				?>
			</p>
		</div>
	</div>
	

	<div id="centering"></div>
</main>
<?php include 'footer.php' ?>
</div> 
</body>
</html>