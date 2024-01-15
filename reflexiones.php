<!DOCTYPE html>

<!-- Página donde se muestra reflexiones basadas en la biblia disponibles para los usuarios del sitio web -->

<html lang="es">
    <head>
        <title>Reflexiones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/iconoIglesia_1.png"/>
        <link href="estilos/reflexiones.css" rel="stylesheet" type="text/css"/>
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
                                <a href="noticias.php" class="nav-link text-body text-decoration-none"><i class="fa-regular fa-calendar-check mr-2"></i>Noticias</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
                                <a href="actividades.php" class="nav-link text-body text-decoration-none"><i class="fa-regular fa-calendar-check mr-2"></i>Actividades</a>
                            </li>
                            <li class="nav-item mx-5" role="presentation">
        <!--                        <a href="contacto_1.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-envelope-open-text mr-2"></i>Contacto</a>-->
                                <a href="contacto_2.php" class="nav-link text-body text-decoration-none"><i class="fa-solid fa-envelope-open-text mr-2"></i>Contacto</a>
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
                <div class="container bg-white rounded-lg" style="border: 0.25em solid #b59a47">
                    <div class="row flex-column m-2">
                        <h2 class="mb-0 pt-4 font-weight-bold" style="color: #003f6f"><i class="fa-solid fa-book-bible mr-2" style="color: #003958;"></i>Reflexiones:</h2>
                        <h3 class="mb-0 pt-2 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>                        
                    </div>
                    
                    <div class="my-3" style="border: 0.125em solid #b59a47"></div>
                        <img src="imagenes/imgSermon.jpg" class="img-fluid img-thumbnail p-2 bg-secondary mx-auto d-block my-4" alt=""/>
                    <div class="row">
                        
                    </div>
                                        
                    <div class="row m-2 d-flex flex-column">                                                
                        <div class="d-flex flex-colum">                            
                            <div class="px-2 texto">
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, <strong>sollicitudin quis lacus vel, imperdiet ornare neque.</strong> Aenean est justo, efficitur non erat et, faucibus cursus nibh. <em><strong>Class aptent taciti sociosqu ad litora torquent per conubia nostra,</strong></em> per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                <blockquote class="blockquote text-center px-5 mx-5 pt-2">
                                    <p class="mb-0 font-weight-bold">Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor</p>
                                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                </blockquote>   
                                
                                <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis. Vivamus luctus metus vel porta tincidunt. Maecenas molestie, felis rutrum commodo convallis, neque dui mollis felis, scelerisque ornare ipsum lectus nec risus.</p>
                                <p class="mb-1 font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis:</p>
                                <ul class="lista my-2">
                                    <li>Etiam commodo, mauris at pulvinar sollicitudin</li>
                                    <li>Ligula magna rutrum ante, eu commodo nibh risus ut elit</li>
                                    <li>Praesent ac ex consequat, imperdiet orci id, imperdiet justo</li>
                                </ul>
                                <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                <div class="textoGrande">
                                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel..."</p>
                                </div>
                                <p class="mb-1">Aenean ex turpis, laoreet ut leo quis, luctus dictum massa. Quisque a velit consequat, venenatis ipsum non, dictum eros. Curabitur eu ultrices quam. Vestibulum eu tortor vestibulum, aliquam odio a, laoreet sapien. Vestibulum egestas vulputate nisl, non rutrum tellus tempus a. Cras quis nulla sit amet elit posuere pulvinar. Nullam vehicula tortor ac congue blandit. Mauris et risus urna. Sed hendrerit id risus eu condimentum. Donec tempus iaculis nisi, sed porttitor justo luctus ut. Nulla dignissim leo id justo venenatis facilisis. Vivamus luctus metus vel porta tincidunt. Maecenas molestie, felis rutrum commodo convallis, neque dui mollis felis, scelerisque ornare ipsum lectus nec risus.</p>
                                <h6 class="my-3 font-weight-bold text-uppercase">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h6>
                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros lorem, sollicitudin quis lacus vel, imperdiet ornare neque. Aenean est justo, efficitur non erat et, faucibus cursus nibh. <em><strong>Class aptent taciti sociosqu ad litora torquent per conubia nostra,</strong></em> per inceptos himenaeos. Nam convallis efficitur libero, sed malesuada arcu sodales a. Morbi viverra cursus nunc, vel sodales velit tincidunt a. Vestibulum leo urna, pharetra id mattis eget, lacinia vitae neque. Quisque mollis in ante in condimentum. Mauris vehicula iaculis velit, vel sagittis sem cursus sed. Fusce ultrices felis nec nisl tempor, vel iaculis nisi sodales. Nullam eget pellentesque enim, vitae interdum nunc. Nam odio nisl, suscipit at massa at, pellentesque lobortis felis.</p>
                                <p class="mb-1">Etiam commodo, mauris at pulvinar sollicitudin, ligula magna rutrum ante, eu commodo nibh risus ut elit. Praesent mollis quam dolor, sit amet efficitur libero convallis eget. Praesent ac ex consequat, imperdiet orci id, imperdiet justo. Maecenas pharetra lacus non consectetur condimentum. Vestibulum bibendum libero iaculis dui faucibus porttitor. Aliquam in finibus orci, eget imperdiet metus. Suspendisse faucibus tortor id neque rutrum consectetur. Vestibulum non sollicitudin ligula.</p>
                                <p class="mb-1">Nulla facilisi. Nulla tempor arcu sit amet nisi dignissim ultrices. Aenean accumsan venenatis odio id ullamcorper. Quisque fringilla lobortis libero, eget fermentum lorem congue euismod. Vestibulum et imperdiet tortor. In laoreet vel risus non laoreet. Mauris sollicitudin erat erat, ullamcorper semper dolor tristique nec. Aliquam blandit porta justo at tempor. Proin consequat nisi ac odio pretium, eget varius libero facilisis. Aliquam lobortis nec urna id rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                <p class="ultimop">Vestibulum nec dolor in velit porta sollicitudin in in velit. Sed lorem eros, malesuada eu nisi at, pharetra iaculis orci. Fusce eu tempus risus. In ultricies eget turpis nec viverra. Nam dolor risus, mollis ac velit ut, interdum tempor velit. In malesuada turpis quis turpis placerat, vitae aliquam nisi pellentesque. Vivamus dapibus mollis augue porta molestie. Proin sed ante nec massa pellentesque cursus. Nulla venenatis ipsum risus, sed vulputate orci rutrum porta. Sed euismod finibus neque vitae faucibus. Sed pellentesque odio non nulla ornare, nec malesuada sapien iaculis. Suspendisse quis elementum sapien, in venenatis nisl. Nullam pulvinar tortor non nulla fringilla, porta pharetra mi congue. In sed iaculis erat. Curabitur feugiat eleifend turpis, ac euismod risus aliquam vitae.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            
            <!-- Botón para retornar al principio del documento -->
            <div class="btnContenedor">
                <div class="btnArriba">
                    <i class="bi bi-chevron-double-up"></i>
                </div>
            </div>
        </main>
                        
        <?php    

        ?>
        
        <script>                        
                window.onscroll = function(){
                    if(document.documentElement.scrollTop > 100){
                        document.querySelector('.btnContenedor').classList.add('mostrarBoton');
                    }
                    else {
                        document.querySelector('.btnContenedor').classList.remove('mostrarBoton');
                    }            
                };
                document.querySelector('.btnContenedor').addEventListener('click', () =>{
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });            
        </script>
        
        <script>
            function ResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;                                
            }

            function noResaltarOpcion(id, color) {
                document.getElementById(id).style.background = color;
            }        
        </script>
                                
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        
    </body>
</html>
