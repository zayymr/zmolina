<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css"  href="css/registro.css">
<title> Registro de usuarios </title> 
</head>
<body>
<h2>Registro de usuarios</h2>
<p>Completa el siguiente formulario con los datos solicitados: </p>
<form action="guarda_comentario.php" method="post">
    <div>
	<label for="nombre">Numero de cuenta:</label>
	<input type="text" name="nombre" />
    </div>
    <div>
        <label for="Correo">Nombre:</label>
        <input type="email" name="correo" />
    </div>
    <div>
	<label for="Comentario">Apellido Paterno:</label>
	<input type="text" name="apaterno" />
    </div>
    <div>
	<label for="tel">Telefono:</label>
	<input type="text" name="tel" />
    </div>	
    <div>
	<input type="submit" value="Enviar" />
    </div>
</form>
</body>
</html>
