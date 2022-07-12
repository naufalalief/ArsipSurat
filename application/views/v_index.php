<?php
 if (empty($_SESSION['username'])){
 				print "<script type=\"text/javascript\">alert('Login dulu lah ! ');
				window.location = 'http://localhost/codeigniter2/web/login';
				</script>";
 }
 ?><section>
<h1><?php echo $judul ?></h1>
<p>
	Selamat Datang
</p>
<p>
</p>
</section>