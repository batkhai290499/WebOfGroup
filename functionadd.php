<?php 
				require("db1.php");  
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
	  							$query = mysqli_query($connect, $sql);
								if(mysqli_num_rows($query)>0)
								{
									echo "Account already available!";
								}
								else
								{
									$sql = "INSERT INTO account(accountID,username,password, roleID, classID, Description, courseID) VALUES('$id', '$user', '$password', '$roleID','$classID', '$Description', '$courseID')";
									mysqli_query($connect,$sql);
								}
							}
					}
			?>