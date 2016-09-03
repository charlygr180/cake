<!DOCTYPE html>
<html>
<head>
	<title>Login - Registro de Usuario</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
 inicia sesión aquí :D
 <?= form_open("/login/registro"); ?>
 <?= form_label("Nombre: "); ?>
 <?= form_input('nombre'); echo '<br>' ?>
  <?= form_label("Apellido Paterno: "); ?>
 <?= form_input('apaterno'); echo '<br>'?>
  <?= form_label("Apellido Materno: "); ?>
 <?= form_input('amaterno'); echo '<br>'?>
  <?= form_label("Nombre de Usuario: "); ?>
 <?= form_input('username'); echo '<br>'?>
 <?= form_label("Contraseña"); ?>
 <?= form_password('pass'); echo '<br>'?>
 <?= form_label("Perfil"); ?>
 <?= form_dropdown("perfil",array('1' => 'Administrador','2' => 'Empleado')); echo '<br>'?>
 <?= form_submit("submit", "Registrarse", array('class' => 'btn btn-success')); ?>
 <?= form_close(); ?>
  <?php
 	if ($this->session->flashdata('error') != '') {
 		echo '<div class="alert alert-danger" role="alert">Error al ingresar los datos</div>';
 		$this->session->set_flashdata('error', '');
 	}
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>