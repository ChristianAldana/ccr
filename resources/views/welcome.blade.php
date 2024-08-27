

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye el archivo CSS separado -->
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="LOGO.JPEG" alt="Logo" class="navbar-logo">
            <span class="navbar-title">COLEGIO CRISTO REY</span>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                        <li class="nav-item">
                    <a class="nav-link" href="#mission-vision-container">NOSOTROS</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#main-content-container">CARRERAS DISPONIBLES</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#faq-section">PREGUNTAS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Imagen Principal -->
    <div class="hero-image">
    <div class="hero-text">
        <h1>¡Bienvenidos a nuestro colegio!</h1>
        <p>Descubre nuestras instalaciones y programas educativos.</p>
    </div>
    <div class="hero-buttons">
    <a href="#get-started" id="scroll-btn" class="btn">Empezar</a>
    </div>
</div>


  <!-- Contenedor de Misión y Visión -->
<div id="mission-vision-container">
    <div id="mission-vision" class="mission-vision">
        <div class="mission-vision-box">
            <div class="mission-vision-header">
                <i class="fas fa-user-graduate mission-vision-icon"></i>
                <h2>Misión</h2>
            </div>
            <p>Somos una institución educativa católica integra al sistema educativo nacional,organizada gradualmente que nos permite desarrollar en forma democrática,
                dinámica y participativa el proceso de enseñanza aprendizaje bajo los nuevos paradigmas de un curriculum  del ser humano desarrollando su potencial en todas sus dimensiones,
                 de tal manera que le permita comprender y transformar tanto su propia persona como su entorno sociocultural y físico, desarrollando contenido significativo bajo una metodología
                 activa a fin de fortalecer valores que lo conduzca de manera competitiva a la convivencia pacifica, tolerante, respetuosa alcanzado el progreso desiado..</p>
        </div>

        <!-- Logo en el medio -->
        <div class="mission-vision-logo">
                    <img src="LOGO.JPEG" alt="Logo" class="logo-img">
                </div>

        <div class="mission-vision-box">
            <div class="mission-vision-header">
                <i class="fas fa-chalkboard-teacher mission-vision-icon"></i>
                <h2>Visión</h2>
            </div>
            <p>Ser una institución educativa con capacidad para formar niños, niñas y jóvenes sobre senderos firmes de bondad, 
                solidaridad y servicios, preparándolos para ser ciudadanos del cielo y profesionales de éxito que coadyuven a su propio desarrollo , al sostenimiento de su familia, 
                a la solución de manera justa y equitativa de los problemas comunitarios y nacionales por medio de técnicas de enseñanza-aprendizaje dirigidas hacia  la competitividad.</p>
        </div>
    </div>
</div>


<!-- Resto del contenido de la página aquí -->
<div class="container">
    <!-- Otros contenidos -->
</div>


    
   <!-- Contenedor Principal para el Menú Lateral y las Tarjetas -->
<div id="main-content-container" class="container mt-4 bg-light p-4">
    <div class="row">
        <!-- Menú Lateral -->
        <div class="col-md-3">
        <h3 class="mb-4">Carreras Disponibles</h3>
            <div class="list-group mb-3">
                <a href="#" class="list-group-item list-group-item-action menu-item" data-target="bachiller-content">BACHILLERATOS</a>
                <a href="#" class="list-group-item list-group-item-action menu-item" data-target="perito-content">PERITO EN ADMINISTRACION</a>
                <a href="#" class="list-group-item list-group-item-action menu-item" data-target="magisterio-content">MAGISTERIO INFANTIL INTERCULTURAL</a>
                <a href="#" class="list-group-item list-group-item-action menu-item" data-target="secretariado-content">SECRETARIADO BILINGUE</a>

                <!-- Botón Mostrar Todas -->
                <button id="showAll" class="btn btn-primary mt-2">Mostrar Todas</button>
                
            </div>
        </div>
      
        <!-- Contenido de Tarjetas -->
        <div class="col-md-9">
            <div id="bachiller-content" class="card-container">
                <div class="card mb-4">
                    <img src="CCR8.jpeg" class="card-img-top" alt="Imagen 1">
                    <div class="card-body">
                        <h5 class="card-title">Bachillerato en ciencias y letras con orientación en computación </h5>
                        <p class="card-text">Encontraras las materias asignadas correspondientes a cada año.</p>
                        <button class="btn btn-secondary" data-target="/4tocomputacion,/computacion">Ver Pensum</button>    
                        <button class="btn btn-danger mt-2 hide-pensum">Ocultar Pensum</button>

                    </div>
                </div>
            </div>
            <!-- Otros cards aquí -->
            <div id="perito-content" class="card-container" style="display:none;">
                <div class="card mb-4">
                    <img src="CCR4.jpeg" class="card-img-top" alt="Imagen 2">
                    <div class="card-body">
                        <h5 class="card-title">Perito en administracion de empresas</h5>
                        <p class="card-text">Encontraras las materias asignadas correspondientes a cada año.</p>
                        <button class="btn btn-secondary" data-target="/4toperito,/perito,/6toperito">Ver Pensum</button>
                        <button class="btn btn-danger mt-2 hide-pensum">Ocultar Pensum</button>
                    </div>
                </div>
            </div>
            <div id="magisterio-content" class="card-container" style="display:none;">
                <div class="card mb-4">
                    <img src="MEII.jpeg" class="card-img-top" alt="Imagen 3">
                    <div class="card-body">
                        <h5 class="card-title">Magisterio Infantil Intercultural</h5>
                        <p class="card-text">Encontraras las materias asignadas correspondientes a cada año.</p>
                        <button class="btn btn-secondary" data-target="/4tomagisterio,/magisterio,/6tomagisterio">Ver Pensum</button>
                        <button class="btn btn-danger mt-2 hide-pensum">Ocultar Pensum</button>
                    </div>
                </div>
            </div>
            <div id="secretariado-content" class="card-container" style="display:none;">
                <div class="card mb-4">
                    <img src="https://colegioitaliano.edu.gt/sites/default/files/secre1.jpg" class="card-img-top" alt="Imagen 4">
                    <div class="card-body">
                        <h5 class="card-title">secretariado bilingue español-ingles</h5>
                        <p class="card-text">Encontraras las materias asignadas correspondientes a cada año.</p>
                        <button class="btn btn-secondary" data-target="/4tosecretariado,/secretariado,/6tosecretariado">Ver Pensum</button>
                        <button class="btn btn-danger mt-2 hide-pensum">Ocultar Pensum</button>
                    </div>
                </div>
            </div>
            
            <!-- Contenedor para mostrar el contenido cargado dinámicamente -->
            <div id="dynamicContent"></div>
        </div>
    </div>
</div>





    <div class="container mt-4">
    <h2>70 ANIVERSARIO</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="CCR10.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Computación">
        </div>
        <div class="col-md-4">
            <img src="CCR11.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Biología">
        </div>
        <div class="col-md-4">
            <img src="CCR13.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Biología">
        </div>
        <div class="col-md-4">
            <img src="CCR4.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Biología">
        </div>
        <div class="col-md-4">
            <img src="LOGO.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Biología">
        </div>
        <div class="col-md-4">
            <img src="CCR14.jpeg" class="img-thumbnail gallery-img" alt="Laboratorio de Biología">
        </div>
      
    </div>
</div>


<!-- Modal para la vista ampliada -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Imagen Ampliada</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" id="modalImage" class="img-fluid">
            </div>
        </div>
    </div>
</div>





        <!-- FAQs Añade más preguntas según sea necesario -->
<div class="container mt-4" id="faq-section">
<div class="container mt-4">
    <h2>Preguntas Frecuentes</h2>
    <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cuál es el horario de atención?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Nuestro horario de atención es de lunes a viernes, de 8:00 AM a 4:00 PM.
                </div>
            </div>
        </div>
        <!-- Añade más preguntas según sea necesario -->
    </div>
</div>

       <!-- Sección de Redes Sociales -->
<!-- Sección de Redes Sociales -->
<div class="container mt-4 text-center">
    <h2>Síguenos en Redes Sociales</h2>
    <div class="social-icons mt-3">
        <a href="https://www.facebook.com/profile.php?id=100091315550849&mibextid=ZbWKwL" target="_blank" class="social-icon">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-icon">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.instagram.com/colegiocristoreyoficial?igsh=MXZlZXZudTF5Z2pibQ==" target="_blank" class="social-icon">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>



<!-- Botón para Volver Arriba -->
<button id="scrollTopBtn" class="btn btn-primary" style="position:fixed;bottom:20px;right:20px;display:none;">↑</button>


    <!-- Incluye Bootstrap JS y Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Incluye el archivo JavaScript separado -->
    <script src="{{ asset('scripts.js') }}"></script>
</body>
</html>
