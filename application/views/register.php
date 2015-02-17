<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Interaktiv Test | Registration Page</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/bootstrap.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/bootstrap.min.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/font-awesome.min.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css/AdminLTE.css"/>
        <link  rel="stylesheet" type="text/css" href="<?PHP echo base_url();?>assets/css//theme/mutia.css"/>
        <script src="<?PHP echo base_url();?>assets/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="<?PHP echo base_url();?>assets/js/bootstrap.min.js" ></script>
        <script type="text/javascript">
            $(document).ready(function() {
                /// make loader hidden in start
                /*$('#Loading').hide();    
             
                $('#email').blur(function(){
                var a = $("#email").val();
                var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
                   // check if email is valid
                if(filter.test(a)){
                            // show loader
                    $('#Loading').show();
                    $.post("<?php echo base_url()?>user/check_email_availablity", {
                        email: $('#email').val()
                    }, function(response){
                                    //#emailInfo is a span which will show you message
                        $('#Loading').hide();
                        setTimeout("finishAjax('Loading', '"+escape(response)+"')", 400);
                    });
                    return false;
                }*/
                $('#email').on('blur',function (){
                   
                    $.ajax({
                    type: "POST",
                    data: "email="+$(this).val(),
                    url: "<?php echo base_url() ?>user/check_email_availablity/",
                    //beforeSend: function(){
                    //emailInfo.html(“Checking Email…”); //show checking or loading image
                    success: function(data){
                    if(data == "1")
                    {
                        alert("email ok");
                    }
                    else if(data == "0")
                    {
                        alert("email has been registered");
                    }
                    },
                });
            });
                    //alert($(this).val());

            function finishAjax(id, response){
              $('#'+id).html(unescape(response));
              $('#'+id).fadeIn();
            } 

        });
        </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="bg-black">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mylogo">
                            <img class="img-rounded" src="<?php echo base_url();?>assets/img/100.png">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="uppertext">
                          <h2>Get Your 30 Days Trial NOW!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="thevideo">
                    <div class="container">
                        <div class="col-md-8">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe  width="500" height="300" class="embed-responsive-item" src="https://www.youtube.com/embed/aU4plDHuAMo"></iframe>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="belowtext">
                   <center><h4>Do you prefer talking to a reprsentative?</h4></center>
                   <center><h5>Call us at +65 23198932 (Singapore) OR +62 21 98128381 (Indonesia)</h5></center>
                 </div>
                </div>
                <div class="row">
                      <div class="copyright">
                      <h5>&copy; Copyright 2014 OneHundred Pte Ltd. various trademark held by their respective owner</h5>
                      </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="registerbox">
                <div class="form-box" id="login-box">
                    <div class="header">Get your 30 day free trial</div>
                        <form action="<?php echo base_url()?>user/reg_action" method="post" id="regForm">
                            <div class="body bg-gray">
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control" placeholder="Surname" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" class="form-control" placeholder="Last Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="User Name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                            <select class="form-control" name="title" required/>
                                                <option selected>Job Title</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="company" class="form-control" placeholder="Company Name" required/>
                                </div>
                                <div class="form-group">
                                    <label required>Company Size:</label><br/>
                                        <input type="radio" name="options1" id="options1" value="under50"> &lt;50    
                                        <input type="radio" name="options2" id="options2" value="between50100"> 50-100
                                        <input type="radio" name="options3" id="option3" value="over100"> &gt;100              
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" required/> I agree to the term and condition to join OneHundred
                                    </label>
                                </div>
                            </div>
                            <div class="footer">                    
                                <button type="submit" class="btn bg-olive btn-block">Register</button>
                            </div>
                        </form>
                    </div>     
                </div>
            </div>
        </div>
<!--     <div class="responsive-video">
        <video src="" controls></video>
    </div>
     -->
        <!-- jQuery 2.0.2 -->
        
    </body>
</html>