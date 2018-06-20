<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral Alta Patagonia | Galería</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="loading">
    <div class="backdrop">&nbsp;</div>

    <?php include "./header.php"; ?>

    <?php include "./nav.php"; ?>

    <section class="banner" style="background-image: url('images/galeria-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="wow animated fadeInDown"><span class="u-weight-reg">Mirá</span> qué lindo es</h1>
                    <hr class="banner__divider">
                    <p class="text-icon paragraph--small u-color-white wow animated fadeInDown" data-wow-delay=".5s"><img src="images/i-ubicacion.svg" alt="Ubicación" class="text-icon__img">Cerro Catedral - Punta Princesa • Patagonia Argentina</p>
                    <img src="images/i-arrow.png" alt="Arrow" class="banner__arrow" data-scroll-to="galeria">
                </div>
            </div>
        </div>
    </section>

    <main data-scroll-target="galeria" class="galeria">
        <nav class="navigation u-margin-bottom-big scroll-stick galeria__nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navigation__content">
                            <h4 class="navigation__item u-color-white u-weight-reg" data-scroll-to="fotos">Fotos</h4>
                            <h4 class="navigation__item u-color-white u-weight-reg" data-scroll-to="videos">Videos</h4>
                            <h4 class="navigation__item u-color-white u-weight-reg" data-scroll-to="webcams">Webcams</h4>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="container-fluid u-margin-bottom-big" data-scroll-target="fotos">
            <div class="row u-margin-bottom-med-3">
                <div class="col-xs-12">
                    <h3 class="u-color-primary u-weight-med"><span class="text-gradient">Nuestra galería de fotos.<br>No te preocupes, la vamos renovando periódicamente.</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 galeria__grid">
                    <img src="images/gallery-1.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-2.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-3.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-4.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-5.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-6.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-7.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                    <img src="images/gallery-8.jpg" alt="Imagen" class="galeria__grid-item col-xs-12 col-sm-4">
                </div>
            </div>
        </section>
        <div class="container-fluid" data-scroll-target="videos">
            <div class="row u-margin-bottom-med-3">
                <div class="col-xs-12">
                    <h3 class="u-color-primary u-weight-med"><span class="text-gradient">Ahora nuestros videos.<br>Un poco de todo lo que Catedral tiene para ofrecerte.</span></h3>
                </div>
            </div>
        </div>
        <section class="container-fluid--full-wrapper u-margin-bottom-big">
            <div class="row">
                <div class="col-xs-12">
                    <div class="galeria__videos">
                        <div class="galeria__videos-item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/kV9M2sFDalg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                            </div>
                        </div>
                        <div class="galeria__videos-item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/kV9M2sFDalg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                            </div>
                        </div>
                        <div class="galeria__videos-item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/kV9M2sFDalg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="embed-responsive-item"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" data-scroll-target="webcams">
            <div class="row u-margin-bottom-med-3">
                <div class="col-xs-12">
                    <h3 class="u-color-primary u-weight-med"><span class="text-gradient">Nuestras webcams:<br>En tiempo real - se actualizan cada 2 minutos</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown" data-wow-delay=".25s">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown" data-wow-delay=".5s">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown" data-wow-delay=".75s">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown" data-wow-delay=".25s">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 u-margin-bottom-big">
                    <a href="#" class="galeria__webcam u-align-inline-center">
                        <img src="images/webcam.jpg" alt="Webcam" class="galeria__webcam-img u-width-full u-margin-bottom-small wow animated fadeInDown" data-wow-delay=".5s">
                        <p class="paragraph--big u-color-primary u-weight-med">Web Cam: Telesilla Lynch</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include "./footer.php"; ?>

    <?php include "./subfooter.php"; ?>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="js/vendors/jquery-scrolltofixed-min.js"></script>
    <script src="js/app-dist.js"></script>

</body>

</html>