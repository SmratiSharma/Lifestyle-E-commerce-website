<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['Add'])) {
		if (!empty($_SESSION['logged_in'])) {
			if (isset($_SESSION['cart'])) {
				$myitems = array_column($_SESSION['cart'], 'Item_Name');
				if (in_array($_POST['Item_Name'], $myitems)) {
					echo "<script>
                                alert('Item Already Added');
                                window.history.go(-1);
                                </script>";
				} else {
					$count = count($_SESSION['cart']);
					$_SESSION['cart'][$count] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
					echo "<script>
					alert('Item Added');
					window.history.go(-1);
					</script>";
				}
			} else {
				$_SESSION['cart'][0] = array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity' => 1);
				echo "<script>
				alert('Item Added');
				window.history.go(-1);
				</script>";
			}
		}
		else{
			echo "<script>
				alert('You are not logged in !!');
				window.location.href='login.php';
				</script>";
		}
	}
	if (isset($_POST['Remove_Item'])) {
		foreach ($_SESSION['cart'] as $key => $value) {
			if ($value['Item_Name'] == $_POST['Item_Name']) {
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart'] = array_values($_SESSION['cart']);
				echo "<script>
                	alert('Item Removed');
                    window.location.href='myCart.php';
				</script>";
			}
		}
	}
	if (isset($_POST['Make'])) {
		$count = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$count++;
		}
		if ($count < 1) {
			echo "<script>
		alert('No Items Added');
		window.location.href='index.php';
		</script>";
		} else {
			for ($i = 0; $i < 2; $i++) {
				foreach ($_SESSION['cart'] as $key => $value) {
					unset($_SESSION['cart'][$key]);
					$_SESSION['cart'] = array_values($_SESSION['cart']);
					echo "<script>
					window.location.href='success.html'
					</script>";
				}
			}
		}
	}
}
