<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>template 1</title>
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
<!-- column 1 !-->
<h1 id="form">Your Review of Volunteering at Kids First</h1>
 	
<form action="http://localhost:8888/form.php" class="form" action="" method="post" name="order_form">
		<div id="form">
    	    <label for="name">Name:</label>
       	 	<input type="text" name="name" placeholder="John Doe" required />
    	</div>
    	<div id="form">
    		<label for="timesVolunteered">How many times have you Volunteered?:</label>
    		<input type="radio" name="aa" value="once" />Once</input>
    		<input type="radio" name="aa" value="two-five" />Two-Five</input>
    		<input type="radio" name="aa" value="six-ten" />Six-Ten</input>
    		<input type="radio" name="aa" value="semester" />A whole semester</input>
    		<input type="radio" name="aa" value="semester" />More</input>
    	</div>
		<div id="form">
			<label for="reason">Reason for Volunteering:</label>
    			<select name="reasonV">
    				<option selected></option>
    				<option>Class</option>
    				<option>Community Service</option>
    				<option>On your own</option>
    				<option>Other</option>
    			</select>
		</div>
		<div id="form">
  			<label for="toppings">Did you enjoy your time with Kids First?:</label>
  			<input type="radio" name="bb" value="yes" />Yes</input>
			<input type="radio" name="bb" value="no" />No</input>
		</div>
		<div id="form">
  			<label for="toppings">Did Kids First help with your career choice?:</label>
  			<input type="radio" name="cc" value="yes" />Yes</input>
			<input type="radio" name="cc" value="no" />No</input>
		</div>
		<div id="form">
  			<label for="toppings">Did it change your career path?:</label>
  			<input type="radio" name="dd" value="yes" />Yes</input>
			<input type="radio" name="dd" value="no" />No</input>
		</div>
		<div id="form">
  			<label for="toppings">Did Kids First help with getting a job?:</label>
  			<input type="radio" name="ee" value="yes" />Yes</input>
			<input type="radio" name="ee" value="no" />No</input>
		</div>
		<div id="form">
		<label for="review">Please explain your answers:</label>
		</div>
		<div>
    		<textarea name="message" rows="5" cols="50" placeholder="Type Here"></textarea>
       	</div>
       	<div id="form">
    		<button class="submit" type="submit">Submit</button>
		</div>
	</form>
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