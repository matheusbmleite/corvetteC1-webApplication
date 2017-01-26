<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Us - Chevrolet Corvette C1</title>
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
		<h1>Contact us</h1>
        <!-- a form is used to simulate a contact section where customers are able to communicate with the company -->
		<form id="contact_us" method="post" action="process-contact.php">
        	<input type="hidden" name="form_sent" value="1" />
        	<fieldset>
                <legend>Write your message</legend>
        		<div>
                	<label for="fname">First Name</label>
                	<input id="fname" type="text" name="fname" required="required" size="50" maxlength="25" placeholder="Type first name here."/>
                </div>
                <div>
                	<label for="lname">Last Name</label>
              		<input id="lname" type="text" name="lname" required="required" size="50" maxlength="25" placeholder="Type last name here."/>
            	</div>
            	<div>
                	<label for="phone">Phone</label>
                    <input id="phone" type="tel" name="phone" required="required" />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required="required" />
                </div>
                <div>
                	<label>Text Area</label>
          			<textarea id="text" name="text" rows="5" cols="40" required="required"></textarea>
                </div>
        	</fieldset>
        	<!-- a div with button-holder as class was used to facilitate the css selection and manipulation -->   
            <div class="button-holder">
                <button type="submit">Send Message</button>
            </div>
        </form>
			
	</main>
	<footer>
		<p><a href="http://www.chevrolet.com/corvette-sports-cars.html" title="The official Corvette Website">Official Covette Website</a> | <a href="http://www.chevrolet.com/" title="The official Chevrolet Website">Official Chevrolet Website</a> | <a href="credits.html" title="Credits for this website">Credits</a></p>
	</footer>
</body>
</html>
