<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Rumah Impianku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Asset/css/bootstrap.min.css">
  <script src="<?php echo base_url() ?>/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/Asset/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/rumah/index.php/c_home/index">Rumahku</a>
    </div>
    <!-- <ul class="nav navbar-nav">
      <li ><?php echo anchor ("http://localhost/rumah/index.php/c_rumah/index", "About"); ?></li>
    </ul> -->
    <ul class="nav navbar-nav navbar-right">
      <li><?php echo anchor ("c_rumah", "Data Saya"); ?></span> </a></li>
      <!--<li><?php echo anchor ("c_home"); ?><span class="glyphicon glyphicon-log-in"></span> Logout</a></li> -->
       <li><?php echo anchor ("c_login/logout/", "Logout"); ?></span> </a></li>
    </ul>
  </div>
</nav>
