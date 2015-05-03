<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>assi</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
	<?php
	function checke($a, $b, $c, $d){
		if ($a == null || $b == null || $c == null || $d == null){
			if ($a == null){
				echo "<p>Missing a";
			}
			if ($b == null){
				echo "<p>Missing b";
			}
			if ($c == null){
				echo "<p>Missing c";
			}
			if ($d == null){
				echo "<p>Missing d";
			}
			return 0;
		}else{
			return 1;
		}
	}
	function checki($a, $b, $c, $d){
		if (!(is_numeric($a) && ($a == (int)$a))){
			echo "<p>min-multiplicand must be an Interger";
		}
		if (!(is_numeric($b) && ($b == (int)$b))){
			echo "<p>max-multiplicand must be an Interger";
		}
		if (!(is_numeric($c) && ($c == (int)$c))){
			echo "<p>min-multiplier must be an Interger";
		}
		if (!(is_numeric($d) && ($d == (int)$d))){
			echo "<p>max-multiplier must be an Interger";
		}
		if (is_numeric($a) && ($a == (int)$a)){
			if (is_numeric($b) && ($b == (int)$b)){
				if   (is_numeric($c) && ($c == (int)$c)){
					if (is_numeric($d) && ($d == (int)$d)){
					return 1;
					}
				}
			}
		}
		return 0;

	}
	function checkl($a, $b, $c, $d){
		if ($a > $b){
			echo "<p>Minimum multiplicand larger than maximum.";
		}
		if ($c > $d){
			echo "<p>Minimum multiplier larger than maximum.";
		}
		if ($b >= $a){
			if ($d>=$c){
				return 1;
			}
		}
		return 0;

	}
	function maketable($a, $b, $c, $d){
		echo '<p>
			<table>';
		$n=$c;
		for ($i=$a;$i<($b+2);$i++){
			echo "<tr>";
			if ($i == $a){
				echo "<td>";
			}else{
				echo "<td>$n";
				$n++;
			}
			for ($j=$c;$j<($d+1);$j++){
				if ($i == $a){
					echo "<td>$j";
				}else{
					$pro = $j *($i-1);
					echo "<td>$pro";
				}
			}
		}
		echo "</table>";
	}
	function check($a, $b, $c, $d){
		if(checke($a,$b,$c,$d)){
			if (checki($a, $b, $c, $d)){
				if (checkl($a, $b, $c, $d)){
					maketable($a, $b, $c, $d);
				}
			}
		}
	}


	if($_GET['min-multiplicand']){
		$minmc = $_GET['min-multiplicand'];
	}

	if($_GET['max-multiplicand']){
		$maxmc = $_GET['max-multiplicand'];
	}

	if($_GET['min-multiplier']){
		$minme = $_GET['min-multiplier'];
	}

	if($_GET['max-multiplier']){
		$maxme = $_GET['max-multiplier'];
	}
	check($minmc,$maxmc,$minme,$maxme);

	?>
</body>
</html>
