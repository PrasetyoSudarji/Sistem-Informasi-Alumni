$(document).ready(function(){
    
    var base_url = 'http://localhost/sik/';
    $(document).on('submit', '#form_login', function(e){
        e.preventDefault();
        var data = $('#form_login').serialize();
        var user = $('#username').val();
        var password = $('#password').val();
        $('.loading').html('Loading...');
        $.ajax({
            url: base_url+'login/login_nya/'+user+'/'+password,
            type: 'GET',
            //data: data,
            dataType: 'JSON',
            success: function(msg){
                if(msg.status == 1){
                    $('#loading').html('Login Berhasil');
                }else if(msg.status == 0){
                    $('#loading').html('Login gagal');
                }
                
            }
        });
    });
});