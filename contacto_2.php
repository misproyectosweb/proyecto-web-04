<!DOCTYPE html>

<!-- Página donde se muestra la información de contacto y un formulario para que los usuarios puedan comunicarse con la organización -->

<html lang="es">
    <head>
        <title>Contacto</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        
        <!-- Archivos css -->
        <link href="estilos/contacto.css" rel="stylesheet" type="text/css"/>
        <link href="librerias/sweetalert2.min.css" rel="stylesheet" type="text/css"/>     
    </head>
    <body>
        <?php
            if(isset($_POST['nombre'])) {
                $nombre = filter_input(INPUT_POST, 'nombre');
                $telefono = filter_input(INPUT_POST, 'telefono');
                $correo = filter_input(INPUT_POST, 'correo');
                $direccion = filter_input(INPUT_POST, 'direccion');
                $solicitud = filter_input(INPUT_POST, 'solicitud');
                $comentario = filter_input(INPUT_POST, 'comentario');
            }                  
        ?>
        
        <!-- Encabezado -->
        <header class="sticky-top encabezado">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <div class="p-4">
                        <a class="navbar-brand" href="index.php"><img src="imagenes/LogoIglesiaColor.png" class="img-fluid" alt="Logo de la iglesia"/></a>
                    </div>

                    <div class="btnMenu pb-3 mr-5">
                        <button class="p-0 navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="bi bi-list font-weight-bold"></i></span>
                        </button>
                    </div>

                    <nav class="menu collapse navbar-collapse border-top border-dark" id="navbarNav">
                        <ul class="nav nav-pills py-3" id="pills-tab" role="tablist">
                            <li class="nav-item mx-5" role="presentation">
                                <a href="quienessomos.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-church mr-2"></i>Quiénes somos</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <a href="reflexiones.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-book-bible mr-2"></i>Reflexiones</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <a href="noticias.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-newspaper mr-2"></i>Noticias</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">        
                                <a href="actividades.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-envelope-open-text mr-2"></i>Actividades</a>
                            </li>                                               
                            <li class="nav-item mx-5" role="presentation">
                                <a href="index.php" class="nav-link text-body text-decoration-none"><i class="bi bi-arrow-right-square mr-2"></i>Salir</a>
                            </li>
                        </ul>                                         
                    </nav>
                </div>             
            </div>
        </header>
        
        <!-- Sección principal -->
        <main>
            <div class="imgFondoAzul pt-4">
                <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                    <div class="row m-2 d-flex flex-column">
                        <h2 class="mb-0 pt-4 font-weight-bold" style="color: #003f6f"><i class="fa-solid fa-envelope-open-text mr-2" style="color: #003958;"></i>Contáctenos</h2>                        
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-12 col-lg-12 col-xl-6 col-6 mb-3">
                            <h6 class="mb-0 pb-3"><strong>Si desea hacer una consulta o solicitud de oración, escríbanos:</strong></h6>
                            <form action="insertarDatos.php" method="post" id="formulario" class="frmContacto needs-validation border border-dark-50 rounded-lg" novalidate style="background-color: #eee">
                                <div class="form-row p-2">                                     
                                    <div class="my-1 form-group col-12">
                                        <label for="nombre"><strong>Nombre completo:</strong></label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Completa el campo</div>
                                    </div>                                
                                </div>
                                <div class="form-row p-2">                                                                     
                                    <div class="mb-1 form-group col-12">
                                        <label for="telefono"><strong>Teléfono celular:</strong></label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="88889999" value="" required>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Completa el campo</div>
                                    </div>
                                </div>
                                <div class="form-row p-2">                                     
                                    <div class="mb-1 form-group col-12">
                                        <label for="correo"><strong>Correo:</strong></label>
                                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" value="" required>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Completa el campo</div>
                                    </div>                                
                                </div>
                                <div class="form-row p-2">                                                                     
                                    <div class="mb-1 form-group col-12">
                                        <label for="direccion"><strong>Lugar desde donde nos escribe:</strong></label>
                                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="" required>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Completa el campo</div>
                                    </div>
                                </div>
                                <div class="form-row p-2">
                                    <div class="mb-1 form-group col-md-12">
                                        <label for="solicitud"><strong>Describe tu solicitud:</strong></label>
                                        <textarea class="form-control" cols="30" rows="5" id="solicitud" name="solicitud" required></textarea>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Favor realice una breve descripción de lo que necesita</div>
                                    </div>
                                </div>
                                <div class="form-row p-2">
                                    <div class="form-group col-md-12">
                                        <label for="comentario"><strong>Si te ha gustado nuestra web, déjanos tus comentarios (opcional):</strong></label>
                                        <textarea class="form-control" cols="30" rows="5" id="comentario" name="comentario"></textarea>
                                        <div class="valid-feedback is-valid">¡OK, válido!</div>
                                        <div class="invalid-feedback is-invalid">Favor realice una breve descripción de lo que necesita</div>
                                    </div>
                                </div>
                                
                                <input type="submit" id="boton" class="btn btn-outline-primary mb-3 ml-2" name="enviar" value="Enviar datos">
                                
                                <?php
                                    require 'validaciones.php';
                                ?>
                            </form>
                        </div>
                        
                        <div class="col-12 col-lg-12 col-xl-6 col-6">
                            <h6 class="mb-0 pb-3"><strong>¿Dónde estamos? Si desea visitarnos utilice este mapa como su guía</strong></h6>
                            <div class="border border-dark-50 rounded-lg p-2 mx-auto d-block mb-3">                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15718.176077541753!2d-84.0484498!3d9.9718428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2scr!4v1656800937686!5m2!1ses-419!2scr" class="border-0" width="510" height="490" allowfullscreen=""></iframe>
                            </div>
                            <div class="p-3 border border-dark-50 rounded-lg" style="background-color: #eee">
                                <h6 class="mb-0 pb-3"><strong>Datos de contacto:</strong></h6>
                                <div class="d-flex flex-row mb-3">
                                    <i class="fa-brands fa-waze mr-3 mt-1"></i>
                                    <p class="mb-0">Moravia, Romeral, diagonal 53</p>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <i class="fas fa-map-marker-alt mr-3 mt-1"></i>
                                    <p class="mb-0">Moravia, del supermercado Mega Súper 200 mts al este</p>
                                </div>                                
                                <div class="d-flex flex-row mb-3">
                                    <i class="bi bi-telephone-fill mr-3 mt-1"></i>
                                    <p class="mb-0">2222-3333</p>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <i class="fas fa-mobile-alt mr-3 mt-1"></i>
                                    <p class="mb-0">8888-9999</p>
                                </div>
                                <div class="d-flex flex-row mb-3">
                                    <i class="fas fa-envelope-open-text mr-3 mt-1"></i>
                                    <p class="mb-0">Lorem_ipsum@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                        
        </main>
        
        <!-- Validaciones de campos del formulario -->
        <script>        
            // Función que permite la deshabilitación del envío de datos en formularios si hay campos inválidos
            (function() {
                'use strict';
                window.addEventListener('load', function() {

                    // Obtener todos los formularios a los que queremos aplicar estilos de validación personalizados
                    var forms = document.getElementsByClassName('needs-validation');

                    // Recorre los formularios y evita que el form se envíe de forma inmediata
                    var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                        form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();                 
        </script>
                
        <!-- Archivos JavaScript utilizados por Bootstrap -->                
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
                               
        <?php
        // put your code here
        ?>
    </body>
</html>
