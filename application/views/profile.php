<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
		<div class="container">
			<br>
			<br>
			<?php
				foreach ($profile->result_array() as $user){
					echo "<br>";
					echo "<img src =".base_url('assets/uploads/'.$user['foto'].'')." width='200px' height='200px'><br><br>";
					echo "Nama : ".$user['nama']."</br>";
					echo "Username : ".$user['username']."</br>";
					echo "NIM : ".$user['nim']."</br>";
					echo "Program Studi : ".$user['prodi']."</br>";
					echo "Tahun Lulus : ".$user['tahun_lulus']."<hr>";
					echo "Skill<br><br>";
					echo $user['jumlah_skill']."<hr>";
					echo "Alamat <br><br>";
					echo "Rt : ".$user['rt']."<br>";
					echo "Rw : ".$user['rw']."<br>";
					echo "Kelurahan/Desa : ".$user['desa/kelurahan']."<br>";
					echo "Kecamatan : ".$user['kecamatan']."<br>";
					echo "Kabupaten/Kota : ".$user['kabupaten/kota']."<br>";
					echo "Provinsi : ".$user['provinsi']."<br>";
					echo "<hr>";
					echo "<span class='fa-stack fa-lg'>";
					echo "<i class='fa fa-circle fa-stack-2x'></i>";
					if ($user['twitter'] == null){
						$twitter = '#';
						echo "<a href='".$twitter."' style='color: #000;' ><i class='fa fa-twitter fa-stack-1x fa-inverse'></i></a>";
					}else{
						$twitter = "http://twitter.com/".$user['twitter'];
						echo "<a href='".$twitter."' style='color: #000;' ><i class='fa fa-twitter fa-stack-1x fa-inverse'></i></a>";
					}
					echo "</span>&nbsp;&nbsp;&nbsp;";
					echo "<span class='fa-stack fa-lg'>";
					echo "<i class='fa fa-circle fa-stack-2x'></i>";
					if ($user['fb'] == null){
						$fb = '#';
						echo "<a href='".$fb."' style='color: #000;'><i class='fa fa-facebook fa-stack-1x fa-inverse'></i></a>";
					}else{
						$fb = "http://facebook.com/".$user['fb'];
						echo "<a href='".$fb."' style='color: #000;'><i class='fa fa-facebook fa-stack-1x fa-inverse'></i></a>";
					}
					echo "</span>&nbsp;&nbsp;&nbsp;";
					echo "<span class='fa-stack fa-lg'>";
					echo "<i class='fa fa-circle fa-stack-2x'></i>";
					if ($user['instagram'] == null){
						$instagram = '#';
						echo "<a href='".$instagram."' style='color: #000;'><i class='fa fa-instagram fa-stack-1x fa-inverse'></i></a>";
					}else{
						$instagram = "http://instagram.com/".$user['instagram'];
						echo "<a href='".$instagram."' style='color: #000;'><i class='fa fa-instagram fa-stack-1x fa-inverse'></i></a>";
					}
					echo "</span>&nbsp;&nbsp;&nbsp;";
					echo "<span class='fa-stack fa-lg'>";
					echo "<i class='fa fa-circle fa-stack-2x'></i>";
					if ($user['linked_in'] == null){
						$linked_in = '#';
						echo "<a href='".$linked_in."' style='color: #000;'><i class='fa fa-linkedin fa-stack-1x fa-inverse'></i></a>";
					}else{
						$linked_in = 'http://linkedin.com/'.$user['linked_in'];
						echo "<a href='".$linked_in."' style='color: #000;'><i class='fa fa-linkedin fa-stack-1x fa-inverse'></i></a>";
					}
					echo "</span>&nbsp;&nbsp;&nbsp;";
					
				}
				?>
		</div>
	</body>
</html>