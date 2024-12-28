<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url()?>aassets/css/main/app.css">
    <link rel="stylesheet" href="<?=base_url()?>aassets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css" integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <style>
        #auth #auth-left .auth-logo {
    margin-bottom: 0rem!important;
}

#auth #auth-left .auth-logo img {
    height  : 8rem;
    margin :20%;
}
    </style>
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo row d-flex jsutify-content-center align-items-center">
                <div class="col-md-12 d-flex jsutify-content-center align-items-center">
                    
                <a href="<?=base_url()?>admin"><img src="<?=base_url()?>assets/img/website/Conquest_Immigration_Service-removebg-preview.png" alt="Logo"></a>
                </div>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <!--<p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>-->

            <form id="check_admin" method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" id="admin_username" name="admin_username" placeholder="Username">
                    <div class="form-control-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" id="admin_password" name="c" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
            <div id="login_alert"></div>
            <div class="text-center mt-5 text-lg fs-4">
                <!--<p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign-->
                <!--        up</a>.</p>-->
                <!--<p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>-->
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>







  <script>
        $(document).ready(function(){  
      $('#check_admin').on('submit', function(e){ 
          
                e.preventDefault();  
              
        var admin_username  = $('#admin_username').val();
        var admin_password  = $('#admin_password').val();
        // console.log(password);
        $.post(
            "<?=base_url()?>AdminLogin/check_admin",
            {'admin_username':admin_username,'admin_password':admin_password},
            function(data){
                 var data= JSON.parse(data);
              
                 if(data.type == "success"){
                     $(".login_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>X&nbsp</span></button></div>');
                     
           
                             window.location.href='<?=base_url()?>Admin';
                
                    
                  
                 }else{
                $(".login_alert").html('<div class="alert alert-'+data.type+' alert-dismissible show fade d-flex justify-content-between"><div class="alert-body">'+data.msg+'</div><buttonclass="close" data-dismiss="alert"><span>X&nbsp</span></button></div>');
              
            }
                
                
            }
            )
            
      });  
 });  
 </script>
    
    
</body>

</html>
