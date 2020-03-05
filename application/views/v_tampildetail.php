<html>
<head>
<title>Rumah Impianku</title>
<!--<link rel=”icon” type=”image/png” href=”<?php echo base_url(); ?>/Asset/images/icon.png”>-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url(); ?>/Asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url(); ?>/Asset/css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url(); ?>/Asset/js/jquery1.min.js"></script>
<!-- start menu -->
<link href="<?php echo base_url(); ?>/Asset/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo base_url(); ?>/Asset/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/Asset/css/fwslider.css" media="all">
    <script src="<?php echo base_url(); ?>/Asset/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>/Asset/js/css3-mediaqueries.js"></script>
    <script src="<?php echo base_url(); ?>/Asset/js/fwslider.js"></script>
<!--end slider -->
<script src="<?php echo base_url(); ?>/Asset/js/jquery.easydropdown.js"></script>
</head>
 <!-- <?php var_dump($_SESSION);
print_r($this->session->userdata('username'));
 ?> -->
<body>
  <?php $this->load->view('header'); ?>
  <br>
  <br>
  <div class="container">
      <!-- Product Menu -->

      <!-- /.row -->
      <div class="row">
  <?php foreach ($data_upload as $upload) : ?>
  <?php foreach ($data_rumah as $product ) : ?>
    <div class="panel panel-default col-md-6">
<div class="panel-heading"><?php echo $product->judul ?></div>
<div class="panel-body">
<!-- <style> {width: 100px; height: 100px;}</style> -->
  <?php

  $product_image =['src' => 'Asset/uploads/'.$product->gambar,

  'class'=>'img-responsive img-portfolio img-hover',
  'id'=>'g'
  ];
  echo img($product_image);
?></div>
</div>
<!-- batas info rumah -->
<div class="panel panel-default col-md-4">
<div class="panel-heading">Info Rumah</div>
<div class="panel-body">
Lokasi : <?php echo $product->lokasi ?>
<br>
Harga  : <?php echo $product->harga ?>,-
<br>
Ukuran : <?php echo $product->lb ?>/<?php echo $product->lt ?>

</div>
</div>
<!-- batas deskripsi -->
<div class="panel panel-default col-md-4">
<div class="panel-heading">Deskripsi</div>
<div class="panel-body">
<?php echo $product->deskripsi ?>
</div>
</div>

<br>

<div class="panel panel-default col-md-4">
<div class="panel-heading">Info Penjual</div>
<div class="panel-body">
Nama : <?php echo $upload->nama ?>
No telp : <?php echo $upload->no_telp ?>
</div>
</div>
  <?php endforeach; ?>
<?php endforeach; ?>
    </div>

</div>
</body>
</html>
