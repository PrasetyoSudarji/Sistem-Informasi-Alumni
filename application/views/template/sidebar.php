<div class="col-md-3">
<br/>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-warning">Main Menu</a>     
  <a href="<?=base_url()?>admin/profile" class="list-group-item <?php if($link=='profile'){echo'active';}?>"><i class="fa fa-user" aria-hidden="true"></i> profile </a>      
</div>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-warning">Master Administrator</a>
  <a href="<?=base_url()?>welcome" class="list-group-item <?php if($link=='user'){echo'active';}?>"><i class="fa fa-user" aria-hidden="true"></i> Administrator </a>      
</div>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-warning">Master Instansi</a>  
  <a href="<?=base_url()?>kategori" class="list-group-item <?php if($link=='test'){echo'active';}?>"><i class="fa fa-briefcase" aria-hidden="true"></i> Jenis Instansi</a>  
  <a href="<?=base_url()?>index.php/jenis_instansi" class="list-group-item <?php if($link=='jenis_instansi'){echo'active';}?>"><i class="fa fa-building-o" aria-hidden="true"></i> Nama Instansi</a>
</div>

<div class="list-group">
  <a href="#" class="list-group-item list-group-item-warning">Master Kerja Sama</a>  
  <a href="<?=base_url()?>kerja_sama" class="list-group-item"><i class="fa fa-file-text-o" aria-hidden="true"></i> Kerja Sama</a>    
</div>

</div>







