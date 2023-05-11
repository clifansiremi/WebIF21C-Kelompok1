<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style_log.css');?>"/>
</head>
<body background="Gedung.jpg">
		<?php if (session()->getFlashdata('success')) : ?>
    	<div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
		<?php endif; ?>

		<?php if (session()->getFlashdata('error')) : ?>
			<div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
		<?php endif; ?>
		
	<form class="login-form" action="<?php echo base_url('Login/register'); ?>" method="post">
		<H1>
			<b>SIMDA</b>
			<b style="color: brown;" style="font-family: Arial, Helvetica, sans-serif;">UTI</b>
		</H1>
		<hr>
		<h2>PENDAFTARAN</h2>
		
		<div class="form-group">
		  <input type="text" id="username" name="username" required placeholder="NPM / NID">
		  <label for="username"><div class=""></div></label>
		</div>
		<div class="form-group">
		  <input type="text" id="nama" name="nama" required placeholder="Nama lengkap">
		  <label for="nama"><div class=""></div></label>
		</div>
		<div class="form-group">
			<input type="text" id="email" name="email" required placeholder="E-mail">
			<label for="email"><div class=""></div></label>
		</div>
		<div class="form-group">
			<input type="text" id="password" name="password" required placeholder="Password">
			<label for="username"><div class=""></div></label>
		</div>
		
				  
		<button type="submit">Daftar</button>
	  </form>


</body>
</html>
