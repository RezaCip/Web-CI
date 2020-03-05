<?php $this->load->view('header2'); ?>
<br>
<div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-default">
        <div class="panel-body">

            <form action="<?php echo base_url() ?>index.php/c_rumah/terima" method="post" enctype="multipart/form-data">
                <table class="table table-striped">
                  <tr>
                      <td>Judul</td>
                      <td>
                          <div class="col-sm-7">
                              <input type="text" name="judul" class="form-control">
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Tipe</td>
                      <td>
                          <!-- <div class="col-sm-7">
                              <input type="text" name="tipe" class="form-control">
                          </div> -->
                          <select class="select" name="tipe">
                            <option value="36">36</option>
                            <option value="45">45</option>
                            <option value="90">90</option>
                          </select>

                      </td>
                  </tr>
                  <tr>
                      <td>Luas Bangun</td>
                      <td>
                          <div class="col-sm-7">
                              <input type="text" name="luasbangun" class="form-control">
                          </div>
                      </td>
                  </tr>
                  <tr>
                      <td>Luas Tanah</td>
                      <td>
                          <div class="col-sm-7">
                              <input type="text" name="luastanah" class="form-control">
                          </div>
                      </td>
                  </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>
                            <div class="col-sm-7">
                                <input type="text" name="lokasi" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>
                            <div class="col-sm-7">
                                <textarea rows="4" name="deskripsi" class="form-control"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>
                            <div class="col-sm-7">
                                <input type="text" name="harga" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>
                            <div class="col-sm-7">
                                <input type="file" name="userfile">
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
