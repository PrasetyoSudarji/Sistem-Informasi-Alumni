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
				<h4>Kode Lowongan	: <input type="text" name="id_lowongan"></h4><br>
				
				<h4>Nama Lowongan	: <input type="text" name="nama_lowongan"></h4><br>
				
				<h4>Nama Perusahaan	: <input type="text" name="nama_perusahaan"></h4><br>
			
				<h4>Skill yang dibutuhkan : <input type="text" name="skill"><h4><br>
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