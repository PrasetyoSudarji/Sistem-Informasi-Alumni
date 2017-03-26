<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<?php
				
				echo "<form method='POST' action='".base_url()."index.php/controll/updateFoto'>";
				foreach ($profile->result_array() as $foto){
					echo "<img src =".base_url('assets/uploads/'.$foto['foto'].'')." width='200px' height='200px'><br>";
				}
				echo "<input type='file' name='userfile' size='20' /><br />";
				echo "<input type='submit' value='change' /><hr>";
				echo "</form>";
				
				echo "<form method='POST' action='".base_url()."index.php/controll/updateProfile'>";	
				foreach ($profile->result_array() as $user){
					echo "<br>";
					echo "<label for='nama'>Nama :</label> <input type='text' class='form-control' name='nama' value='".$user['nama']."'>";
					echo "<label for='nim'>NIM :</label> <input type='text' class='form-control' name='nim' value='".$user['nim']."'>";
					echo "<label for='prodi'>Program Studi :</label> <input type='text' class='form-control' name='prodi' value='".$user['prodi']."'>";
					echo "<label for='th_lulus'>Tahun Lulus :</label> <input type='text' class='form-control' name='tahun_lulus' value='".$user['tahun_lulus']."'>";
					echo "<hr>";
					echo "<h4>Skill</h4><br>";
					echo "<label for='jumlah_skill'>Jumlah Skill :</label> <input type='text' class='form-control' name='jumlah_skill' value='".$user['jumlah_skill']."'>";
					echo "<h4>Alamat </h4><br>";
					echo "<label for='rt'>Rt :</label> <input type='text' class='form-control' name='rt' value='".$user['rt']."'>";
					echo "<label for='rw'>Rw :</label> <input type='text' class='form-control' name='rw' value='".$user['rw']."'>";
					echo "<label for='desa/kelurahan'>Kelurahan/Desa :</label> <input type='text' class='form-control' name='desa/kelurahan' value='".$user['desa/kelurahan']."'>";
					echo "<label for='kecamatan'>Kecamatan :</label> <input type='text' class='form-control' name='kecamatan' value='".$user['kecamatan']."'>";
					echo "<label for='Kabupaten/Kota'>Kabupaten/Kota :</label> <input type='text' class='form-control' name='kabupaten/kota' value='".$user['kabupaten/kota']."'>";
					echo "<label for='provinsi'>Provinsi :</label> <input type='text' class='form-control' name='provinsi' value='".$user['provinsi']."'>";
					echo "<hr>";
					echo "<h4>Social media</h4><br>";
					echo "<label for='twitter'>Twitter :</label> <input type='text' class='form-control' name='twitter' value='".$user['twitter']."'>";
					echo "<label for='fb'>Facebook :</label> <input type='text' class='form-control' name='fb' value='".$user['fb']."'>";
					echo "<label for='linked_in'>Linked In :</label> <input type='text' class='form-control' name='linked_in' value='".$user['linked_in']."'>";
					echo "<label for='instagram'>Instagram :</label> <input type='text' class='form-control' name='instagram' value='".$user['instagram']."'><hr>";
					echo "<button name='btnSubmit' class='btn-info'> Simpan </button><hr>";
					echo "</form>";
				}
				?>
		</div>
	</body>
</html>