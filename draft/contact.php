<!DOCTYPE html>
<html>
<head>
	<?php $title = "Contact" ?>
	<?php include 'head.php'; ?>
</head>
<body onload="daily()">
<div id="wrapper">
<?php include 'header.php'; ?>
<div id="main">
	<!-- column 1 !-->
	<div id="left"> 
		<div class="border"> 
			<span class="title">Location</span> 
			<table>
			<tr>
				<td class="contactData" rowspan="3">Address:</td>
				<td>Winona Family Community Center</td>
			</tr>
			<tr>
				<td>1756 Kraemer Dr.</td>
			</tr>
			<tr>
				<td>Winona, MN 55987</td>
			</tr>
			<tr>
				<td class="contactData">Phone:</td>
				<td>507-457-2459</td>
			</tr>
			<tr>
				<td class="contactData">Email:</td>
				<td>CMarchant@winona.edu</td>
			</tr>
			<tr>
				<td class="contactData">Hours:</td>
				<td>Mon-Thurs, from 2:30 to 6:30</td>
			</tr>
			<tr>
				<td class="contactData">Contact:</td>
				<td>Carol Marchant</td>
			</tr>
			</table>
		</div>
	</div>
	<!-- column 1 !-->
	<div id="left">
		<div class="border"> 
			<span class="title">Map</span> 
			<br>
			<iframe class="googleMap" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="350" height="225" src="https://maps.google.com/maps?hl=en&q=1756 Kraemer Dr. Winona, MN 55987&ie=UTF8&t=roadmap&z=14&iwloc=B&output=embed">
				<div>
					<small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small>
				</div>
				<div>
					<small><a href="http://buyproxies.io/">shared proxies</a></small>
				</div>
			</iframe>
		</div>
	</div>
	<div id="centering"></div>
</div>
<?php include 'footer.php' ?>
</div> 
</body>
</html>