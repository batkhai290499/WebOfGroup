<?php 
	// echo "Vao day";
	$sever = 'localhost';
	$server_user = 'root';
	$database = 'webofgroup';
	$server_pass = '';
	$connect = mysqli_connect($sever, $server_user, $server_pass, $database);
	require("database.php");
	if(isset($_GET["id"]))
	{	
		$id = $_GET["id"];
		$sql = "DELETE FROM account WHERE accountID=" . $id;
		echo $sql;
		mysqli_query($connect,$sql);					

	}
?>