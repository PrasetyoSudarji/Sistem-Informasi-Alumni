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
			$nim = 14113003;
			$user = $this->Model->getStatus($nim);
			foreach($user->result_array() as $menu){
				
				if ($menu['status'] == 1 ){
					echo "<li class='<?php if($link=='home'){echo'active';}?><a href='".base_url()."controll/index'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
        			echo "<li class='";
					if ($link=='lowongan_admin'){echo'active';}
					echo "'><a href='".base_url()."controll/lowongan_admin'><i class='fa fa-user' aria-hidden='true'></i> Lowongan Admin </a></li>";		
				} else if ($menu['status'] == 2 ){
					echo "<li class=' <?php if($link=='home'){echo'active';}?><a href='".base_url()."controll/index'><i class='fa fa-home' aria-hidden='true'></i> Home </a></li>";
					echo "<li class=' <?php if($link=='profile'){echo'active';}?><a href='".base_url()."controll/profile'><i class='fa fa-user' aria-hidden='true'></i> profile </a></li>";
					 echo "<li class='"; 
					 if ($link=='lowongan'){echo'active';}
					 echo "'><a href='".base_url()."controll/lowongan'><i class='fa fa-user' aria-hidden='true'></i> Lowongan </a></li>";
				} else {
					echo "ERROR";
				}
			}
			
		?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
          <li><a href="#" data-toggle="popover" title="Silahkan Login" data-content="<form><label>Username:</label><input type='text' class='form-control'/><label>Password:</label><input type='text' class='form-control' style='min-width:200px'/><br/><button type='submit' class='btn btn-primary'>Login</button></form>" data-placement="bottom"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      </ul>
    </div>
  
</nav>
</div>
    

<div class="container" style="background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2);">
    <div class="row">