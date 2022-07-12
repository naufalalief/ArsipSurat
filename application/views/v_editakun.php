<section>
	<style>
	input{
		text-align: center;
		border-radius: 4px;
	}
	input:hover{
		border-color: black;
	}
::-webkit-input-placeholder {
   color: #808080;
   text-align: center;

}

:-moz-placeholder {
   color: #808080;
   text-align: center;

}

</style>
<form action="<?php echo base_url('editakun/aksi_editakun'); ?>" method="post">		
<p>
		Silahkan edit akun.
</p>
<p>
	Username
	<input type="text" name="username" placeholder="Username">
</p>
<p>	
	Password
	<input type="Password" name="password" placeholder="Password">
</p>
<p>
	<input type="submit" value='Simpan' name="submit">
</p>
<p>
	tutorial Malaslapo-lapo
</p>
</form>
</section>