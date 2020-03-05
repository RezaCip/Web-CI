<!DOCTYPE HTML>
<html>
<head>
<title>Login Admin </title>
<link href="<?php echo base_url(); ?>/Asset/css/style1.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Plans & Pricing Tables Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--web-fonts-->
</head>
<body>
<?php echo form_open("c_login/proseslogin"); ?>
            <div class="main">
                <div class="login">
                    <div class="login-top">
                        <img src="<?php echo base_url(); ?>/Asset/images/p.png">
                    </div>
                    <div class="login-bottom">
                    <form>
                        <input type="text" name="username" placeholder="Username">
                        <font color="white">a</font>
                        <input type="password" name="password"  placeholder="Password" >
                        <font color="white">a</font>
                        <div width: 50px>
                          <a class="navbar-brand" href="http://localhost/rumah/index.php/c_lupa">Lupa Password ?</a>
                        </div>
                        <input type="submit" value="login">
                    </form>
                    </div>
                </div>
            </div>


</body>
</html>
