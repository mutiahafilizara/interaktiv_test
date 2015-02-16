<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Interaktiv Test | Registration Page</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/bootstrap.min.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/font-awesome.min.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/AdminLTE.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css//theme/mutia.css"/>
    </head>

    <body class="bg-black">
    <div class="row">
        <div class="mylogologin">
            <img class="img-rounded" src="<?php echo base_url();?>assets/img/100.png">
        </div>
    </div>
    <div class="row">
        <div class="loginbox">
            <div class="form-box" id="login-box">
                <div class="header">Sign In</div>
                <form action="<?php echo base_url()?>user/login_action" method="post">
                    <div class="body bg-gray">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="User ID" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required/>
                        </div>          
                        <div class="form-group">
                            <input type="checkbox" name="remember_me"/> Remember me
                        </div>
                    </div>
                    <div class="footer">                                                               
                        <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                        
                        <p><a href="#">I forgot my password</a></p>
                        
                        <a href="<?php echo base_url()?>user" class="text-center">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script type="text/javascript" src="<?PHP echo base_url();?>assets/js/bootstrap.min.js" ></script>        

    </body>
</html>