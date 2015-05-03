<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>assi</title>
</head>
<body>
	<?php
		$Gkey = array_keys($_GET);
		$Gvalue = array_values($_GET);
		$Geta = array();
		foreach ($Gkey as $key => $value){
			if ($Gvalue[$key]!=null){
				$Geta[$value] = $Gvalue[$key];
			}else{
				$Geta[$value] = 'undefined';
			}
		}
		echo '<p>{"TYPE":"GET","parameters":';
		if ($Geta!=null){
			echo json_encode($Geta);
			echo '}';
		}else{
			echo 'null}';
		}
		echo "<p></p>";
		$Pkey = array_keys($_POST);
		$Pvalue = array_values($_POST);
		$Posta = array();
		foreach ($Pkey as $key => $value){
			if ($Pvalue[$key]!=null){
				$Posta[$value] = $Pvalue[$key];
			}else{
				$Posta[$value] = 'undefined';
			}
		}
		echo '<p>{"TYPE":"POST","parameters":';
		if ($Posta!=null){
			echo json_encode($Posta);
			echo '}';
		}else{
			echo 'null}';
		}
	?>
</body>
</html>
