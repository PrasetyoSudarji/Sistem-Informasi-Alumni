<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<br>
			<?php
				echo form_open_multipart('user/profile');
				echo "<input type='file' name='userfile' size='20' /><br />";
				echo "<input type='submit' value='change' />";
				echo form_close();
				
				foreach ($profile->result_array() as $user){
					echo "<br>";
					echo "<img src =".base_url('assets/uploads/'.$user['foto'].'')." width='200px' height='200px'><br><br>";
					echo "Nama : ".$user['nama']."</br>";
					echo "NIM : ".$user['nim']."</br>";
					echo "Program Studi : ".$user['prodi']."</br>";
					echo "Tahun Lulus : ".$user['tahun_lulus']."<hr>";
					echo "Skill<br><br>";
					echo "1. ".$user['skill']."<hr>";
					echo "Alamat <br><br>";
					echo "Rt : ".$user['rt']."<br>";
					echo "Rw : ".$user['rw']."<br>";
					echo "Kelurahan/Desa : ".$user['rw']."<br>";
					echo "Kecamatan : ".$user['rw']."<br>";
					echo "Kabupaten/Kota : ".$user['rw']."<br>";
					echo "Provinsi : ".$user['rw']."<br>";
				}
				?>
		</div>
	</body>
</html>