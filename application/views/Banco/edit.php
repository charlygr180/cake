<!DOCTYPE html>
<html>
<head> 
	<title>Actualizar Banco</title>
</head>
<body>
   <form method="post">
   <input type="textbox" value="<?php $data["nombre"] ?>" name="nombre">
   <input type="submit" value="Actualizar">
   
   <input type="hidden" value="<?php $data["id"] ?>">
   </form>
</body>
</html>