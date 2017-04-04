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
					echo "<div class='container'>";
					if ($_SESSION['status'] == 1 || $_SESSION['status'] == 2){ 
						echo "<form method='POST' action='".base_url()."Lowongan/proc_kelola_lowongan()'>";
						echo "<label for='kode'>Kode Lowongan :</label> <input type='text' class='form-control' name='kode' value='".$loker['kode']."' disable>";
						echo "<label for='nama_perusahaan'>Nama Perusahaan :</label> <input type='text' class='form-control' name='nama_perusahaan' value='".$loker['nama_perusahaan']."'>";
						echo "<label for='expired_time'>Lowongan berkahir pada :</label> <input type='text' class='form-control' name='expired_time' value='".$loker['expired_time']."'>";
						echo "<label for='skill'>Deskripsi pekerjaan :</label> <input type='text' class='form-control' name='deskripsi' value='".$loker['deskripsi']."'>";
					}else{
						echo "<form method='POST' action='".base_url()."Lowongan/proc_apply_lowongan'>";
						echo "Nama Perusahaan : ".$loker['nama_perusahaan']."</br>";
						echo "Lowongan berakhir pada : ".$loker['expired_time']."</br>";
						echo "Deskripsi pekerjaan : ".$loker['deskripsi']."</br>";
					}
					echo "<br>";
					if ($_SESSION['status'] == 1 || $_SESSION['status'] == 2){
						echo "<button name='btn' class='btn-info' > Edit </button>";
						echo " ";
						echo "<button name='btn' class='btn-info' > Hapus </button>";

					}else{
						echo "<button name='btn' class='btn-info'> Apply </button>";
					}
					echo "</form>";
					echo "</div>";
					echo "<hr><hr>";
				}
			?>
		</div>
	</body>
</html>