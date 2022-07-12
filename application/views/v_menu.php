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
<h1><?php echo $judul ?></h1>
<p><center>
	<a href="<?php echo base_url('suratmasuk')?>" title="Lihat data di surat masuk"><button>Surat Masuk</button></a>
	<a href="<?php echo base_url('suratkeluar')?>" title="Lihat data di surat keluar"><button>Surat Keluar</button></a>
	<a href="<?php echo base_url('web/lain')?>"  title="lain-lain"><button>Lain-lain</button></a>
</center></p>
</section>