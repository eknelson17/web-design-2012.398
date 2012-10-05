<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Emma Kay Nelson</title>

	</head>

	<body>

		<header id="top">
			<a href="index.html"><img src="images/Logo.gif"></a>
			<h1>Emma Kay Nelson</h1>
			<h2>software engineer with a flare for design.</h2>
		</header>

		<nav>
			<ul>
				<li><a href="about.html"> About </a> </li>
				<li><a href="resume.html"> Resume </a> </li>
				<li><a href="projects.html"> Projects </a> </li>
				<li><a href="http://eknelson17.tumblr.com/"> Blog </a> </li>
				<li><a href="contact.php"> Contact </a> </li>
			</ul>
		</nav>

		<article>
			<h3>Contact Me</h3>

			<p>
				Use the form below to shoot me an email about anything -- networking, 
				job opporturnities, or just looking for a new friend. I'm game for 
				whatever...just please don't spam me! Alternatively, you can 
				look me up on any of the social networks or hosting sites listed 
				below.
			</p>

			<?php
			
			function spamcheck($field) {
				//filter_var() sanitizes the e-mail
				//address using FILTER_SANITIZE_EMAIL
				$field=filter_var($field, FILTER_SANITIZE_EMAIL);

				//filter_var() validates the e-mail
				//address using FILTER_VALIDATE_EMAIL
				if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
					return TRUE;
				} else {
					return FALSE;
				}
			}
			
			//if "email" is filled out, send email
			if (isset($_REQUEST['from_email'])) {
				//check if the email address is invalid
			  	$mailcheck = spamcheck($_REQUEST['from_email']);
			  	if ($mailcheck==FALSE) {
			    	echo "Invalid input";
			    } else {
			  	//send email
				$email = $_REQUEST['from_email'] ;
				$name = $_REQUEST['from_name'] ;
				$subject = $_REQUEST['subject'] ;
				$message = wordwrap($_REQUEST['message'], 70); ;
				mail('emma+website@eknelson17.com', 							// This email address doesn't go anywhere yet...need to get Google apps up on my domain.
				  	$subject,
				  	$message, 
				  	'From: ' . $name . ' <' . $email . '>');
				echo "Thank you!";
				}
			//if "email" is not filled out, display the form
			} else { 
				echo "<form action='contact.php' method='POST' enctype='multipart/form-data'>
					<table>
						<tr>
							<td><label for='from_name'>Name: </label></td>
							<td><input type='text' name='from_name' id='from_name' /></td>
						</tr>

						<tr>
							<td><label for='from_email'>Email Address: </label></td>
							<td><input type='text' name='from_email' id='from_email' /></td>
						</tr>

						<tr>
							<td><label for='subject'>Subject: </label></td>
							<td><input type='text' name='subject' id='subject' /></td>
						</tr>

						<tr>
							<td><label for='message'>Message: </label></td>
							<td><textarea type='text' name='message' id='message' rows='3' cols='30'></textarea></td>
						</tr>

						<tr>
							<td><input type='submit' value='Submit' /></td>
						</tr>
					</table>
				</form>";
			}
			?>
		
		</article>

		<aside>
			<h6>Social Media:</h6>

			<ul>
				<li><a href="https://twitter.com/eknelson17">Twitter</a></li>
				<li><a href="https://plus.google.com/106143154686103965900/posts">Google+</a></li>
				<li><a href="https://twitter.com/eknelson17">Linkedin</a></li>
			</ul>

			<h6>Source Code Hosting:</h6>

			<ul>
				<li><a href="http://code.google.com/u/eknelson17/">Google Code</a></li>
				<li><a href="https://bitbucket.org/eknelson17">Bitbucket</a></li>
				<li><a href="https://github.com/eknelson17">Github</a></li>
			</ul>
		</aside>

		<footer>
			<p>&copy; 2012 Emma Nelson | <a href="#top">Bact to Top</a></p>
		</footer>

	</body>

</html>