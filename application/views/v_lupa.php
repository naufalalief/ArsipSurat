<section>
	<style>
	input{
		text-align: center;
		border-radius: 4px;
	}
	input:hover{
		border-color: black;
	}
	button{
		text-align: center;
		border-radius: 4px;
	}
	button:hover{
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
<h1>Lupa password?</h1>
<form action="<?php echo base_url(''); ?>" method="post">		
<p>
		Kirim password lewat email.
</p>
<p>
	Email : 
	<input type="email" name="email" placeholder="email">
</p>
<p>
	<input type="submit" value="kirim" name="submit">
</p>
</form>
</section>