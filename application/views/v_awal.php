<?php
 if (isset($_SESSION['username'])){
 				print "<script type=\"text/javascript\">alert('Anda sudah login ! ');
				window.location = 'http://localhost/codeigniter2/web/menu';
				</script>";
 }
 ?>
<section>
		<style>
	button{
		background-color:;
		text-align: center;
		border-radius: 4px;
		width: 100px;
		height: 50px;
	}
	button:hover{
		border-color: black;
		background-color: white;
	}
</style>
<center><h1>Malaslapo-lapo</h1>
<p align="center">
	<a href="<?php echo base_url().'web/login'?>" title="Login"><button>Login</button></a>
	<a href="<?php echo base_url().'web/register'?>" title="Register"><button>Register</button></a>
</p></center>
</section>