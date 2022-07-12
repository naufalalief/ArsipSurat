<?php
 if (empty($_SESSION['username'])){
 				print "<script type=\"text/javascript\">alert('Login dulu lah ! ');
				window.location = 'http://localhost/codeigniter2/web/login';
				</script>";
 }
 ?>
<section>
		<style>
	button{
		background-color:;
		text-align: center;
		border-radius: 4px;
		width: 525px;
		height: 30px;
	}
	button:hover{
		border-color: black;
		background-color: white;
	}
</style>
<h1><?php echo $judul ?></h1>
<p align="left">
	<a href="<?php echo base_url('buatsurat')?>" title="Buat surat"><button>Buat Surat</button></a>
	<a href="<?php echo base_url('buatsurat2')?>" title="Kirim surat"><button>Kirim Surat</button></a>
</p>
</section>