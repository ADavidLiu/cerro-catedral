<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral Alta Patagonia | Actividades</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="loading">
    <div class="backdrop">&nbsp;</div>

    <?php include "./header.php"; ?>

    <?php include "./nav.php"; ?>

    <section class="banner" style="background-image: url('images/actividades-banner.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="wow animated fadeInDown"><span class="u-weight-reg">Viví</span> la montaña</h1>
                    <hr class="banner__divider">
                    <p class="text-icon paragraph--small u-color-white wow animated fadeInDown" data-wow-delay=".5s"><img src="images/i-ubicacion.svg" alt="Ubicación" class="text-icon__img">Cerro Catedral - Punta Princesa • Patagonia Argentina</p>
                    <img src="images/i-arrow.png" alt="Arrow" class="banner__arrow" data-scroll-to="actividades">
                </div>
            </div>
        </div>
    </section>

    <main data-scroll-target="actividades" class="actividades">
        <section class="container-fluid">
            <div class="row u-margin-bottom-big">
                <div class="col-xs-12">
                    <h3 class="u-margin-bottom-med"><span class="u-weight-reg u-color-primary">Actividades</span> Mirá todo lo que podés vivir en Catedral</h3>
                    <ul class="actividades__menu">
                        <li class="actividades__menu-item" data-scroll-to="tour"><h4 class="u-color-primary u-weight-reg">Tour Catedral</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="donas-trineos-raquetas"><h4 class="u-color-primary u-weight-reg">Donas</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="donas-trineos-raquetas"><h4 class="u-color-primary u-weight-reg">Trineos</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="donas-trineos-raquetas"><h4 class="u-color-primary u-weight-reg">Raquetas</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="snow-bmx"><h4 class="u-color-primary u-weight-reg">Snow BMX</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="snow-scoot"><h4 class="u-color-primary u-weight-reg">Snow Scoot</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="esqui-nordico"><h4 class="u-color-primary u-weight-reg">Esquí nórdico</h4></li>
                        <li class="actividades__menu-item" data-scroll-to="motos"><h4 class="u-color-primary u-weight-reg">Motos de nieve</h4></li>
                    </ul>
                </div>
            </div>
            <div class="row u-display-flex-sm u-margin-bottom-huge" data-scroll-target="tour">
                <div class="col-xs-12 col-sm-6 col-sm-push-6">
                    <img src="images/tour.png" alt="Tour" class="u-width-full wow animated fadeInDown">
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-pull-6 u-padding-top-med-2">
                    <h3 class="heading-tertiary--med u-color-black u-weight-med u-margin-bottom-small">Tour Catedral</h3>
                    <div class="u-margin-bottom-small">
                        <h3 class="heading-tertiary--med u-color-black">Tour Histórico</h3>
                        <p>Un paseo por los orígenes del primer medio de elevación proyectado en el Catedral hace poco menos de un siglo. En el camino, se toman fotos de la ciudad, el Parque Nacional Nahuel Huapi, los lagos y el centro de esquí.</p>
                    </div>
                    <div class="u-margin-bottom-small">
                        <h3 class="heading-tertiary--med u-color-black">Tour Aventura</h3>
                        <p>Acceso a la cumbre de la montaña en tres tramos por telesilla Punta Princesa. Un paseo ideal para disfrutar las vistas panorámicas. Acceso a paradores gastronómicos.</p>
                    </div>
                    <div>
                        <h3 class="heading-tertiary--med u-color-black">Tour Naturaleza</h3>
                        <p>Ascenso hasta los 1600 msnm hasta la Estación Superior de Telecabina Amancay. Actividades para toda la familia, donde podrás realizar una travesía guiada con raquetas en el bosque, descenso en gomones por la nieve y deslizarte en trineo en las nuevas pistas diseñadas especialmente.</p>
                    </div>
                </div>
            </div>
            <div class="row u-margin-bottom-huge" data-scroll-target="donas-trineos-raquetas">
                <div class="col-xs-12 col-sm-4 wow animated fadeInDown u-margin-bottom-med-2 u-margin-bottom-null-sm">
                    <img src="images/donas.jpg" alt="Donas" class="u-shadow-small u-width-full u-margin-bottom-med">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Donas</h3>
                    <p>Simples, rápidos y divertidos. Gomones que se deslizan por la nieve.</p>
                </div>
                <div class="col-xs-12 col-sm-4 wow animated fadeInDown u-margin-bottom-med-2 u-margin-bottom-null-sm" data-wow-delay=".25s">
                    <img src="images/trineos.jpg" alt="Trineos" class="u-shadow-small u-width-full u-margin-bottom-med">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Trineos</h3>
                    <p>La actividad conjuga adrenalina y diversión. Una propuesta para disfrutar en grupo y bajar a toda velocidad sobre la nieve.</p>
                </div>
                <div class="col-xs-12 col-sm-4 wow animated fadeInDown u-margin-bottom-med-2" data-wow-delay=".5s">
                    <img src="images/raquetas.jpg" alt="Raquetas" class="u-shadow-small u-width-full u-margin-bottom-med">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Raquetas</h3>
                    <p>Una caminata diferente en la nieve. Catedral propone una travesía guiada con raquetas en el bosque.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid container-fluid--full">
            <div class="row featured u-margin-bottom-huge" data-scroll-target="snow-bmx">
                <div class="col-xs-12 col-sm-6 featured__img wow animated fadeInDown" style="background-image: url('images/snow-bmx.jpg');">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 featured__copy">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Snow BMX</h3>
                    <p class="u-margin-bottom-med">La actividad se realiza en un circuito especialmente diseñado, donde amigos y familias realizan competencias al estilo slalom. Las subidas y bajadas son especiales para divertirse en grupo durante la visita a la montaña. El equipo es muy fácil de usar y gracias al ancho de la tabla, es posible deslizarse sobre la nieve de manera estable y segura. La actividad se realiza con casco y los usuarios tienen una charla introductoria sobre los modos de uso y normas de seguridad.</p>
                    <p class="u-color-primary">La actividad se realiza en la base y se utiliza el medio Mágic II para el ascenso.<br>Edad mínima para realizar la actividad 12 años.<br>Horario de 13.00 a 17.00 hs.</p>
                </div>
            </div>
            <div class="row featured u-margin-bottom-huge" data-scroll-target="snow-scoot">
                <div class="col-xs-12 col-sm-6 col-sm-push-6 featured__img wow animated fadeInDown" style="background-image: url('images/snow-scoot.jpg');">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 col-sm-pull-6 featured__copy">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Snow Scoot</h3>
                    <p class="u-margin-bottom-med">Viví la experiencia de deslizarte en la nieve con bicicletas. La actividad de iniciación al snowscoot da comienzo en “La Hoyita” donde se equipa al cliente, brindándole una introducción al deporte e información sobre las medidas de seguridad en la montaña.</p>
                    <p class="u-margin-bottom-med">En dicho sector se realizara la clase de principiantes y ascenso por medio de arrastre (TK La Hoyita) en pendiente leve. En caso de que algún pasajero tenga el nivel suficiente, se le ofrecerá un descenso por “Camino 2000” hasta “Amancay Superior”. Duración 2 horas y grupos de 5 pasajeros.</p>
                    <p class="u-color-primary">Edad a partir de 12 años.<br>Horarios: 12:00 a 14:00 // 14:30 a 16:30 hs</p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row u-display-flex-sm u-margin-bottom-huge" data-scroll-target="tour">
                <div class="col-xs-12 col-sm-6">
                    <img src="images/esqui-nordico.png" alt="Esquí Nórdico" class="u-width-full wow animated fadeInDown">
                </div>
                <div class="col-xs-12 col-sm-6 u-padding-top-med-2 u-padding-top-null-sm">
                    <h3 class="heading-tertiary--med u-color-black u-weight-med u-margin-bottom-small">Esquí Nórdico</h3>
                    <p class="u-margin-bottom-med">El cerro Catedral cuenta con una pista de esquí nórdico o de fondo, una modalidad del esquí que se remonta a los primeros tiempos del uso de tablas sobre la nieve como medio de transporte, y que hoy se practica como una actividad recreativa, muy divertida, accesible para todos e ideal para realizar en grupos de todas las edades.</p>
                    <p class="u-margin-bottom-med">No se requieren mayores preparativos ni condiciones especiales para gozar de la experiencia del esquí nórdico, solamente las ganas de hacer un deporte diferente y disfrutar del paisaje y el momento en compañía de amigos o familiares.</p>
                    <p class="u-margin-bottom-small">Aquellos que conocen el esquí alpino, verán de inmediato que se trata de algo muy diferente, mucho más que la distancia que separa el snowboard de las tablas. Por empezar, mientras que en el alpino solamente se desciende, el esquí nórdico se practica en pistas de escasa pendiente, en la que se combinan subidas, bajadas y llanos.</p>
                    <p class="u-color-primary"><a href="#" class="text-icon"><img src="images/i-mas-primary.svg" alt="Más" class="text-icon__img">Más info</a></p>
                </div>
            </div>
        </section>
        <section class="container-fluid container-fluid--full">
            <div class="row featured" data-scroll-target="motos">
                <div class="col-xs-12 col-sm-6 featured__img wow animated fadeInDown" style="background-image: url('images/motos.jpg');">&nbsp;</div>
                <div class="col-xs-12 col-sm-6 featured__copy">
                    <h3 class="heading-tertiary--med u-weight-med u-color-black">Motos de nieve</h3>
                    <p class="u-margin-bottom-med">Tours diferentes para el público más intrépido. El paseo sale en diferentes momentos del día y la noche desde la Base del Catedral y llega hasta 1400 metros, donde se encuentra un sofisticado living construido debajo de una gran roca. El recorrido transita por bosques de lengas junto a guías especializa</p>
                    <p class="u-color-primary">Contacto:<br><a href="mailto:info@lacuevacatedral.com">info@lacuevacatedral.com</a><br><a href="http://www.lacuevacatedral.com/">www.lacuevacatedral.com</a><br>Tel: <a href="tel:0294 - 4460485 / 4460478 / 154335223">0294 - 4460485 / 4460478 / 154335223</a></p>
                </div>
            </div>
        </section>
    </main>

    <?php include "./footer.php"; ?>

    <?php include "./subfooter.php"; ?>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/app-dist.js"></script>

</body>

</html>