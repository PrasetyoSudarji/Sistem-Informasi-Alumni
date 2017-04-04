
<?php
	include "config/database.php";
	include "config/config.php";
	session_start(); // harus dimulai dulu sessionnya
	
	if (isset($_POST['register_sistem'])){
		header('location: register.php');
		exit;
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>DotA2ITERA</title>
		<?php
		if (isset($_POST['masuk_sistem'])) {
			extract($_POST);
			
			$sql_data_user = "Select * from data_user where username='$data_name' and password='$data_pass'";

			$query = mysql_query($sql_data_user, $conn1);
			
			if (mysql_num_rows($query) == 0) {
				echo "<script style='javascript'>\n";
				echo "window.alert('Maaf username atau password salah!!');\n";
				echo "document.location.href='".$base_url."main.php';\n";
				echo "</script>";
			} else {
				$hasil = mysql_fetch_array($query);
				$_SESSION['login_test'] = $hasil['id'];

				header('location: '.$base_url."main.php");
				exit;
			}
		}
		?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"href="css/bootstrap.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</head>

	<body class="bg-login">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">SSO</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="login.php"><b>Login</b></a></li>
						<li><a href="register.php"><b>Register</b></a></li>
						<li><a href="aboutus.php"><b>About Us</b></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<div class="container" align="center">
		<form method="post" action="login.php">
			<table>
				<tr>
					<td width="200px" ><b>Username</b></td>
					<td width="10px" align="center">:</td>
					<td width="100px"><input type="text" name="data_name"></td>
				</tr>
				
				<tr>
					<td width="200px"><b>Password</b></td>
					<td width="10px" align="center">:</td>
					<td width="100px"><input type="password" name="data_pass"></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<br>
						<button name="masuk_sistem" class="btn-info"><b>Submit</b></button>
						<button type="button" class="btn-info" onclick="location.reload();"><b>Cancel</b></button>
					</td>
				</tr>
			</table>
		</form>
	</div>
	</body>
</html>