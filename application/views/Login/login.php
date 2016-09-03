<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
 inicia sesión aquí :D
 <?= form_open("/login/login"); ?>
 <?= form_label("Usuario: "); ?>
 <?= form_input('username'); ?>
 <?= form_label("Contraseña"); ?>
 <?= form_password('pass'); ?>
 <?= form_submit("submit", "Entrar", array('class' => 'btn btn-success')); echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;' ?>
 <?= anchor ("Login/Registro", "Registraté");   ?>
  
 <?= form_close(); ?>
 <?php
 	if ($this->session->flashdata('error') != '') {
 		echo '<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>';
 		$this->session->set_flashdata('error', '');
 	}
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>