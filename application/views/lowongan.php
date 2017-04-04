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
					
					$no = 1;
					echo "<br>";
					echo "<div class='container'>";
					if ($_SESSION['status'] == 1 || $_SESSION['status'] == 2){ 
						echo "<form method='POST' action='".base_url()."Lowongan/proc_kelola_lowongan'>";
						echo "<label for='judul'>Title : ".$loker['judul']."</label><br>";
						echo "<label for='kode'>Kode Lowongan :</label> <input type='text' class='form-control' name='kode' value='".$loker['kode']."' readonly>";
						echo "<label for='nama_perusahaan'>Nama Perusahaan :</label> <input type='text' class='form-control' name='nama_perusahaan' value='".$loker['nama_perusahaan']."' readonly>";
						echo "<label for='expired_time'>Lowongan berkahir pada :</label> <input type='text' class='form-control' name='expired_time' value='".$loker['expired_time']."'>";
						echo "<label for='skill'>Deskripsi pekerjaan :</label> <input type='text' class='form-control' name='deskripsi' value='".$loker['deskripsi']."'>";
					}else{
						echo "<form method='POST' action='".base_url()."Lowongan/proc_apply_lowongan'>";
						echo "<label for='judul'>Title : ".$loker['judul']."</label><br>";
						echo "<label for='kode'>Kode Lowongan :</label> <input type='text' class='form-control' name='kode' value='".$loker['kode']."' readonly>";
						echo "<label for='nama_perusahaan'>Nama Perusahaan :</label> <input type='text' class='form-control' name='nama_perusahaan' value='".$loker['nama_perusahaan']."' readonly>";
						echo "<label for='expired_time'>Lowongan berkahir pada :</label> <input type='text' class='form-control' name='expired_time' value='".$loker['expired_time']."' readonly>";
						echo "<label for='skill'>Deskripsi pekerjaan :</label> <input type='text' class='form-control' name='deskripsi' value='".$loker['deskripsi']."' readonly>";
					}
					echo "<br>";
					if ($_SESSION['status'] == 1 || $_SESSION['status'] == 2){
						echo "<button name='btn' class='btn-info' value='".$no."'> Edit </button>";
						echo " ";
						$no++;
						echo "<button name='btn' class='btn-info' value='".$no."'> Hapus </button>";

					}else{
						$query1 = $this->Model->getNim($_SESSION['login'])->result_array();
						foreach($query1 as $query){
							$nim = $query["nim"];
						}
						
						$data_where = array(
							'nim' => $nim,
							'kode' => $loker['kode']
						);
						$query2 = $this->db->select("status")
											->where($data_where)
											->get("lowongan_applied")
											->result_array();
						if ($query2 == null){
							echo "<button name='btn' class='btn-info'> Apply </button>";
						}else{
							foreach ($query2 as $query){	
								if($query['status'] == 0){
									echo "<button name='btn' class='btn-info'> Apply </button>";
								}else{
									echo "<button name='btn' class='btn-danger' disabled> Applied </button>";
								}
							}
						}
						
					}
					echo "</form>";
					echo "</div>";
					echo "<hr><hr>";
				}
			?>
		</div>
	</body>
</html>