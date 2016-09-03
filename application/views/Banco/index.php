<!DOCTYPE html>
<html>
<head>
	<title>Index Banco</title>
</head>
<body>
   <?php echo heading("Todos los bancos");?>
   <ul>
   <?php 
      foreach($bancos as $i => $banco){
		  echo "<li>".$banco->nombre." ";
		  echo anchor("/banco/edit/$banco->idBanco","Editar");
		  echo "</li>";
	  }
	  
    ?>
	</ul>
</body>
</html>