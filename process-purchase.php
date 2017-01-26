<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Request Sent - Chevrolet Corvette C1</title>
	<!-- referencing the proper CSS file -->
	<link rel="stylesheet" media="screen" href="css/style.css">
</head>
<body>
	<header>
		<!-- Corvette's logo from 1953 as page header -->
		<img src="images/logo.png" alt="Corvette C1 Logo"/>
		<!-- navigational menu -->
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="learn-more.html">Learn More</a></li>
				<li><a href="reviews.html">Reviews</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="buy.php">Buy</a></li>
				<li><a href="contact-us.php">Contact Us</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h1>Purchase Request Sent!</h1>
 <?php
        
        //Checking all the required information
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $province = $_POST['province'];
        $transmission = $_POST['transmission'];
        $body = $_POST['body'];
        $colour = $_POST['colour'];
        $interior = $_POST['interior'];

        //Sending a feedback to the user
        echo('<p> Thank you, '.$fname.' for choosing us. Your purchase request will be sent to the nearest Chevrolet dealer to you, and they will contact you through the contact information you gave us!</p><p>You choose a(n) ' .$transmission.' transmission, with a body made of ' .$body.' and interior made of '.$interior.', the colour chosen was ' .$colour.'. Your Corvette will be amazing.</p>');
?>
	</main>
	<footer>
		<p><a href="http://www.chevrolet.com/corvette-sports-cars.html" title="The official Corvette Website">Official Covette Website</a> | <a href="http://www.chevrolet.com/" title="The official Chevrolet Website">Official Chevrolet Website</a> | <a href="credits.html" title="Credits for this website">Credits</a></p>
	</footer>
</body>
</html>
