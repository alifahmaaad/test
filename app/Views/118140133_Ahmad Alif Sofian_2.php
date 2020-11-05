<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.ganjil {
			/*(1).ganjil*/
			background-color: #ccc;
			text-align: center;
			/* (2)text-align */
		}

		.genap {
			/*(3).genap*/
			background-color: #346;
			color: white;
			/*(4).color*/
			text-align: center;
			/*(5)text-align*/
		}
	</style>
</head>

<body>
	<h2>Pemrograman Web</h2>
	<?php

	$a = "95";
	$b = false;
	if (($a > 80) && ($b != True)) { //(6) $a //(7) $b //(8) true
		echo "<div class=ganjil >HTML</div>";
	}
	if (($b != true)) { //(9) $b
		echo "<div class=genap>CSS</div>";
		if ($b == true) {  //(10) $b
			echo "<div class=ganjil>JAVA</div>";
		} else {
			echo "<div class=ganjil>PHP</div>";
		}
	}
	?>
</body>

</html>