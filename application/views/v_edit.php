<?php $this->load->view('header2'); ?>
<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
        <div class="panel-body">
          <?php

          foreach ($data_rumah as $product) {
            $id = $product->id;
            $tipe = $product->tipe;
            $lokasi = $product->lokasi;
            $deskripsi = $product->deskripsi;
            $harga = $product->harga;
            $gambar = $product->gambar;
          }

           ?>

            <form action="<?php echo base_url() ?>index.php/c_rumah/terupdate/<?php echo $id?>" method="post" enctype="multipart/form-data">
                <table class="table table-striped">
                   <tr>
                       <td>id</td>
                       <td>
                           <div class="col-sm-7">
                               <input type="text" name="id" class="form-control" disabled value=<?php echo $id ?>>
                           </div>
                       </td>
                   </tr>
                   <tr>
                       <td>Tipe</td>
                       <td>
                           <div class="col-sm-7">
                               <input type="text" name="tipe" class="form-control" value=<?php echo $tipe?>>
                           </div>
                       </td>
                   </tr>
                     <tr>
                         <td>Lokasi</td>
                         <td>
                             <div class="col-sm-7">
                                 <input type="text" name="lokasi" class="form-control" value=<?php echo $lokasi?>>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>Deskripsi</td>
                         <td>
                             <div class="col-sm-7">
                                 <textarea rows="4" name="deskripsi" class="form-control" ><?php echo $deskripsi?></textarea>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>Harga</td>
                         <td>
                             <div class="col-sm-7">
                                 <input type="text" name="harga" class="form-control" value=<?php echo $harga?>>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>Gambar</td>
                         <td>
                             <div class="col-sm-7">
                                 <input type="file" name="userfile" value=<?php echo $gambar?>>
                             </div>
                         </td>
                     </tr> <tr>
                     <tr>
                         <td>
                             <div class="col-sm-7">
                             <input type="submit" class="btn btn-success" value ="Simpan">
                         </div>
                         </td>
                     </tr>
                </table>
            </form>
        </div>
    </div>
    <!-- /panel -->
</div>
<!-- /container -->

<?php $this->load->view('footer'); ?>
