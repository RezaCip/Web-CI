<?php $this->load->view('header2'); ?>
<br>
<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
        <div class="panel-body">
            <!-- <p><?php echo $this->session->flashdata('pesan') ?> </p>  -->
            <a href="<?php echo base_url() ?>index.php/c_rumah/tambah" class="btn btn-sm btn-primary">

                <i class="glyphicon glyphicon-plus"></i>  Tambah Rumah</a>
            <br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Tipe</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($data_rumah)) { ?>
                        <tr>
                            <td colspan="8">Data Kosong</td>
                        </tr>
                    <?php
                    } else {
                        $no = 0;
                        foreach ($data_rumah as $rowuser) {
                            $no++;
                            ?>
                            <tr>
                                <td><textarea rows="4" disabled><?php echo $rowuser->judul ?></textarea></td>
                                <td><?php echo $rowuser->tipe ?></td>
                                <td><textarea rows="4" disabled><?php echo $rowuser->deskripsi ?></textarea></td>
                                <td><?php echo $rowuser->lokasi ?></td>
                                <td><?php echo $rowuser->harga ?></td>
                                <td>
                                  <a href="">
												<style>
                        textarea{resize: none;}
                        #g {width:50px;height:50px;}</style>
												<?php

													$product_image =['src'	=>'Asset/uploads/'.$rowuser->gambar,

													'class'=>'img-responsive img-portfolio img-hover',
													'id'=>'g'
													];
													echo img($product_image);
												?></td>
                                <?php $rowuser->username ?>
                                <td>

                                  <a href="<?php echo base_url() ?>index.php/c_rumah/edit/<?php
                                  echo $rowuser->id ?>" class="btn btn-info btn-sm">
                                  <i class="glyphicon glyphicon-pencil"></i></a>

                                    <a href="<?php echo base_url() ?>index.php/c_rumah/delete/<?php
                                    echo $rowuser->id ?>/<?php echo $rowuser->gambar ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda Yakin menghapus data ini?')">
                                    <i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            <!-- tr>
                                <td colspan="5" text-align="midle"><?php echo $rowuser->abstrak ?></td>
                            </tr><tr>
                                <td>
                                    <a href="<?php echo base_url() ?>index.php/c_adminskripsi/del_skripsi/<?php echo $rowuser->username ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Anda Yakin menghapus data ini?')">
                                    <i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>  -->
                            <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>
