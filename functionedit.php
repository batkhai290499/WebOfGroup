<?php 
	$sever = 'localhost';
	$server_user = 'root';
	$database = 'webofgroup';
	$server_pass = '';
	$connect = mysqli_connect($sever, $server_user, $server_pass, $database);
				require("database.php");  
				if(isset($_POST["submit"]))
					{
						
						$id = $_POST["accountID"];
						$user = $_POST["username"];
						$password = $_POST["password"];
						$roleID = $_POST["roleID"];
						$classID = $_POST["classID"];
						$Description = $_POST["Description"];
						$courseID = $_POST["courseID"];

						if ($id ==""||$user ==""||$password == ""|| $roleID == ""|| $classID == ""|| $Description == ""|| $courseID == "") 
							{
				  				echo "Please fill the blank!";
  							}
  						else
  							{
	  							$sql = "select * from account where username= '$user'";
	  							$sql = "UPDATE account SET accountID='$id',username='$user',password='$password',roleID='$roleID',classID='$classID',Description='$Description',courseID='$courseID' WHERE accountID=" . $id;
								mysqli_query($connect,$sql);
								
							}
					}
			?>