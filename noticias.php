<!DOCTYPE html>

<!-- Página donde se muestran las últimas noticias del acontecer cristiano -->

<html lang="es">
    <head>
        <title>Noticias</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        <link href="estilos/noticias.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body>
        
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
                                <a href="actividades.php" class="nav-link text-body text-decoration-none"><i class="fa-regular fa-calendar-check mr-2"></i>Actividades</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">        
                                <a href="contacto_1.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-envelope-open-text mr-2"></i>Contacto</a>
<!--                                <a href="contacto_2.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-envelope-open-text mr-2"></i>Contacto</a>-->
                            </li>                                                
                            <li class="nav-item mx-5" role="presentation">
                                <a href="index.php" class="nav-link text-body text-decoration-none"><i class="bi bi-arrow-right-square mr-2"></i>Salir</a>
                            </li>
                        </ul>                                         
                    </nav>
                </div>             
            </div>
        </header>
        
        <!-- Sección principaql -->
        <main>
            <div class="imgFondoAzul pt-4">
                <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                    <div class="row m-2">
                        <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="fa-solid fa-newspaper mr-2" style="color: #003958;"></i>Noticias</h2>
                    </div>                    
                    <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                    <div class="row my-5 align-items-center">
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                            <i class="icono fa-solid fa-book-bible"></i>
                        </div>
                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 px-0">
                            <h3 class="mb-0 text-center">Entérese de lo más actual en informaciones del acontecer cristiano nacional y mundial</h3>                            
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center">
                            <i class="icono fa-solid fa-book-bible"></i>
                        </div>
                    </div>
                          
                    <div class="row justify-content-around">
                        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6">
                            <div class="card p-3 bg-light my-3 mx-auto">
                                <img src="imagenes/predicar.jpg" class="card-img-top" alt="imagen de una noticia">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus</h5>
                                    <p class="mb-1 card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam vulputate, elit vitae ornare eleifend, leo eros elementum eros, vel cursus tortor lorem eget odio. Pellentesque sollicitudin diam id lacinia pharetra. Donec blandit magna arcu, at luctus purus cursus vitae. Integer interdum viverra laoreet. Praesent sit amet auctor velit. Fusce eleifend libero id rutrum aliquam. Vivamus vulputate ante lectus, a tincidunt dui gravida eu. Phasellus in arcu turpis. Cras eu sem scelerisque, vestibulum purus eu, semper massa. Nullam lacus lectus, faucibus at iaculis non, laoreet sit amet elit.</p>
                                    <div class="collapse" id="collapsebutton1">
                                        <div>                                                                                                    
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam bibendum turpis ut laoreet porttitor. Praesent ac molestie eros, vel malesuada quam. Mauris quis lectus ac lorem interdum semper eget placerat odio. Vivamus a pulvinar eros. Praesent finibus enim nec ligula consectetur aliquet. Phasellus justo mauris, dictum quis felis iaculis, ullamcorper luctus enim. Etiam ac nulla sit amet quam vehicula ullamcorper. Suspendisse venenatis libero a ullamcorper sagittis. Duis molestie mi et sapien posuere, in scelerisque neque laoreet. Etiam fringilla elit sapien, id aliquam arcu suscipit et. Sed felis ante, congue ut nibh quis, iaculis pretium sapien. Fusce lobortis sed lectus vitae varius. Quisque nibh erat, varius eu augue ut, congue iaculis quam. Ut ac metus dapibus, ultrices neque sit amet, mollis neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vel porta orci.</p>                                
                                            <p class="mb-1 card-text">Pellentesque vitae pellentesque lorem, in maximus nunc. Donec in vulputate libero, nec convallis purus. Fusce quis gravida tellus. Sed pretium diam imperdiet velit sollicitudin, quis pellentesque nunc venenatis. Nullam at aliquam tellus. Mauris tincidunt efficitur lorem, maximus eleifend ipsum interdum eget. Ut ultricies, mi id ullamcorper aliquet, felis massa tristique tortor, at aliquam diam neque eu justo. Aenean congue enim in dui porttitor accumsan. Cras eu ex in ligula posuere gravida at ac neque. Aenean sollicitudin elit felis, quis placerat nisi euismod ut. Proin suscipit vel felis nec volutpat. Proin ut nulla sit amet massa dapibus pellentesque id eu dolor. Etiam eu dignissim est, a lacinia turpis.</p>
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam luctus sollicitudin odio, quis sollicitudin magna malesuada varius. In consequat egestas tellus. In sed elementum odio. Maecenas non tortor sapien. Integer finibus tempor quam, et vulputate tellus accumsan non. Etiam justo justo, rutrum in dolor ut, tincidunt feugiat nunc. Praesent eget facilisis felis. Sed vitae nunc ex. Aliquam sodales condimentum elit eu pharetra. Vivamus et magna ut massa fringilla aliquam. Quisque scelerisque, neque vel dignissim pretium, turpis dolor mattis lacus, tincidunt rhoncus tortor augue eu orci. Integer rhoncus felis a semper pretium. Quisque lacus sem, mollis sit amet dapibus in, pretium porta est. Nam egestas eu nibh ac tempus.</p>
                                            <p class="mb-1"><small><strong>Fuente:</strong> Lorem ipsum dolor</small></p>
                                            <p class="mb-1"><small><strong>Sitio web:</strong> https://www.consecteturadipiscing.com</small></p>
                                        </div>
                                    </div> 
                                    <a href="#collapsebutton1" class="btnTexto btn btn-primary mt-3" data-toggle="collapse">Mostrar información</a>
                                </div>
                            </div>
                        </div>
                                                                        
                        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6">
                            <div class="card p-3 bg-light my-3 mx-auto">
                                <img src="imagenes/lectura.jpg" class="card-img-top" alt="imagen de una noticia">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus</h5>
                                    <p class="mb-1 card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam vulputate, elit vitae ornare eleifend, leo eros elementum eros, vel cursus tortor lorem eget odio. Pellentesque sollicitudin diam id lacinia pharetra. Donec blandit magna arcu, at luctus purus cursus vitae. Integer interdum viverra laoreet. Praesent sit amet auctor velit. Fusce eleifend libero id rutrum aliquam. Vivamus vulputate ante lectus, a tincidunt dui gravida eu. Phasellus in arcu turpis. Cras eu sem scelerisque, vestibulum purus eu, semper massa. Nullam lacus lectus, faucibus at iaculis non, laoreet sit amet elit.</p>
                                    <div class="collapse" id="collapsebutton2">
                                        <div>                                                                                                    
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam bibendum turpis ut laoreet porttitor. Praesent ac molestie eros, vel malesuada quam. Mauris quis lectus ac lorem interdum semper eget placerat odio. Vivamus a pulvinar eros. Praesent finibus enim nec ligula consectetur aliquet. Phasellus justo mauris, dictum quis felis iaculis, ullamcorper luctus enim. Etiam ac nulla sit amet quam vehicula ullamcorper. Suspendisse venenatis libero a ullamcorper sagittis. Duis molestie mi et sapien posuere, in scelerisque neque laoreet. Etiam fringilla elit sapien, id aliquam arcu suscipit et. Sed felis ante, congue ut nibh quis, iaculis pretium sapien. Fusce lobortis sed lectus vitae varius. Quisque nibh erat, varius eu augue ut, congue iaculis quam. Ut ac metus dapibus, ultrices neque sit amet, mollis neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vel porta orci.</p>                                
                                            <p class="mb-1 card-text">Pellentesque vitae pellentesque lorem, in maximus nunc. Donec in vulputate libero, nec convallis purus. Fusce quis gravida tellus. Sed pretium diam imperdiet velit sollicitudin, quis pellentesque nunc venenatis. Nullam at aliquam tellus. Mauris tincidunt efficitur lorem, maximus eleifend ipsum interdum eget. Ut ultricies, mi id ullamcorper aliquet, felis massa tristique tortor, at aliquam diam neque eu justo. Aenean congue enim in dui porttitor accumsan. Cras eu ex in ligula posuere gravida at ac neque. Aenean sollicitudin elit felis, quis placerat nisi euismod ut. Proin suscipit vel felis nec volutpat. Proin ut nulla sit amet massa dapibus pellentesque id eu dolor. Etiam eu dignissim est, a lacinia turpis.</p>
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam luctus sollicitudin odio, quis sollicitudin magna malesuada varius. In consequat egestas tellus. In sed elementum odio. Maecenas non tortor sapien. Integer finibus tempor quam, et vulputate tellus accumsan non. Etiam justo justo, rutrum in dolor ut, tincidunt feugiat nunc. Praesent eget facilisis felis. Sed vitae nunc ex. Aliquam sodales condimentum elit eu pharetra. Vivamus et magna ut massa fringilla aliquam. Quisque scelerisque, neque vel dignissim pretium, turpis dolor mattis lacus, tincidunt rhoncus tortor augue eu orci. Integer rhoncus felis a semper pretium. Quisque lacus sem, mollis sit amet dapibus in, pretium porta est. Nam egestas eu nibh ac tempus.</p>
                                            <p class="mb-1"><small><strong>Fuente:</strong> Lorem ipsum dolor</small></p>
                                            <p class="mb-1"><small><strong>Sitio web:</strong> https://www.consecteturadipiscing.com</small></p>
                                        </div>
                                    </div> 
                                    <a href="#collapsebutton2" class="btnTexto btn btn-primary mt-3" data-toggle="collapse">Mostrar información</a>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    
                    <div class="row justify-content-around">
                        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6">
                            <div class="card p-3 bg-light my-3 mx-auto">
                                <img src="imagenes/predicar.jpg" class="card-img-top" alt="imagen de una noticia">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus</h5>
                                    <p class="mb-1 card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam vulputate, elit vitae ornare eleifend, leo eros elementum eros, vel cursus tortor lorem eget odio. Pellentesque sollicitudin diam id lacinia pharetra. Donec blandit magna arcu, at luctus purus cursus vitae. Integer interdum viverra laoreet. Praesent sit amet auctor velit. Fusce eleifend libero id rutrum aliquam. Vivamus vulputate ante lectus, a tincidunt dui gravida eu. Phasellus in arcu turpis. Cras eu sem scelerisque, vestibulum purus eu, semper massa. Nullam lacus lectus, faucibus at iaculis non, laoreet sit amet elit.</p>
                                    <div class="collapse" id="collapsebutton3">
                                        <div>                                                                                                    
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam bibendum turpis ut laoreet porttitor. Praesent ac molestie eros, vel malesuada quam. Mauris quis lectus ac lorem interdum semper eget placerat odio. Vivamus a pulvinar eros. Praesent finibus enim nec ligula consectetur aliquet. Phasellus justo mauris, dictum quis felis iaculis, ullamcorper luctus enim. Etiam ac nulla sit amet quam vehicula ullamcorper. Suspendisse venenatis libero a ullamcorper sagittis. Duis molestie mi et sapien posuere, in scelerisque neque laoreet. Etiam fringilla elit sapien, id aliquam arcu suscipit et. Sed felis ante, congue ut nibh quis, iaculis pretium sapien. Fusce lobortis sed lectus vitae varius. Quisque nibh erat, varius eu augue ut, congue iaculis quam. Ut ac metus dapibus, ultrices neque sit amet, mollis neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vel porta orci.</p>                                
                                            <p class="mb-1 card-text">Pellentesque vitae pellentesque lorem, in maximus nunc. Donec in vulputate libero, nec convallis purus. Fusce quis gravida tellus. Sed pretium diam imperdiet velit sollicitudin, quis pellentesque nunc venenatis. Nullam at aliquam tellus. Mauris tincidunt efficitur lorem, maximus eleifend ipsum interdum eget. Ut ultricies, mi id ullamcorper aliquet, felis massa tristique tortor, at aliquam diam neque eu justo. Aenean congue enim in dui porttitor accumsan. Cras eu ex in ligula posuere gravida at ac neque. Aenean sollicitudin elit felis, quis placerat nisi euismod ut. Proin suscipit vel felis nec volutpat. Proin ut nulla sit amet massa dapibus pellentesque id eu dolor. Etiam eu dignissim est, a lacinia turpis.</p>
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam luctus sollicitudin odio, quis sollicitudin magna malesuada varius. In consequat egestas tellus. In sed elementum odio. Maecenas non tortor sapien. Integer finibus tempor quam, et vulputate tellus accumsan non. Etiam justo justo, rutrum in dolor ut, tincidunt feugiat nunc. Praesent eget facilisis felis. Sed vitae nunc ex. Aliquam sodales condimentum elit eu pharetra. Vivamus et magna ut massa fringilla aliquam. Quisque scelerisque, neque vel dignissim pretium, turpis dolor mattis lacus, tincidunt rhoncus tortor augue eu orci. Integer rhoncus felis a semper pretium. Quisque lacus sem, mollis sit amet dapibus in, pretium porta est. Nam egestas eu nibh ac tempus.</p>
                                            <p class="mb-1"><small><strong>Fuente:</strong> Lorem ipsum dolor</small></p>
                                            <p class="mb-1"><small><strong>Sitio web:</strong> https://www.consecteturadipiscing.com</small></p>
                                        </div>
                                    </div> 
                                    <a href="#collapsebutton3" class="btnTexto btn btn-primary mt-3" data-toggle="collapse">Mostrar información</a>
                                </div>
                            </div>
                        </div>
                                                                        
                        <div class="col-12 col-sm-10 col-md-10 col-lg-6 col-xl-6">
                            <div class="card p-3 bg-light my-3 mx-auto">
                                <img src="imagenes/lectura.jpg" class="card-img-top" alt="imagen de una noticia">
                                <div class="card-body px-0 pb-0">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer luctus</h5>
                                    <p class="mb-1 card-text">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam vulputate, elit vitae ornare eleifend, leo eros elementum eros, vel cursus tortor lorem eget odio. Pellentesque sollicitudin diam id lacinia pharetra. Donec blandit magna arcu, at luctus purus cursus vitae. Integer interdum viverra laoreet. Praesent sit amet auctor velit. Fusce eleifend libero id rutrum aliquam. Vivamus vulputate ante lectus, a tincidunt dui gravida eu. Phasellus in arcu turpis. Cras eu sem scelerisque, vestibulum purus eu, semper massa. Nullam lacus lectus, faucibus at iaculis non, laoreet sit amet elit.</p>
                                    <div class="collapse" id="collapsebutton4">
                                        <div>                                                                                                    
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam bibendum turpis ut laoreet porttitor. Praesent ac molestie eros, vel malesuada quam. Mauris quis lectus ac lorem interdum semper eget placerat odio. Vivamus a pulvinar eros. Praesent finibus enim nec ligula consectetur aliquet. Phasellus justo mauris, dictum quis felis iaculis, ullamcorper luctus enim. Etiam ac nulla sit amet quam vehicula ullamcorper. Suspendisse venenatis libero a ullamcorper sagittis. Duis molestie mi et sapien posuere, in scelerisque neque laoreet. Etiam fringilla elit sapien, id aliquam arcu suscipit et. Sed felis ante, congue ut nibh quis, iaculis pretium sapien. Fusce lobortis sed lectus vitae varius. Quisque nibh erat, varius eu augue ut, congue iaculis quam. Ut ac metus dapibus, ultrices neque sit amet, mollis neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vel porta orci.</p>                                
                                            <p class="mb-1 card-text">Pellentesque vitae pellentesque lorem, in maximus nunc. Donec in vulputate libero, nec convallis purus. Fusce quis gravida tellus. Sed pretium diam imperdiet velit sollicitudin, quis pellentesque nunc venenatis. Nullam at aliquam tellus. Mauris tincidunt efficitur lorem, maximus eleifend ipsum interdum eget. Ut ultricies, mi id ullamcorper aliquet, felis massa tristique tortor, at aliquam diam neque eu justo. Aenean congue enim in dui porttitor accumsan. Cras eu ex in ligula posuere gravida at ac neque. Aenean sollicitudin elit felis, quis placerat nisi euismod ut. Proin suscipit vel felis nec volutpat. Proin ut nulla sit amet massa dapibus pellentesque id eu dolor. Etiam eu dignissim est, a lacinia turpis.</p>
                                            <h6 class="my-2 text-uppercase"><strong>Lacus modem elementum</strong></h6>
                                            <p class="mb-1 card-text">Nullam luctus sollicitudin odio, quis sollicitudin magna malesuada varius. In consequat egestas tellus. In sed elementum odio. Maecenas non tortor sapien. Integer finibus tempor quam, et vulputate tellus accumsan non. Etiam justo justo, rutrum in dolor ut, tincidunt feugiat nunc. Praesent eget facilisis felis. Sed vitae nunc ex. Aliquam sodales condimentum elit eu pharetra. Vivamus et magna ut massa fringilla aliquam. Quisque scelerisque, neque vel dignissim pretium, turpis dolor mattis lacus, tincidunt rhoncus tortor augue eu orci. Integer rhoncus felis a semper pretium. Quisque lacus sem, mollis sit amet dapibus in, pretium porta est. Nam egestas eu nibh ac tempus.</p>
                                            <p class="mb-1"><small><strong>Fuente:</strong> Lorem ipsum dolor</small></p>
                                            <p class="mb-1"><small><strong>Sitio web:</strong> https://www.consecteturadipiscing.com</small></p>
                                        </div>
                                    </div> 
                                    <a href="#collapsebutton4" class="btnTexto btn btn-primary mt-3" data-toggle="collapse">Mostrar información</a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </main>
                                        
        <!-- Archivos de Javascript de Bootstrap  -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
        <!-- Enlace y método JavaScript para utilizar las animaciones -->
        <script src="js/btnNoticias.js" type="text/javascript"></script>
                                                                        
        <?php
        // put your code here
        ?>
    </body>
</html>
