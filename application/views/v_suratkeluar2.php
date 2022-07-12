<?php
 if (empty($_SESSION['username'])){
        print "<script type=\"text/javascript\">alert('Login dulu lah ! ');
        window.location = 'http://localhost/codeigniter2/web/login';
        </script>";
 }
 ?>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
 <section>
  <style type="text/css">
    .apalah{
        width: auto;
        height: auto;
    }
  </style>
  <table style="margin:20px auto;" border="1">
    <tr>
      <th>id</th>
      <th>tgl_kirim</th>
      <th>judul</th>
      <th>keterangan</th>
      <th>kepada</th>
      <th>user entri</th>
      <th>gambar</th>
      <th>Lain-lain</th>
    </tr>
    <?php 
    $id_surat = 1;
    foreach($suratmasuk as $u){ 
    ?>
    <tr>
      <td><?php echo $u->id_surat ?></td>
      <td><?php echo $u->tgl_surat ?></td>
      <td><?php echo $u->kode_surat ?></td>
      <td><?php echo $u->keterangan ?></td>
      <td><?php echo $u->halaman ?></td>
      <td><?php echo $u->user_entri ?></td>
      <td><a id='edit_data' data-toggle='modal' data-target='#io<?=$u->id_surat?>' style="cursor:pointer">lihat</a></td>
      <td>
                              <?php echo anchor('delete/hapus/'.$u->id_surat,'Hapus'); ?>
      </td>
    </tr>


<div class="modal fade" role="dialog" id="io<?=$u->id_surat?>">
<div class="modal-dialog" id="apalah">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><center>Gambar</center></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                     <div class="col-xs-12">
                         <div class="form-group">
                             <center><label class="control-label">Tes</label><br>
                                <img src="assets/images/<?=$u->nama?>" type="text" name="nama_provinsi" id="keterangan" width="50%"></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href='suratmasuk'><button data-dismiss="modal" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp; Close</button></a>
                </div>
            </div>
</div>
</div>
    <?php } ?>
  </table>
  <div class="modal fade" id="modal_provinsi" tabindex="-1" role="dialog" aria-labelledby="provinsi" aria-hidden="true"></div>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script type="text/javascript">
  $(document).ready(function(){
   $('a#edit_data').click(function(){
    var url = $(this).attr('href');
    $.ajax({
     url : url,
     success:function(response){
      $('#modal_provinsi').html(response);
     }
    });
   });
   
  });
 </script>
</section>