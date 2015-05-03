<?php		
session_start();
?>
<?php
if($_SESSION['log'] != 1){
			//$_SESSION = array();
			session_destroy();
			header("Location:  login.php",true);
			die();
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>content1</title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
		if(session_status() == PHP_SESSION_ACTIVE){
		echo '<p><a href="content1.php" target="_self">link to content1.php</a>';
	}
?>
</body>
</html>

