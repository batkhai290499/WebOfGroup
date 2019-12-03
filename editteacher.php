			
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<h2>EDIT TEACHER</h2>
                    <form action="functionedit.php" method="post">
                        <table width="50%" border="10">
                            <tr>
                                <td>ID</td>
                                <td><input type="num" name ="accountID"></td>
                            </tr>

                            <tr>
                                <td>Name Account of Teacher</td>
                                <td><input type="text" name ="username"></td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td><input type="text" name ="password"></td>
                            </tr>

                            <tr>
                                <td>Role</td>
                                <td><input type="text" name ="roleID"></td>
                            </tr>

                            <tr>
                                <td>Class</td>
                                <td><input type="text" name ="classID"></td>
							</tr>
							
							<tr>
                                <td>Description</td>
                                <td><input type="text" name ="Description"></td>
							</tr>
							<tr>
                                <td>Course</td>
                                <td><input type="text" name ="courseID"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="submit"></td>
                            </tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>