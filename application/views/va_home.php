<?php $this->load->view('header2'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Cari Rumah Impianmu</title>
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
  <div class="container">

  <div class="row">

                  <!-- body items -->
      <!-- load products from table -->
  <?php foreach ($upload as $product ) : ?>
       <div class="col-md-3">
          <div class="panel panel-default">
              <div class="panel-heading">

        <h6>Rumah Tipe - <?=  $product->tipe  ?></h6>

              </div>
              <div class="panel-body" width="100px">
      <a href="">
      <style>#g {width:500%;height: 120px;}</style>
        <?php

          $product_image =['src' => 'Asset/uploads/'.$product->gambar,

          'class'=>'img-responsive img-portfolio img-hover',
          'id'=>'g'
          ];
          echo img($product_image);
        ?>
      </a>
      <style>#t {width: 230px;height: 75px;overflow: scroll;}</style>
                  <p id="t"> <?=  $product->deskripsi  ?></p>
                 <p><code>Harga:</code> <?=  $product->harga  ?> <!--  <code> Stock:</code> <?=  $product->pro_stock  ?> --> </p>
                  <?=  anchor('c_home/tampildetail/'.$product->id,'Detail',['class'=>'btn btn-success  btn-xs','role'=>'button']) ?>
                 <!--  <ul class="nav nav-tabs navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Report <i class="fa fa-exclamation-triangle"></i></a>
        <ul class="dropdown-menu">
        <li>-->

              </div>
          </div>
      </div>
  <?php endforeach; ?>
  </div>
</div>

</body>
</html>
