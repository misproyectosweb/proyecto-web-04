<!DOCTYPE html>

<!-- Página donde se muestra y describe la estructura organizacional de la iglesia Hacienda del Rey -->

<html lang="es">
    <head>
        <title>Quienes somos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        <link href="estilos/quienessomos.css" rel="stylesheet" type="text/css"/>
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
                                <button class="nav-link active" id="pills-vision-tab" data-toggle="pill" data-target="#nuestraVision" type="button" aria-controls="pills-vision" aria-selected="true"><i class="bi bi-globe2 pr-2"></i>Nuestra visión</button>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <button class="nav-link" id="pills-mision-tab" data-toggle="pill" data-target="#nuestraMision" type="button" aria-controls="pills-mision" aria-selected="false"><i class="bi bi-flag-fill mr-2"></i>Nuestra misión</button>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <button class="nav-link" id="pills-perfil-tab" data-toggle="pill" data-target="#nuestroPerfil" type="button" aria-controls="pills-perfil" aria-selected="false"><i class="bi bi-person-lines-fill mr-2"></i>Nuestro perfil</button>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <button class="nav-link" id="pills-estrategia-tab" data-toggle="pill" data-target="#nuestraEstrategia" type="button" aria-controls="pills-estrategia" aria-selected="false"><i class="bi bi-list-check mr-2"></i>Nuestra estrategia</button>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <button class="nav-link" id="pills-vivencia-tab" data-toggle="pill" data-target="#nuestraVivenciaReino" type="button" aria-controls="pills-vivencia" aria-selected="false"><i class="bi bi-cloud-sun-fill mr-2"></i>Nuestra vivencia del reino</button>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <button class="nav-link" id="pills-valores-tab" data-toggle="pill" data-target="#nuestrosValores" type="button" aria-controls="pills-valores" aria-selected="false"><i class="bi bi-award-fill mr-2"></i>Nuestros valores</button>
                            </li>
                            <li class="nav-item mx-5 py-2 pl-3" role="presentation">
                                <a href="index.php" class="text-body text-decoration-none"><i class="bi bi-arrow-right-square mr-2"></i>Salir</a>
                            </li>
                        </ul>
                    </nav>                     
                </div>
            </div>
        </header>
                                                                                                                                                                            
        <!-- Sección principal -->
        <main>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="nuestraVision" role="tabpanel" aria-labelledby="pills-vision-tab">                                        
                    <div class="imgFondoRojo pt-4">                                                                                                
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-globe2 mr-2" style="color: #003f6f;"></i>Nuestra visión</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                                    <img src="imagenes/nuestraVision.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner de la visión"/>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>                       
                    </div>                                        
                </div>
                
                <div class="tab-pane fade" id="nuestraMision" role="tabpanel" aria-labelledby="pills-mision-tab">
                    <div class="imgFondoMagenta pt-4">
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-flag-fill mr-2" style="color: #003f6f;"></i>Nuestra misión</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                                    <img src="imagenes/nuestraMision.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner de la misión"/>                                    
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nuestroPerfil" role="tabpanel" aria-labelledby="pills-perfil-tab">
                    <div class="imgFondoMorado pt-4">
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-person-lines-fill mr-2" style="color: #003f6f;"></i>Nuestro perfil</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                                    <img src="imagenes/nuestroPerfil.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner del perfil"/>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nuestraEstrategia" role="tabpanel" aria-labelledby="pills-estrategia-tab">
                    <div class="imgFondoCafe pt-4">
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-list-check mr-2" style="color: #003f6f;"></i>Nuestra estrategia</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                                    <img src="imagenes/nuestraEstrategia.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner de la estrategia"/>                                                                        
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nuestraVivenciaReino" role="tabpanel" aria-labelledby="pills-vivencia-tab">
                    <div class="imgFondoAzul pt-4">
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-cloud-sun-fill mr-2" style="color: #003f6f;"></i>Nuestra vivencia del reino</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">
                                    <img src="imagenes/nuestraVivencia.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner de la vivencia del reino"/>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nuestrosValores" role="tabpanel" aria-labelledby="pills-valores-tab">
                    <div class="imgFondoVerdeOlivo pt-4">
                        <div class="container bg-white rounded-lg contenido" style="border: 0.125em solid #b59a47">
                            <div class="row m-2">
                                <h2 class="mb-0 pt-3 font-weight-bold" style="color: #003f6f"><i class="bi bi-award-fill mr-2" style="color: #003f6f;"></i>Nuestros valores</h2>
                                <hr style="width: 100%; border-top: 0.125em solid #b59a47">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-3">                                    
                                    <img src="imagenes/nuestrosValores.jpg" class="img-fluid rounded-lg w-50 float-left mr-3 mb-2" style="border: 2px solid #b59a47" alt="banner de los valores"/>                                    
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                    <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis.</p>
                                    <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                    <p class="mb-1">Maecenas dolor purus, condimentum sit amet tellus sed, rhoncus viverra arcu. Cras semper id sapien eget aliquet. Quisque non volutpat felis. Aenean quis varius erat. Vivamus gravida aliquet eleifend. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas quis ligula eu arcu placerat efficitur. Integer efficitur elementum maximus. Nam congue tristique elementum. Donec egestas massa nibh, eu porta velit ullamcorper eget. Nam nunc sem, convallis tincidunt lorem at, lobortis mollis neque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>