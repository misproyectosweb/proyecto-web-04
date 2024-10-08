<!DOCTYPE html>

<!-- Página donde se muestra las actividades mensuales y corto, mediano y largo plazo de la iglesia -->

<html lang="es">
    <head>
        <title>Actividades</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        <link href="estilos/actividades.css" rel="stylesheet" type="text/css"/>
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
                                <a href="noticias.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-newspaper mr-2"></i>Noticias</a>
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

        <!-- Sección principal -->
        <main>
            <div class="imgFondoAzul pt-4">
                <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                    <div class="row m-2">
                        <h2 class="mb-0 pt-4 font-weight-bold" style="color: #003f6f"><i class="fa-regular fa-calendar-check mr-2" style="color: #003958;"></i>Actividades</h2>                        
                    </div>
                    <hr>
                    <div class="row">
                        <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">Cultos dominicales:</h3>
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">1</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">7</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">14</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">21</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">28</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>                            
                        </div>
<!--                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia"></div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>    -->
                    </div>
                    <hr>
                    <div class="row">
                        <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">Reuniones de oración:</h3>
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">1</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">7</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">14</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">21</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>                                        
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">28</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
<!--                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia"></div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-pray"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>-->
                    </div>                    
                    <hr>
                    <div class="row">
                        <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">Estudios bíblicos:</h3>
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">1</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">7</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>                                                
                    </div>                    
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">14</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">21</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>                                                
                    </div>                                                                               
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">28</div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
<!--                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia"></div>
                                    <div class="mes" id="mes"></div>
                                </div>
                                <div class="col-2 px-0 text-center">
                                    <i class="fas fa-bible"></i>
                                </div>
                                <div class="col-8 px-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>                                                -->
                    </div>
                    <hr>
                    <div class="row">
                        <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">Otras actividades:</h3>
                    </div>
                    <div class="row">                        
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">                            
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">15</div>
                                    <div class="mes">Mayo</div>
                                </div>
                                <div class="col-10 pr-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="my-3 border border-dark-50"></div>
                            <div class="d-flex flex-row align-items-center">
                                <div class="col-2 px-0 d-flex flex-column text-center">
                                    <div class="dia">23</div>
                                    <div class="mes">Junio</div>
                                </div>
                                <div class="col-10 pr-0">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row">                                                    
                            <div class="my-3 ml-3 mr-2">
                                <img src="imagenes/imgActividad_1.jpg" class="img-fluid img-thumbnail mx-auto d-block" data-toggle="modal" data-target="#actividad_1" style="background-color: #b59a47" alt=""/>
                            </div>
                            <div class="my-3 ml-2 mr-3">
                                <img src="imagenes/imgActividad_2.jpg" class="img-fluid img-thumbnail mx-auto d-block" data-toggle="modal" data-target="#actividad_2" style="background-color: #b59a47" alt=""/>
                            </div>
                        </div>
                                                
                        <div class="modal fade" id="actividad_1" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header align-items-center"> 
                                        <div>
                                            <img src="imagenes/LogoIglesiaColor.png" class="img-fluid" width="150" alt=""/>
                                        </div>                                        
                                        <div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="bi bi-x-lg font-weight-bold"></i></span>
                                            </button>
                                        </div>                                        
                                    </div>
                                    <div class="modal-body">
                                        <img src="imagenes/imgActividad_1.jpg" class="img-fluid w-100" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="modal fade" id="actividad_2" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header align-items-center"> 
                                        <div>
                                            <img src="imagenes/LogoIglesiaColor.png" class="img-fluid" width="150" alt=""/>
                                        </div>                                        
                                        <div>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="bi bi-x-lg font-weight-bold"></i></span>
                                            </button>
                                        </div>                                        
                                    </div>
                                    <div class="modal-body">
                                        <img src="imagenes/imgActividad_2.jpg" class="img-fluid w-100" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </main>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>        
        <script src="js/calendario.js" type="text/javascript"></script>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
