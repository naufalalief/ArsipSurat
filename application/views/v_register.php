<?php
 if (isset($_SESSION['username'])){
                print "<script type=\"text/javascript\">alert('Anda sudah login ! ');
                window.location = 'http://localhost/codeigniter2/web/menu';
                </script>";
 }
 ?>
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
<h1>Login</h1>
<form action="<?php echo base_url('register/aksi_register'); ?>" method="post">       
<p>
        Daftar
</p>
<p>
    Username
    <input type="text" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Isi Username dengan benar')" oninput="setCustomValidity('')">
</p>
<p> 
    Password
    <input type="Password" name="password" placeholder="Password"  required oninvalid="this.setCustomValidity('Isi Password dengan benar')" oninput="setCustomValidity('')">
</p>
<p> 
    Email
    <input type="Email" name="emal" placeholder="Email"  required oninvalid="this.setCustomValidity('Isi Email dengan benar')" oninput="setCustomValidity('')">
</p>
<p>
    <input type="submit" value='Register' name="submit"></form><a href="<?php echo base_url('lupa')?>"><button>Lupa Password</button></a>

</p>
<p>
    tutorial Malaslapo-lapo
</p>
</section>