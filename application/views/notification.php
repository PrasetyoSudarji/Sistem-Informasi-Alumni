<html>
	<head>
		<title>Lowongan</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<br>
			<?php
				$query = $this->Model->list_data_all("notification");
				if ($query != null){
					foreach ($query->result_array() as $notification){
						echo "<div class='container'>";
						echo $notification['message'];
						echo "<br></div>";
						echo "<hr><hr>";
					}
				}
			?>
		</div>
	</body>
</html>