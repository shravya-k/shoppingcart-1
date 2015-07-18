<?php
	require_once('variables.php');
	
	
	if(isset( $_POST['user']))
	{
		$selusr = $_POST['user'];
	}
	if(isset( $_POST['password']))
	{
		$selpass = $_POST['password'];
	}
	$count = 0;
	 $sqlcon = mysqli_connect($_SESSION['server'], $_SESSION['user'], $_SESSION['password'], $_SESSION['database']);
	 if(!$sqlcon)
			{
				die("Error in connecting database");
			}
	 $sql = "select userid from users where UserName=" . "'" . $selusr . "'" . "AND Password=" . "'" . $selpass . "'";
	 echo $sql;
	 $result = $sqlcon -> query($sql);
	 $row = $result->fetch_assoc();
			if ( $row) 
			{
				//echo "Successfully logged-in";
				$_SESSION['login'] = 1;
				$_SESSION['userid'] = $row['userid'];
				header("location: index.php");

			} 
			else 
			{
				//echo "error in logging";
				$_SESSION['login'] = 0;
				$_SESSION['userid'] = 0;
				header("location: login.php");
			}
	$sqlcon->close();
?>