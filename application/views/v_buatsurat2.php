<?php
 if (empty($_SESSION['username'])){
 				print "<script type=\"text/javascript\">alert('Login dulu lah ! ');
				window.location = 'http://localhost/codeigniter2/web/login';
				</script>";
 }
 ?>
 <style>
	button{
		text-align: center;
		border-radius: 4px;
		width: 100px;
		height: 30px;
	}
	button:hover{
		border-color: black;
		background-color: white;
	}
</style>
 <section>
 <?php echo form_open_multipart('buatsurat2/aksi_buatsurat'); ?>
 	<p>
 	Judul &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo form_input('judul'); ?>
 	</p>
 	<p>
 	Keterangan : <?php echo form_input('keterangan'); ?>
 	</p>
 	<p>
 	Kepada &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo form_input('kepada'); ?>
 	</p>
 	<p>
 	<input type="file" name="berkas" size="20">
 	</p>
 	<p>
 	<?php echo form_submit('submit', 'save'); ?>
 	</p>
 	</form>
 </section>