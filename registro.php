<?php
   
  //inicio  de sesion
  session_start();

if (isset($_POST)) {

    //conexion a la base de datos
    require_once 'includes/conexion.php';

  

    //Recoger los formularios de registro   
    $nombre =  isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $correo = isset($_POST['email']) ? $_POST['email'] : false;
    $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : false;


    //Array de errores
    $errores = array();

    //validar los  datos    antes de mandarlos a la base de datos
    //Validar nombre
    if (!empty($nombre) && !is_numeric($nombre) &&  !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido";
    }
    //validar   apellidos
    if (!empty($apellidos) && !is_numeric($apellidos) &&  !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validado = true;
    } else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellido no es valido";
    }
    //validar correo 
    if (!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $correo_validado = true;
    } else {
        $correo_validado = false;
        $errores['email'] = "El email no es valido";
    }
    //validar contraseña
    if (!empty($contraseña)) {
        $contraseña_validado = true;
    } else {
        $contraseña_validado = false;
        $errores['contraseña'] = "La contraseña esta vacia";
    }

    $guardar_usuario = false;
    if(count($errores) == 0){
        $guardar_usuario = true;

        //cifrar la contraseña
        $contraseña_segura = password_hash($contraseña,PASSWORD_BCRYPT,['cost'=>4]);
       
        //insertar usuario en la base de datos 
        $sql = "INSERT INTO  usuarios VALUES(NULL, '$nombre', '$apellidos', '$correo', '$contraseña_segura', CURDATE())";
        $guardar  = mysqli_query($db,$sql);
        if($guardar){
                $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "fallo al guardar al   usuario";
           
        }
    }else{
            $_SESSION['errores'] = $errores;
            
    }

}

header('Location: index.php');
