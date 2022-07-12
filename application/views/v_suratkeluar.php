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
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;tgl_kirim&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;judul&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;keterangan&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;kepada&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;ilustrasi&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;Lain-lain&nbsp;&nbsp;&nbsp;&nbsp;</th>
		</tr>
		<?php 
		$id = 1;
		foreach($suratkeluar as $u){ 
		?>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->id ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->tgl_kirim ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->judul ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->keterangan ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->kepada?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<a id='edit_data' data-toggle='modal' data-target='#io<?=$u->id?>' style="cursor:pointer"><button>lihat</button></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;
                              <?php echo anchor('delete2/hapus/'.$u->id,'Hapus',array('class'=>'hapus','onclick'=>"return konfirmasi();")); ?>
			&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<script type="text/javascript" language="JavaScript">
				 function konfirmasi()
				 {
				 tanya = confirm("Anda Yakin Akan Menghapus Data Ini ?");
				 if (tanya == true) return true;
				 else return false;
 			}
 			</script>
			&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
<div class="modal fade" role="dialog" id="io<?=$u->id?>">
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
                                <img src="./assets/images/<?=$u->nama?>" type="text" name="nama_provinsi" id="keterangan" width="50%"></center>
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
</section>
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