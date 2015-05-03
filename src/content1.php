<?php	
session_start();
?>
<?php
		if ($_GET['logout']==1){
			session_destroy();
			header('Location:login.php');
			die();
		}
?>
<?php
	if(isset($_POST['username'])  &&  $_SESSION['log']!=1){
		$_SESSION['logz'] = 1;
	}
?>
<?php
	if ($_GET['logout1']==1){
		session_destroy();
		header('Location:login.php');
		die();
	}
?>
<?php
		if ($_SESSION['logz'] != 1  && $_SESSION['log']!=1){
				header('Location:login.php');
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
		//if (!empty($_POST['username']) || $_SESSION['log']==1){
		if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['logz']==1){
		if(isset($_POST['username'])){
			if (!empty($_POST['username'])){
				$_SESSION['username'] = $_POST['username'];
				if(!isset($_SESSION['visits'])){
					$_SESSION['visits'] = 0;
				}
				$_SESSION['logz']=0;
				$_SESSION['log']=1;
			}else{

				echo "A username must be entered.Click ";

				echo '<a href="?logout1=1" >here</a>';

				echo ' to return to the login screen.';
			}
		}
	}	
	if (session_status() == PHP_SESSION_ACTIVE && $_SESSION['log']==1){
		$_SESSION['visits']++;
		$foo1 = $_SESSION['visits']-1;
		echo "Hi $_SESSION[username], you have visited this page $foo1 times before.Click ";

		echo '<a href="?logout=1" >here</a>';

		echo ' to logout.';

		echo '<p><a href="content2.php" target="_self">link to content2.php</a>';
		}
			
	?>
</body>
</html>
