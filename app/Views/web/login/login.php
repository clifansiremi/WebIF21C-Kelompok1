<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style_log.css');?>"/>
</head>
<body background="Gedung.jpg">
<?php if (isset($error)) : ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php endif; ?>

	<form class="login-form" action="<?php echo base_url('Login/login'); ?>" method="post">
		<H1 class="H4 text-gray-900 mb-4">
			<b>SIMDA</b>
			<b style="color: brown;" style="font-family: Arial, Helvetica, sans-serif;">UTI</b>
		</H1>
		<hr>
		<h2>SILAHKAN MASUK</h2>
		<div class="form-group">
		  <input type="text" id="username" name="username" required placeholder="NPM/NID/Nama Pengguna">
		  <label for="username"><div class=""></div></label>
		</div>
		<div class="form-group">
		  <input type="password" id="password" name="password" required placeholder="Password">
		  <label for="password">.</label>
		</div>
		<div class="form-group checkbox-container">
		  <input type="checkbox" id="remember-me" name="remember-me">
		  <label for="remember-me">Ingat Saya</label>
		</div>
		<h4><a href="<?= base_url('web/register'); ?>">Belum punya akun? Daftar sekarang</a></h4>
	  
		<button type="submit">Masuk</button>
		</form>

		

      	
		
		
</body>
</html>
