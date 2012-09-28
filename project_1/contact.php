<!DOCTYPE HTML>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Emma Kay Nelson</title>

	</head>

	<body>

		<header>
			<h1>Emma Kay Nelson</h1>
			<h2>software engineer with a flare for design.</h2>
		</header>

		<nav>
			<ul>
				<li><a href="about.html"> About </a> </li>
				<li><a href="projects.html"> Projects </a> </li>
				<li><a href="http://eknelson17.tumblr.com/"> Blog </a> </li>
				<li><a href="#"> Contact </a> </li>
			</ul>
		</nav>

		<article>

			<?php
			//if "email" is filled out, send email
			if (isset($_REQUEST['from_email']) and
				isset($_REQUEST['from_name']) and
				isset($_REQUEST['subject']) and
				isset($_REQUEST['message'])) {
			  	//send email
				$email = $_REQUEST['from_email'] ;
				$name = $_REQUEST['from_name'] ;
				$subject = $_REQUEST['subject'] ;
				$message = wordwrap($_REQUEST['message'], 70); ;
				mail('eknelson17@gmail.com', 
				  	$subject,
				  	$message, 
				  	'From: ' . $name . ' <' . $email . '>');
				echo "Thank you!";
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

		<footer>
			
		</footer>

	</body>

</html>