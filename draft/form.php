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
<!-- column 1 !-->
<h1 id="form">Your Review of Volunteering at Kids First</h1>
 	
<form action="confirmation.php" class="form" method="post" name="review_form">
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
    		<input type="radio" name="aa" value="more" />More</input>
    	</div>
		<div id="form">
			<label for="reason">Reason for Volunteering:</label>
    			<select name="reasonV">
    				<option selected></option>
    				<option value="class">Class</option>
    				<option value="community service">Community Service</option>
    				<option value="on own">On your own</option>
    				<option value="other">Other</option>
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
<?php include 'footer.php' ?>
</div> 
</body>
</html>