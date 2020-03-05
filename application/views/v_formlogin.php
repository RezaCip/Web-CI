<html>
    <head>
        <!-- menampilkan judul pada browser -->
        <title><?php echo $title ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/Asset/css/login.css" />
    </head>

    <body>
        <?php echo form_open("c_login/proseslogin"); ?>
        <div id="wrap">
            <div id="maincontent">
                <!-- menampilkan header login -->
                <div id="header"><?php echo $loginheader ?></div>
                <div id="content">
                    <!-- menampilkan validasi login -->
                    <?php echo $gagal ?>
                    <div id="label">Username :</div>
                    <div id="form"><input type="text" name="username"></div>
                    <div id="label">Password :</div>
                    <div id="form"><input type="password" name="password"></div>
                    <div id="label">&nbsp;</div>
                    <div id="form"><input type="submit" value="Login"/></div>
                </div>
                <div id="footer"></div>
            </div>
        </div>
    </form>
</body>
</html>
