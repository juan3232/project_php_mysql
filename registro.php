<?php

if (isset($_POST)) {

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
        //insertar usuario en la base de datos 

    }else{

    }

}
