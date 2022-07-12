<?php
 if (empty($_SESSION['username'])){
 				print "<script type=\"text/javascript\">alert('Login dulu lah ! ');
				window.location = 'http://localhost/codeigniter2/web/login';
				</script>";
 }
 ?>
 <section>
<h1><?php echo $judul ?></h1>
	<h2>Hai, <?php echo $this->session->userdata("username"); ?></h2>
</section>