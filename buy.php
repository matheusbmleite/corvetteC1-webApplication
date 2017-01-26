<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Buy - Chevrolet Corvette C1</title>
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
		<h1>Let's make a deal!</h1>
        <!-- a form is used to allow the user to entry the information needed to make the first contact regarding the purchase of a corvette -->
		<form id="buy" method="post" action="process-purchase.php">
        	<input type="hidden" name="form_sent" value="1" />
        	<fieldset>
                <legend>Personal Information</legend>
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
                    <label for="address">Address Line 1</label>
                    <input id="address" type="text" name="address" required="required" />
                </div>
                <div>
                    <label for="address2">Address Line 2</label>
                    <input id="address2" type="text" name="address2"/>
                </div>
                <div>
                    <label for="province">Province</label>
                    <select id="province" name="province" required="required">
                        <option value="">choose…</option>
                        <option value="AB">Alberta</option>
                        <option value="BC">British Colombia</option>
                        <option value="ON">Ontario</option>
                        <option value="MB">Manitoba</option>
                        <option value="NB">New Brunswick</option>
                        <option value="NL">Newfoundland</option>
                        <option value="NT">Northwest Territories</option>
                        <option value="NS">Nova Scotia</option>
                        <option value="NV">Nunavut</option>
                        <option value="PE">Prince Edward Island</option>
                        <option value="PQ">Québec</option>
                        <option value="SK">Saskatchewan</option>
                        <option value="YK">Yukon Territory</option>
                        </select>
                    </div>   
        	</fieldset>
            <fieldset>
                <legend>Car Features</legend>
                <input type="radio" name="transmission" id="manual" value="manual" required="required" />
                <label for="manual">Manual</label>
                <input type="radio" name="transmission" id="automatic" value="automatic" required="required"/>
                <label for="automatic">Automatic</label>
                <div>
                    <label for="body">Body type</label>
                    <select id='body' name="body" required="required">
                        <option value="">choose…</option>
                        <option value="fiber">Fiberglass</option>
                        <option value="steel">Steel</option>
                    </select>
                </div>
                <div>
                    <label for="colour">Colour</label>
                    <select id='colour' name="colour" required="required">
                        <option value="">choose…</option>
                        <option value="white">White</option>
                        <option value="scarlet">Scarlet</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                    </select>
                </div>
                <div>
                    <label for="interior">Interior Type</label>
                    <select id='interior' name="interior" required="required">
                        <option value="">choose…</option>
                        <option value="leather">Leather</option>
                        <option value="nylon">Nylon</option>
                        <option value="polyester">Polyester</option>
                        <option value="vinyl">Vinyl</option>
                    </select>
                </div>
            </fieldset>
            <!-- a div with button-holder as class was used to facilitate the css selection and manipulation -->
            <div class="button-holder"> 
                <button type="submit">Send Purchase Request</button>
            </div>
        </form>
	</main>
	<footer>
		<p><a href="http://www.chevrolet.com/corvette-sports-cars.html" title="The official Corvette Website">Official Covette Website</a> | <a href="http://www.chevrolet.com/" title="The official Chevrolet Website">Official Chevrolet Website</a> | <a href="credits.html" title="Credits for this website">Credits</a></p>
	</footer>
</body>
</html>
