<html>
	<head>
		<title>Lowongan</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<br>
			<?php
			foreach ($lowongan->result_array() as $loker){
					echo "<br>";
					echo "Nama Lowongan : ".$loker['nama_lowongan']."</br>";
					echo "Nama Perusahaan : ".$loker['nama_perusahaan']."</br>";
					echo "Skill yang dibutuhkan : ".$loker['skill']."</br>";
					echo "<hr>";
				}
			?>
		</div>
	</body>
</html>