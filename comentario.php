<html>
<meta charset="utf-8">
<head>
<link rel="stylesheet" type="text/css"  href="css/comentario.css">
<title> Comentario </title> 
</head>
<body>
<h4>Comentarios</h4>
<p>Completa el siguiente formulario: </p>
<form action="guarda_comentario.php" method="post">
    <div>
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" />
    </div>
    <div>
        <label for="correo">Correo: </label>
        <input type="email" name="correo" />
    </div>
    <div>
	<p>Comenta aqui: </p>
	<textarea rows="4" cols="50" name="comment" form="usrform">Comenta aqui...</textarea>
    </div>
    <div>
	<br>
	<input type="submit" value="Enviar" />
    </div>
<br/>
</form>
<a href="https://www.unam.mx/">Pagina Oficial UNAM </a>
<a href="http://www.fca.unam.mx/">Pagina Oficial FCA</a>
<a href="http://www.zmolina.unam.mx/">Inicio</a>
<a href="http://php.net/manual/es/">Creditos</a><br/>
</body>
</html>
