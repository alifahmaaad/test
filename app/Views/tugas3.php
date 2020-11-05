<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.papan {
			display: flex;
			flex-wrap: wrap;
		}

		.ukuran {

			width: 25px;
			height: 25px;
		}

		.hitam {
			background-color: black;
		}

		.putih {
			background-color: white;
		}
	</style>
</head>

<body>
	<h2>UTS NO 3</h2>
	<?php

	$ukuran = 4;
	$str = '';
	for ($i = 0; $i < $ukuran; $i++) {
		for ($j = 0; $j < $ukuran; $j++) {
			$sum = $j + $i;
			if (($sum % 2) == 0) {
				$str .= '<div class="ukuran hitam"></div>';
			} else {
				$str .= '<div class="ukuran putih"></div>';
			}
		}
	}
	echo $str;

	?>
</body>

</html>