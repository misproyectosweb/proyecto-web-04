<?php

    // Definición una serie de constantes para que no se puedan modificar, las cuales contienen
    // los datos que nos permitirán conectarnos a la base de datos que se va utilizar       
    define('SERVIDOR', 'localhost');
    
    define('DATOS', 'archivo_comentarios');     //Base de datos en phpMyAdmin
//    define('DATOS', 'comentarios');           //Base de datos en MySQL
    
    define('USUARIO', 'root');
    
    define('CLAVE', '');                        // Ingresar clave para almacenar datos en phpMyAdmin
//    define('CLAVE', '');                      // Ingresar clave para almacenar datos en MySql
    
    define('PUERTO', 3310);                     // Datos se almacenan en phpMyAdmin. 
//    define('PUERTO', 3306);                   //Datos se almacenan en MySQL
    
    define('ACENTOS', 'utf8');
