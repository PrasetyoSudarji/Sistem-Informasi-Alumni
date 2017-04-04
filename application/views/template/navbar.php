<div class="container top" style="background:#daa520;" >
<nav class="navbar navbar-default">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <?php
			$email = $session;
			if ($email == null){
				echo "<li class=";if($link=='home'){echo 'active';}echo "><a href='".base_url()."'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
			}else{
				$user = $_SESSION['status'];
				echo "<li class=";if($link=='home'){echo 'active';}echo "><a href='".base_url()."Controll/home'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
			}
	  ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
        <!--<li><a href="#" data-toggle="popover" title="Silahkan Login" data-content="<form><label>Username:</label><input type='text' class='form-control'/><label>Password:</label><input type='text' class='form-control' style='min-width:200px'/><br/><button type='submit' class='btn btn-primary'>Login</button></form>" data-placement="bottom"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>-->
		<?php
			if ($email == null){
				echo "<li class=";if($link=='login_view'){echo 'active';}echo "><a href='".base_url()."Login'><i class='fa fa-user' aria-hidden='true'></i> Login </a></li>";
			}else{
				if($user == 1 || $user == 2){
					$profile = $this->Model->getNamaAdm($email);
				}else{
					$profile = $this->Model->getNamaMhs($email);
				}
				foreach($profile->result_array() as $namapengguna){
					echo "<li class='dropdown'>";
					echo "<a class='dropdown-toggle' data-toggle='dropdown' href='#'>".$namapengguna['username']."<span class='caret'></span></a>";
					echo "<ul class='dropdown-menu'>";
					if ($user == 1 ){
						echo "<li class=";if($link=='lowongan'){echo'active';}echo "><a href='".base_url()."Lowongan'><i class='fa fa-user' aria-hidden='true'></i> Lihat Lowongan </a></li>";
						echo "<li class=";if($link=='input_lowongan'){echo'active';}echo "><a href='".base_url()."Lowongan/input_lowongan'><i class='fa fa-user' aria-hidden='true'></i> Buat Lowongan </a></li>";
						echo "<li class=";if($link=='input_admin'){echo'active';}echo "><a href='/#'><i class='fa fa-user' aria-hidden='true'></i> Buat Admin </a></li>";
						echo "<li class=";if($link=='input_user'){echo'active';}echo "><a href='/#'><i class='fa fa-user' aria-hidden='true'></i> Buat user </a></li>";
					}if ($user == 2 ){
						echo "<li class=";if($link=='lowongan'){echo'active';}echo "><a href='".base_url()."Lowongan'><i class='fa fa-user' aria-hidden='true'></i> Lihat Lowongan </a></li>";
						echo "<li class=";if($link=='input_lowongan'){echo'active';}echo "><a href='".base_url()."Lowongan/input_lowongan'><i class='fa fa-user' aria-hidden='true'></i> Buat Lowongan </a></li>";
					} else if ($user == 3 ){
						echo "<li class=";if($link=='profile'){echo'active';}echo "><a href='".base_url()."Profile'><i class='fa fa-user' aria-hidden='true'></i> Profile </a></li>";
						echo "<li class=";if($link=='edit_profile'){echo'active';}echo "><a href='".base_url()."Profile/edit_profile'><i class='fa fa-user' aria-hidden='true'></i> Edit Profile </a></li>";
						echo "<li class=";if($link=='lowongan'){echo'active';}echo "><a href='".base_url()."Lowongan'><i class='fa fa-user' aria-hidden='true'></i> Lowongan </a></li>";
					}
					echo "<li><a href='".base_url()."Logout'>Log out</a></li>"; 
					
					echo "</ul>"; 
					echo "</li>";
				}
			}
		?>
      </ul>
    </div>
  
</nav>
</div>
    

<div class="container" style="background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2);">
    <div class="row">