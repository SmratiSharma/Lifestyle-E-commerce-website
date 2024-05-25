<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            elmnt.innerHTML = this.responseText;
                        }
                        if (this.status == 404) {
                            elmnt.innerHTML = "Page not found.";
                        }
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                }
                xhttp.open("GET", file, true);
                xhttp.send();
                return;
            }
        }
    }
</script>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact LifeStyle Store</title>
</head>
<link rel="stylesheet" type="text/css" href="contact.css">

<body>
	<?php
	    if (empty($_SESSION['logged_in'])) {
	        echo "<div w3-include-html='nav2.html'></div>";
	    } else {
	        echo "<div w3-include-html='nav.html'></div>";
	    }
	    ?>
	<div class="contact">
		<div class="heading">
			<h1 class="hdg">CONTACT LIFESTYLE STORE</h1>

		</div>
		<div class="query">
			<label class="q" type="text">Name</label>
			<input class="urname" type="text" placeholder="Enter your name">
			<div class="query1">
				<label class="email" type="text">Email</label>
				<input class="eml" type="text" placeholder="Enter your email">

			</div>
			<div class="number">
				<label class="con" type="text">Contact No.</label>
				<input class="contact" type="tel" maxlength="10" placeholder="10 digits mobile number">
			</div>
			<div class="query2">
				<label class="qry" type="text">Query*</label>
				<input class="ans" type="text" placeholder="Enter your query here">
			</div>
			<p class="stat">* Your issue shall be resolved within 3 working days.</p>
			<button class="sum" href="">Submit</a>
		</div>
		<footer>
			<div class="container">
				<div class="inside">
					<div class="f">
						<div class="l1">
							<p style="color: #65717e;"> ABOUT</p>
							<ul>
								<li><a href="about.html">About us</a></li>
								<li><a href="contact.php"> Contact us</a></li>
								<li><a href="wholesale.html"> LifeStyle Wholesale</a></li>
								<li><a href="ourStory.html"> Our Story</a></li>

							</ul>
						</div>
					</div>
					<div class="f">
						<div class="l1">
							<p style="color: #65717e">POLICIES</p>
							<ul>
								<li><a href="ourStory.html">Return Policy</a></li>
								<li><a href="ourStory.html">Security</a></li>
								<li><a href="ourStory.html">Privacy</a></li>

							</ul>
						</div>
					</div>
					<div class="f">
						<div class="l1">
							<p style="color: #65717e"> MAIL US AT</p>
							<a style="color:#95a4b3" href="smrati4567@gmail.com">lifestyle@gmail.com</a>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<center> <br><br>
				<p class="cc">Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000”.
				</p>
			</center>
		</footer>
</body>

</html>
<script>
    includeHTML();
</script>