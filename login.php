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
$msg = "";
$con = mysqli_connect("localhost", "root", "", "lifestyle");
if (!$con) die("Server Not Connected");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$a1 = $_POST['login'];
	$a2 = $_POST['password'];
	$sql = "SELECT * FROM sign WHERE Email='$a1' && Password='$a2'";
	$res = mysqli_query($con, $sql);
	$num = mysqli_num_rows($res);
	if ($num == 1) {
		$_SESSION['logged_in'] = true;
		if (isset($_POST['login']) && isset($_POST['password'])) {
			setcookie('login', $a1, time() + (60 * 24 * 60 * 7));
			setcookie('password', $a2, time() + (60 * 24 * 60 * 7));
		}
		header("Location:index.php");
	} else {
		$msg = "Wrong Username Or Password !!";
	}
}
$c1 = "";
$c2 = "";
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
	$c1 = $_COOKIE['login'];
	$c2 = $_COOKIE['password'];
}
?>

<script>
	function validate() {
		var pattern = /[A-Za-z0-9]+@+[A-Za-z]+.[a-z]/;
		if (document.USERFORM.login.value == "") {
			alert("You Forgot To Enter Your Email.");
			document.USERFORM.login.focus();
			return false;
		} else if (document.USERFORM.password.value == "") {
			alert("Enter Your Password.");
			document.USERFORM.password.focus();
			return false;
		}
		if (!document.USERFORM.login.value.match(pattern)) {
			alert("Invalid Mail");
			return false;
		}
	}
</script>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Login</title>
	<style>
		body {
			font: 13px/20px "Lucida Grande", Tahoma, Verdana, sans-serif;
			color: #404040;
			overflow-x: hidden;
			background-image: url('sign.jpg');
			background-size: contain;
			background-repeat: no-repeat;
			background-color: #6db381;
			margin: 0;
		}

		.navbar {
			background-color: rgb(42, 41, 41);
			position: sticky;
			font-size: 16px;
			overflow: hidden;
			width: 100%;
			height: 60px;
			z-index: 9;
		}

		.navbar ul {
			display: inline;
			overflow: auto;
		}

		.navbar li {
			float: right;
			list-style: none;
			margin: 17px -16px;
			margin-right: 70px;
		}

		.navbar li a {
			padding: 3px 3px;
			text-decoration: none;
			color: white;
		}

		.navbar li a:hover {
			color: rgb(158, 162, 163);
		}

		.A {
			text-decoration: none;
			margin-left: 210px;
			margin-top: 18px;
			font-size: 28px;
			font-family: initial;
			display: inline-block;
			color: ivory;
		}

		.login {
			position: relative;
			margin: 30px auto;
			margin: 150px 0px 0px 730px;
			padding: 20px 20px 20px;
			width: 445px;
			height: 230px;
			background: white;
			border-radius: 3px;
			box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);
		}

		.login:before {
			content: '';
			position: absolute;
			top: -8px;
			right: -8px;
			bottom: -8px;
			left: -8px;
			z-index: -1;
			background: rgba(0, 0, 0, 0.08);
			border-radius: 4px;
		}

		.login h1 {
			margin: -20px -20px 21px;
			line-height: 40px;
			font-size: 28px;
			font-weight: bold;
			color: #555;
			text-align: center;
			text-shadow: 0 1px white;
			background: #f3f3f3;
			border-bottom: 2px solid #000000;
			border-radius: 3px 3px 0 0;
			-webkit-box-shadow: 0 1px whitesmoke;
			box-shadow: 0 1px rgb(0, 0, 0);
		}

		.login p {
			margin: 20px 0 0;
		}

		.login p:first-child {
			margin-top: 0;
		}

		.login input[type=text],
		.login input[type=password] {
			width: 450px;
		}

		.login p.remember_me {
			float: left;
			line-height: 31px;
		}

		.login p.remember_me label {
			font-size: 18px;
			color: black;
			cursor: pointer;
		}

		.login p.remember_me input {
			position: relative;
			bottom: 1px;
			margin-right: 4px;
			vertical-align: middle;
		}

		.login p.submit {
			text-align: right;
		}

		.login-help {
			margin: 20px 0;
			padding-left: 480px;
			font-size: 18px;
			text-align: center;
			color: #000000;
			text-shadow: 0 1px #2a85a1;
		}

		.login-help a {
			color: #ffffff;
			text-decoration: none;
		}

		.login-help a:hover {
			text-decoration: underline;
		}

		:-moz-placeholder {
			color: #c9c9c9 !important;
			font-size: 13px;
		}

		::-webkit-input-placeholder {
			color: rgb(49, 49, 49);
			font-size: 16px;
		}

		input {
			font-family: 'Lucida Grande', Tahoma, Verdana, sans-serif;
			font-size: 16px;
		}

		input[type=text],
		input[type=password] {
			margin: 5px;
			padding: 0 10px;
			width: 200px;
			height: 34px;
			color: #404040;
			background: white;
			border: 2px solid;
			border-color: #b6b4b4 #b6b4b4 #b6b4b4;
			border-radius: 6px;
			outline: 5px solid #eff4f7;
		}

		input[type=text]:focus,
		input[type=password]:focus {
			border-color: #7dc9e2;
			outline-color: #dceefc;
			outline-offset: 0;
		}

		input[type=submit] {
			padding: 0 18px;
			height: 29px;
			font-size: 12px;
			font-weight: bold;
			color: #000000;
			text-shadow: 0 1px #e3f1f1;
			background: #26a5db;
			border: 1px solid;
			border-color: #000000;
			border-radius: 16px;
			outline: 0;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			background-image: -webkit-linear-gradient(top, #5bc7ee, #cde5ef);
			background-image: -moz-linear-gradient(top, #5bc7ee, #cde5ef);
			background-image: -o-linear-gradient(top, #5bc7ee, #cde5ef);
			background-image: linear-gradient(to bottom, #5bc7ee, #cde5ef);
			-webkit-box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
			box-shadow: inset 0 1px white, 0 1px 2px rgba(0, 0, 0, 0.15);
		}

		input[type=submit]:active {
			background: #cde5ef;
			border-color: #9eb9c2 #b3c0c8 #b4ccce;
			-webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
			box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
		}

		.lt-ie9 input[type=text],
		.lt-ie9 input[type=password] {
			line-height: 34px;
		}

		input[id="search"] {
			height: 24px;
		}

		footer {
			margin-top: 105px;
			padding: 10px;
			background-color: #101010;
			color: #9d9d9d;
			/* position: sticky; */
			font-size: 16px;
			overflow: hidden;
			width: 100%;
		}

		.container {
			display: flex;
		}

		.inside {
			display: flex;
			margin: 13px 233px;
		}

		.f {
			display: flex;
			margin: 0px 59px;
			z-index: 99;
		}

		.l1 li {
			list-style: none;
		}

		.l1 li a {
			color: #95a4b3;
			text-decoration: none;
		}

		.l1 a {
			text-decoration: none;
		}

		.l1 p {
			margin-left: 40px;
		}

		.A a {
			text-decoration: none;
			color: white;
		}
	</style>

<body>
	<?php
	echo "<div w3-include-html='nav2.html'></div>";
	?>
	<p>.</p>
	<div class="login">
		<h1>Login</h1>
		<form method="post" name="USERFORM" action="login.php" onsubmit="return(validate())">
			<p><input type="text" name="login" value="<?php echo $c1 ?>" placeholder="Username or Email"></p>
			<p><input type="password" name="password" value="<?php echo $c2 ?>" placeholder="Password"></p>
			<p class="remember_me">
				<label>
					<input type="checkbox" name="remember" id="remember_me">
					Remember me
				</label>
			</p>
			<span style="color: darkred;font-size: 16px"><?php echo $msg ?></span>
			<p class="submit"><input type="submit" name="commit" value="Login"></p>
		</form>
	</div>

	<div class="login-help">
		<p>Create An Account? <a href="Sign.php">Click here to Register</a></p>
	</div>
	<br> <br>
	<footer>
		<div class="container">
			<div class="inside">
				<div class="f">
					<div class="l1">
						<p style="color: #65717e;"> ABOUT</p>
						<ul>
							<li><a href="about1.html">About us</a></li>
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
			<p>Content is “Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000”.</p>
		</center>
	</footer>

</body>

</html>
<script>
    includeHTML();
</script>