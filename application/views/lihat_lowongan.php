<html>
	<head>
		<title>Lowongan</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<br>
			<?php
				
				$no=1;
				foreach ($lowongan->result_array() as $loker){
					
					echo "<br>";
					echo "Nama Perusahaan : ".$loker['nama_perusahaan']."</br>";
					echo "Lowongan Berkahir pada : ".$loker['expired_time']."</br>";
					echo "Skill yang dibutuhkan : ".$loker['skill']."</br>";
					echo "<hr>";
					$no++;
				}
			?>
		</div>
	</body>
</html>