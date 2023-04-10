<?php
if(isset($_POST)){
	
	// Conexión a la base de datos
	require_once 'includes/conexion.php';

	// Recorger los valores del formulario de Actualizacion
	$nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
	$apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
	$email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
	
	// Array de errores
	$errores = array();
	
	// Validar los datos antes de guardarlos en la base de datos
	// Validar campo nombre
	if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
		$nombre_validado = true;
	}else{
		$nombre_validado = false;
		$errores['nombre'] = "El nombre no es válido";
	}
	
	// Validar apellidos
	if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
		$apellidos_validado = true;
	}else{
		$apellidos_validado = false;
		$errores['apellidos'] = "Los apellidos no son válido";
	}
	
	// Validar el email
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_validado = true;
	}else{
		$email_validado = false;
		$errores['email'] = "El email no es válido";
	}
	
	
	$guardar_usuario = false;
	
	if(count($errores) == 0){
		$guardar_usuario = true;
		
		
		// Actualizar el usuario
        $usuario = $_SESSION['usuario'];
		$sql = "UPDATE usuarios SET ". 
        "nombre = '$nombre', ". 
        "apellidos = '$apellidos', ". 
        "email =  '$email' ". 
        "WHERE id = ".$usuario['id'];
		$guardar = mysqli_query($db, $sql);
				
		if($guardar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos']= $apellidos;
            $_SESSION['usuario']['email'] = $email;

			$_SESSION['completado'] = "Tus datos se han actualizado con exito";
		}else{
			$_SESSION['errores']['general'] = "Fallo al Actualizar tus datos";
		}
		
	}else{
		$_SESSION['errores'] = $errores;
	}
}

header('Location: mis-datos.php');




$numero = 10;

if($numero <=10){
	echo "es  menor  que dies";
}else{
	echo "es mayor a dies";
}

