<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
	<style>
		body {
			background-color: #f7f7f7;
			font-family: Arial, sans-serif;
			font-size: 14px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		h1 {
			background-color: #4CAF50;
			color: #fff;
			font-size: 24px;
			margin: 0;
			padding: 20px;
			text-align: center;
		}

		form {
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;
			margin: 20px auto;
			padding: 20px;
			width: 400px;
		}

		label {
			display: block;
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 10px;
		}

		input[type="text"] {
			border: 1px solid #ddd;
			border-radius: 4px;
			font-size: 18px;
			margin-bottom: 20px;
			padding: 10px;
			width: 90%;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			border-radius: 4px;
			color: #fff;
			cursor: pointer;
			font-size: 18px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}

		.result {
			background-color: #fff;
			border: 1px solid #ddd;
			border-radius: 4px;
			margin: 0 auto;
			padding: 20px;
			width: 400px;
		}

		.result h2 {
			font-size: 24px;
			font-weight: bold;
			margin: 0 0 20px;
			text-align: center;
		}

		.result table {
			border-collapse: collapse;
			width: 100%;
		}

		.result table th, .result table td {
			border: 1px solid #ddd;
			padding: 10px;
			text-align: center;
		}

		.result table th {
			background-color: #4CAF50;
			color: #fff;
			font-weight: bold;}

		.output{
			text-align: center;
			margin-top: 50px;
			font-size: 20px;
			font-weight: bold;
		}
		
	</style>
</head>
<body>
	<h1>Electricity Bill Calculator</h1>
	<form method="post">
		<label>Enter Units Consumed:</label><br>
		<input type="text" name="units" required><br>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php
		if(isset($_POST['submit'])) {
			$units = $_POST['units'];
			$total_bill = 0;
			if($units <= 50) {
				$total_bill = $units * 3.50;
			} elseif($units <= 150) {
				$total_bill = 50 * 3.50 + ($units - 50) * 4.00;
			} elseif($units <= 250) {
				$total_bill = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
			} else {
				$total_bill = (50 * 3.5) + (100 * 4) + (100 * 5.2) + (($units - 250) * 6.5);
			}
			
			
			echo "<div class='output'>Total bill: " . $total_bill . "<br>";
			if($units <= 50) {
				echo "Falls under slab 0-50";
			} elseif($units <= 150) {
				echo "Falls under slab 51-150";

			} elseif($units <= 250) {
				echo "Falls under slab 151-250";

			} else {
				echo "Falls under slab 251 or more";	

			}
			
			
			
			echo "</div>";
		}
	?>

</body>
</html>
