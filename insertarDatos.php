<?php

    // Requerimos la clase con los datos de la conexión
    require_once 'conectar.php';
        
    // Creamos una instancia de la clase
    $datos = new acceso();
    
    // Recibimos los datos ingresados a los campos
    $nombre = filter_input(INPUT_POST, 'nombre');
    $telefono = filter_input(INPUT_POST, 'telefono');
    $correo = filter_input(INPUT_POST, 'correo');
    $direccion = filter_input(INPUT_POST, 'direccion');
    $solicitud = filter_input(INPUT_POST, 'solicitud');
    $comentario = filter_input(INPUT_POST, 'comentario');                 
    
    // Creamos la consulta para insertar datos. Tabla en phpMyAdmin
    $consulta = "INSERT INTO comentarios(Nombre, Telefono, Correo, Direccion, Solicitud, Comentario) VALUES (:nombre, :telefono, :correo, :direccion, :solicitud, :comentario)";
    
    // Creamos la consulta para insertar datos. Tabla en MySql
//    $consulta = "INSERT INTO usuarios(Nombre, Telefono, Correo, Direccion, Solicitud, Comentario) VALUES (:nombre, :telefono, :correo, :direccion, :solicitud, :comentario)";
                                  
    $parametros = array(':nombre' => $nombre, ':telefono' => $telefono, ':correo' => $correo, ':direccion' => $direccion, ':solicitud' => $solicitud, ':comentario' => $comentario);
        
    try {
        
        // La variable almacena el resultado de la ejecución de la consulta
        $resultado = $datos->ejecutarConsulta($consulta, $parametros);
        
        if($resultado >= 0) {
            
//        echo '<script>'.'location.href="index.php"'. '</script>';
            
//            include 'msgConfirmacion.php';
            include 'msgConfirmacion.php';
        }
        else {
            
//        echo '<script>'.'location.href="index.php"'. '</script>';
            
//            include 'msgError.php';
            include 'msgError.php';
        }                                              
    }
    catch (Exception $e) {
        echo "Código del error: " . $e->getCode();
        echo "<br>";
        echo 'Mensaje del error: ' . $e->getMessage();
        echo '<br>';
        echo "Línea del error: " . $e->getLine();
    }
