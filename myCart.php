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
	<link rel="stylesheet" href="style.css">
	<title>Cart</title>
	<style>
		body {
			background: url(bg1.png) no-repeat center center;
		}
		.navbar{
			position: relative;
		}
		.abc {
			margin-top: 40px;
			margin-left: 23px;
			font-size: 16px;
		}

		table {
			border: 2px solid black;
			border-collapse: collapse;
			margin-left: 20px;
		}

		th {
			font-size: 24px;
			background-color: grey;
			color: black;
		}

		td {
			text-align: center;
			background-color: white;
		}

		th,
		td {
			border: 2px solid black;
			width: 160px;
			height: 40px;
		}

		button {
			background-color: #07c6f5;
			border-radius: 12px;
			font-size: 16px;
			border: 2px solid black;
		}

		.heading {
			margin: 50px 0px -50px 570px;
			font-size: 50px;
			color: white;
			font-family: "Courier-New";
			text-decoration: underline;
		}

		.c {
			width: 90px;
		}

		.b {
			width: 350px;
		}

		.subTot {
			font-size: 24px;
			width: 300px;
			height: 140px;
			margin-left:20px;
			background-color: white;
			padding: 10px;
			border-radius: 12px;
			border: 5px solid black;
		}

		.subTot p {
			font-size: 24px;
			margin: 0;
			color: black;
			text-decoration: none;
		}

		.pur {
			font-size: 16px;
			background-color: #07c6f5;
		}

		.abc {
			display: flex;
			margin-right: 50px;
		}
		.A{
			width: 200px;
		}
	</style>
</head>

<body>
	<?php
	if (empty($_SESSION['logged_in'])) {
		echo "<div w3-include-html='nav2.html'></div>";
	} else {
		echo "<div w3-include-html='nav.html'></div>";
	}
	?>
	<div>
	<p>a</p>
	<p class="heading">MY CART</p> <br> <br>
	<div class="abc">
		<div>
			<table>
				<thead>
					<tr>
						<th class="c">S.No</th>
						<th class="b">Item Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th class="x"></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$total = 0;
					if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $key => $value) {
							$sr = $key + 1;
							echo
							"<tr>
                            <td class='c'>$sr</td>                                    
							<td class='b'>$value[Item_Name]</td>               
							<td>$value[Price]
							<input type='hidden' class='iprice' value='$value[Price]'></td>
                            <td><input class='iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='5'></td>
							<td class='itotal'></td>
                            <td>
                            <form action='manage_Cart.php' method='post'>
                            <button name='Remove_Item'>Remove</button>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                            </form>
                            </td>
                        </tr>
                        ";
						}
					}
					?>
				</tbody>
			</table>
		</div>
		<div class="subTot">
			<p id="gtot">Total Amount : 0 </p> <br>
			<form action="manage_Cart.php" method="post">
				<center><a href="success.html"><button class="pur" name="Make">Make Purchase</button></a></center>
			</form>
		</div>
	</div>
	</div>

	<script>
		var gt = 0;
		var iprice = document.getElementsByClassName('iprice');
		var iquantity = document.getElementsByClassName('iquantity');
		var itotal = document.getElementsByClassName('itotal');
		var gtotal = document.getElementById('gtot');

		function subTotal() {
			gt = 0;
			for (i = 0; i < iprice.length; i++) {
				itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
				gt = gt + (iprice[i].value) * (iquantity[i].value);
			}
			gtot.innerText = "Total Amount : " + gt;
		}
		subTotal();
	</script>

</body>

</html>

<script>
	includeHTML();
</script>