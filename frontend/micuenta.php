<html>
<head>
	<link rel="icon" href="../img/iconobirra.png" type="image/png" />
	<img src="../img/iconobirra.png" width="40" height="40" class="d-inline-block align-middle" alt="" loading="lazy" >
</head>
<link href="../css/perfilcss.css" rel="stylesheet">
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conexion = new PDO("mysql:host=$servername;dbname=recomercem", $username, $password);
		// set the PDO error mode to exception
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("set names utf8");
		return $conexion;
		
		$sql=("SELECT * FROM usuaris WHERE nomusuari='".$_SESSION['nom_usuario']."'");
		$resultado = mysqli_query($con, $sql) or die ($sql);
		if(mysqli_num_rows($resultado)>0) { 
			while($row = mysqli_fetch_array($resultado)){
				$user = $row['nom_usuario'];
				$email = $row['email'];
			}
		}
	?>

<body>
<center>
	<div>
		<img src="../img/logoperfil.png"width="400" height="300"/><br />
		<strong>Usuario:</strong> <?=$nom_usuario?><br />
		<strong>Email:</strong> <?=$mail?><br />
		<strong>Cambiar correo actual:</strong> <a href="../Frontend/cambiocorr.php">Click aqui</a><br />
		<strong>Cambiar contraseña actual:</strong> <a href="../Frontend/cambiocon.php">Click aqui</a><br />
		<a href="javascript:history.back()"><img src="../img/boton.png" height="50" width="100" alt="Botón"<a/>
	</div>
</center>
</body>
</html>