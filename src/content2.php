<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>content2</title>
</head>
<body>
	<?php
		session_start();
		if($_SESSION['log'] != 1){
			$_SESSION = array();
			session_destroy();
			header('Location: login.php');
			die();
		}
		echo '<p><a href="content1.php" target="_self">link to content1.php</a>';
	?>
</body>
</html>
