<?php
    // Se determina si una variable ha sido declarada y su valor no es NULO
    // Además determina si una variable está vacía o no
    if (isset ($_POST['nombre']) && !empty ($_POST['nombre']) && isset ($_POST['telefono']) && !empty($_POST['telefono']) &&
        isset ($_POST['correo']) && !empty($_POST['correo']) && isset ($_POST['direccion']) && !empty($_POST['direccion']) &&
        isset ($_POST['solicitud']) && !empty($_POST['solicitud']) && isset ($_POST['comentario']) && !empty($_POST['comentario']))
    {          
        // Se reciben los datos enviados desde el formulario    
        $nombre = filter_input(INPUT_POST, 'nombre');
        $telefono = filter_input(INPUT_POST, 'telefono');
        $correo = filter_input(INPUT_POST, 'correo');
        $direccion = filter_input(INPUT_POST, 'direccion');
        $solicitud = filter_input(INPUT_POST, 'solicitud');
        $comentario = filter_input(INPUT_POST, 'comentario');
        
        // Almacenamos en una variable los datos recibidos en el formulario, los cuales serán mostrados
        // como contenido en el cuerpo del mensaje de correo
        $mensajeCorreo = "Nombre: " . $nombre . "<br>Teléfono: " . $telefono . "<br>Correo: " . $correo . "<br>Dirección: " . $direccion .
                         "<br><br>Solicitud para oración:" . "<br>" . $solicitud . "<br><br>Comentario sobre nuestra página:" . "<br>" . $comentario;
        
        // Archivo que se utiliza para llamar y cargar la librería
        require 'php/PHPMailerAutoload.php';
        
        // Crea una instancia de la librería para poder utilizar sus métodos
        $mail = new PHPMailer;
        
        try {
            // Configuración del servidor
            // $mail->SMTPDebug = 3;                                        // Habilita la salida de depuración detallada - valor 0 para deshabilitar        
            $mail->isSMTP();                                                // Enviar mensajes de correo usando SMTP
            $mail->Host = 'smtp.gmail.com';                                 // Se establece y configure el servidor SMTP para enviar los mensajes
            $mail->SMTPAuth = true;                                         // Se habilita la autenticación SMTP
            $mail->Username   = 'iglesiapeticionesdeoracion@gmail.com';     // Nombre de usuario usado para el servidor SMTP
            $mail->Password   = 'knywypnxpacvsngz';                         // Contraseña utilizada para el servidor SMTP
            $mail->SMTPSecure = 'tls';                                      // Se habilita el cifrado TLS implícito, `ssl` es también aceptado
            $mail->Port = 587;                                              // Puerto TCP al cual conectarse

            // Destinatarios
            $mail->setFrom('iglesiapeticionesdeoracion@gmail.com', $nombre);                          //Dirección de correo que determina desde dónde se envía el correo o remitente
            $mail->addAddress('iglesiapeticionesdeoracion@gmail.com', 'Iglesia Hacienda del Rey');    //Dirección de correo que determinar el destinatario

            // Contenido del mensaje
            $mail->isHTML(true);                                            // Establecer el formato de correo electrónico en HTML
            $mail->Subject = 'Mensaje enviado desde nuestra página web';
            $mail->Body    = $mensajeCorreo;
            $mail->CharSet = 'UTF-8';                                       // Para evitar que se coloquen símbolos en lugar de texto con tildes en el mensaje

            $mail->send();

            echo json_encode('exito');                                      // Traduce cualquier elemento codificada en UTF-8 de PHP a un string JSON. Recibe lo
                                                                            // que deseamos convertir en notación JSON y devuelve una cadena de texto con el JSON producido                                                                 
            $mail->smtpClose();
        }
        catch (Exception $e) {
        
            echo json_encode('error');
        }  
    }