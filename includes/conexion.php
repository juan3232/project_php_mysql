<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $basededatos  = 'blog_master';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);


//inisiar  sesion 

if(!isset($_SESSION)){
    session_start();
   }

