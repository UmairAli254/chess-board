<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chess Dynamic Board</title>
	<style>
		input{
			padding: 10px;
			margin: 40px 0px;
		}
		table{ border: 1px solid black; border-spacing: 0;}
		td{
			border: 1px solid black;
			padding: 40px;
		}
		#first{
			background-color: black;
		}

	</style>
</head>
<body>

	<form method="POST" action="">
		<input type="number" name="text" required>
		<input type="submit" name="submit">
	</form>
	
	<table>

		<?php
			$value = $_POST["text"];

			for($i = 1; $i <= $value; $i++){
				echo "<tr>";

				for($j = 1; $j <= $value; $j++){
					if( ($j + $i) % 2 === 0 )
						echo "<td id=\"first\"> </td>";
					else
						echo "<td> </td>";
				}


				echo "</tr>";

			}


		?>

	</table>






	
</body>
</html>