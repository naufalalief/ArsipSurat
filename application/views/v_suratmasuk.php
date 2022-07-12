
 	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
 	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
 <section>
	<table style="margin:auto auto;" border="1" id="tes">
		<tr>
			<th><center>&nbsp;&nbsp;id_surat&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;tgl_surat&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;kode_surat&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;keterangan&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;halaman&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;user entri&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;gambar&nbsp;&nbsp;</center></th>
			<th><center>&nbsp;&nbsp;Lain-lain&nbsp;&nbsp;</center></th>
		</tr>
		<?php 
		$id_surat = 1;
		foreach($suratmasuk as $u){ 
		?>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->id_surat ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->tgl_surat ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->kode_surat ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->keterangan ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->halaman ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $u->user_entri ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;<a id='edit_data' data-toggle='modal' data-target='#io<?=$u->id_surat?>' style="cursor:pointer" title="assets/images/<?=$u->nama?>" type="text" name="nama_provinsi" id="keterangan" width="50%"><button>lihat</button></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;
                              <?php echo anchor('delete/hapus/'.$u->id_surat,'<button>Hapus</button>',array('class'=>'hapus','onclick'=>"return konfirmasi();")); ?>
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


<div class="modal fade" role="dialog" id="io<?=$u->id_surat?>">
<div class="modal-dialog" id="apalah">
            <div class="modal-content">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <br>
                    <h4 class="modal-title"><center>Gambar</center></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                     <div class="col-xs-12">
                         <div class="form-group">
                             <center><label class="control-label"><?php echo $u->keterangan ?></label><br>
                                <img src="assets/images/<?=$u->nama?>" type="text" name="nama_provinsi" id="keterangan" width="50%"></center>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href='suratmasuk'><button data-dismiss="modal" class="btn btn-success"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp; Close</button></a>
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