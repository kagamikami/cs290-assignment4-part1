<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>content1</title>

</head>
<body>
	<?php 
		session_start();
		if(isset($_POST['username'])){
			$_SESSION['log'] = 1;
		}
		if($_SESSION['log'] != 1){
			$_SESSION = array();
			session_destroy();
			header('Location: login.php');
			die();
		}
		if(session_status() == PHP_SESSION_ACTIVE){
			if (!empty($_POST['username']) || $_SESSION['log']==1){
			if(isset($_POST['username'])){
				$_SESSION['username'] = $_POST['username'];
			}
			if ($_SESSION['log'] != 1){
				header('Location:login.php');
			}
			if(!isset($_SESSION['visits'])){
				$_SESSION['visits'] = 0;
			}

			$_SESSION['visits']++;
			$foo1 = $_SESSION['visits']-1;
			echo "Hi $_SESSION[username], you have visited this page $foo1 times before.Click ";

			echo '<a href="?logout=1" >here</a>';

			echo ' to logout.';

			echo '<p><a href="content2.php" target="_self">link to content2.php</a>';
			if ($_GET['logout']==1){
				session_destroy();
				header('Location:login.php');
				die();
			}
			}else{
				if ($_GET['logout']==1){
				session_destroy();
				header('Location:login.php');
				die();
				}
				echo "A username must be entered.Click ";

				echo '<a href="?logout=1" >here</a>';

				echo ' to return to the login screen.';

			}
			
		}
	?>
</body>
</html>
