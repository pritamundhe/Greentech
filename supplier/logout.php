
<?php
	session_start();
	
	include('conn.php');
	
	if(isset($_SESSION['userlog'])) {
		$userlogid = $_SESSION['userlog'];
		
		mysqli_query($con,"UPDATE userlog SET logout=NOW() WHERE userlogid='$userlogid'");
	}
	
	session_destroy();
	header('location:../index.php');
	exit();
?>
