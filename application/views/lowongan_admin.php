<html>
	<head>
		<title>Lowongan</title>
	</head>
	<body>
		<div class="container-content">
			<br>
			<br>
			<form method="POST" action="<?php echo base_url()."index.php/controll/insert_lowongan"; ?>">
				
				<h1>Input Lowongan </h1> <hr>
				<h4>Program Studi	: </h4><div class="form-group"><select class="form-control" id="prodi" name="prodi">
					<option value=""></option>
					<?php 
						$prodi = $this->Model->getProdiAll();
						foreach($prodi->result_array() as $listprodi){
							echo "<option value=".$listprodi['nama'].">".$listprodi['nama']."</option>";
						}
					?>
				</select> </div>
				
				<h4>Nama Perusahaan	: <input type="text" name="nama_perusahaan"></h4><br>
				
				<h4>Expired : <input type="date" name="expired"></h4><br>
			
				<h4>Skill yang dibutuhkan :<h4><br>
				<div class="form-group"><textarea class="form-control" rows="5" id="skill" name="skill"></textarea> </div>
				<!--
				<ul>
					<li> Desain </li> <br>
					<button name="tambah" class="btn-info"> Tambah </button>
					<br>
					<br>
				</ul>
				-->
				
				<h4><button name="btnSubmit" class="btn-info"> Simpan </button></h4>
			</form>
		</div>
	</body>
</html>