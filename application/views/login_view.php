<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
</head>

<body>
	<div class="login-card">
		<div class="container">
			<h1>Log-in</h1><br>
			  <form method="POST" action="<?php echo base_url()."Login/log_in"; ?>">
				<input type="text" name="email" id="email" placeholder="Email">
				<input type="password" name="pass" id="password" placeholder="Password">
				<input type="submit" name="login" class="login login-submit" value="login">
			  </form>
		</div>
	</div>
</body>

</html>