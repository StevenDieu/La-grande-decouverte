<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Contact Form</title>
	<script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
	<link href="contact.css" type="text/css" rel="stylesheet"/>
	<!--[if IE]><script>
	$(document).ready(function() { 

$("#form_wrap").addClass('hide');

})

</script><![endif]-->

</head>
<body>
	<div id="wrap">
		<h1>Send a message</h1>
		<div id='form_wrap'>
			<form>
				<p>Hello Joe,</p>
				<label for="email">Your Message : </label>
				<textarea  name="message" value="Your Message" id="message" ></textarea>
				<p>Best,</p>	
				<label for="name">Name: </label>
				<input type="text" name="name" value="" id="name" />
				<label for="email">Email: </label>
				<input type="text" name="email" value="" id="email" />
				<input type="submit" name ="submit" value="Now, I send, thanks!" />
			</form>
		</div>
	</div>
</body>
</html>