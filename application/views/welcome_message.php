<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ITERA - Sistem Informasi Kepegawaian</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dataTable/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/dataTable/media/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/logo%20itera%20oke.png">    
    <script src="<?=base_url()?>assets/dataTable/media/js/jquery.dataTables.min.js"></script>  
    <script src="<?=base_url()?>assets/act.js"></script>  
    <style>
        body{
            background: #E3E3E3;
        }
        .pad{
            padding: 10px 0 0 20px;
        }
        .pad-bottom{
            padding-bottom:10px;
        }
        .warna{
            background: #DAA520;
            color: #fff;
        }
        .avatar { 
            width:100px;
            height:100px;
            margin:25px auto 10px auto;
            border-radius:100%;
            padding:50px;
            border:2px solid #aaa;
            background-size:cover;
            background-image:url("http://hotspot.itera.ac.id/img/logo-itera.png");
        }
        .hotspot_lbl { 
            font:bold 13px Arial; 
        }
        .itera_lbl { 
            margin:3px 0 10px 0;
            font:normal 13px Arial; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-md-offset-3" style="box-shadow: 0 10px 10px -6px #777;">
                <div class="row" style="background:#DAA520; min-height: 40px; color: #fff; padding: 10px 0 0 20px; margin-top: 100px;">
                    <b>Sistem Informasi Kepegawaian</b>
                </div>
                <div class="row" style="background: #fff; min-height: 220px; border-bottom: solid thin #cccccc; ">
                    <div class="row">
                        <!--kiri-->
                        <div class="col-md-4 pad" style="text-align:center">
                            <div class="avatar avatar_sd">
                                
                            </div>
                            <div class="hotspot_lbl">UPT TIK</div>
                            <div class="itera_lbl">Institut Teknologi Sumatera</div>
                        </div>
                        <!--kanan-->
                        <div class="col-md-8 pad">
                            <div class="alert alert-warning" style="margin:10px 0 9px 0;padding:7px;font-size:11px;text-align:center; max-width:340px" role="alert">
                                Masuklah dengan akun yang terregistrasi. Jika terjadi masalah pada sistem hubungi UPT TIK.
                            </div>
                            <div id="loading"></div>
                            <form id="form_login">
                                <div class="input-group pad-bottom" >
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>    
                                    <input type="text" name ="user" id="username" class="form-control" placeholder="Username" style="max-width:300px" />
                                </div>
                                <div class="input-group pad-bottom">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>    
                                    <input type="password" name ="password" id="password" class="form-control" placeholder="Password" style="max-width:300px" value=""  />
                                </div>
                                <button type="submit" class="btn btn-default warna">Login</button>
                            </form>
                         </div>
                    </div>
                </div>
                <div class="row" style="min-height: 40px; background:#FFF; padding: 10px 0 0 20px; font-size:12px; text-align: center">
                    &copy; 2016 All Right Reserved
                </div>
            </div>
        </div>
    </div>
</body>
</html>