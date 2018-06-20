<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral Alta Patagonia | Tu Viaje</title>
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

    <section class="banner banner--copy" style="background-image: url('images/tu-viaje-banner.jpg');">
        <div class="container u-margin-bottom-big">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="wow animated fadeInDown">Tu <span class="u-weight-reg">viaje</span></h1>
                    <hr class="banner__divider u-margin-bottom-med">
                    <div class="banner__btns">
                        <a href="#" class="btn wow animated fadeInDown" data-wow-delay=".25s">Comprá tu pase online</a>
                        <a href="#" class="btn wow animated fadeInDown" data-wow-delay=".5s">Paquetes Turísticos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid u-margin-bottom-big-2">
            <div class="row">
                <div class="col-xs-12">
                    <div class="u-align-inline-left-sm">
                        <p class="text-icon paragraph--small u-color-white wow animated fadeInDown" data-wow-delay=".75s"><img src="images/i-ubicacion.svg" alt="Ubicación" class="text-icon__img">Cerro Catedral - Punta Princesa • Patagonia Argentina</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="tu-viaje">
        <section class="container-fluid u-margin-bottom-big-2">
            <div class="row u-margin-bottom-big-2">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="tu-viaje__tarifario">
                        <div class="tu-viaje__tarifario-header">
                            <h3 class="heading-tertiary--med"><span class="u-color-primary u-weight-reg">Tarifario de servicios</span> Temporada Invernal 2017</h3>
                        </div>
                        <div class="tu-viaje__tarifario-list">
                            <a href="#" class="tu-viaje__tarifario-item">
                                <div class="tu-viaje__tarifario-item-bg" style="background-image: url('images/tarifas-esqui.jpg');">&nbsp;</div>
                                <div class="tu-viaje__tarifario-item-copy">
                                    <h3 class="heading-tertiary--med u-color-white u-weight-bld tu-viaje__tarifario-item-title">Esquí &<br>Snowboard</h3>
                                    <img src="images/i-esqui.svg" alt="ícono de la tarifa" class="tu-viaje__tarifario-item-icon">
                                </div>
                            </a>
                            <a href="#" class="tu-viaje__tarifario-item">
                                <div class="tu-viaje__tarifario-item-bg" style="background-image: url('images/tarifas-tour.jpg');">&nbsp;</div>
                                <div class="tu-viaje__tarifario-item-copy">
                                    <h3 class="heading-tertiary--med u-color-white u-weight-bld tu-viaje__tarifario-item-title">Tour<br>Catedral</h3>
                                    <img src="images/i-tour.svg" alt="ícono de la tarifa" class="tu-viaje__tarifario-item-icon">
                                </div>
                            </a>
                            <a href="#" class="tu-viaje__tarifario-item">
                                <div class="tu-viaje__tarifario-item-bg" style="background-image: url('images/tarifas-actividades.jpg');">&nbsp;</div>
                                <div class="tu-viaje__tarifario-item-copy">
                                    <h3 class="heading-tertiary--med u-color-white u-weight-bld tu-viaje__tarifario-item-title">Actividades<br>&nbsp;</h3>
                                    <img src="images/i-actividades.svg" alt="ícono de la tarifa" class="tu-viaje__tarifario-item-icon">
                                </div>
                            </a>
                            <a href="#" class="tu-viaje__tarifario-item">
                                <div class="tu-viaje__tarifario-item-bg" style="background-image: url('images/tarifas-estacionamiento.jpg');">&nbsp;</div>
                                <div class="tu-viaje__tarifario-item-copy">
                                    <h3 class="heading-tertiary--med u-color-white u-weight-bld tu-viaje__tarifario-item-title"><span class="u-hyphens">Estacionamiento</span><br><span class="u-show-1422">&nbsp;</span></h3>
                                    <img src="images/i-estacionamiento.svg" alt="ícono de la tarifa" class="tu-viaje__tarifario-item-icon">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 u-margin-bottom-med-3 u-align-inline-center">
                    <h3><span class="u-color-primary u-weight-reg">Beneficios</span> Conocé las promociones vigentes</h3>
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 u-padding-horizontal-null tu-viaje__beneficios u-display-flex-sm">
                    <div class="col-xs-12 col-sm-6 u-margin-bottom-med u-margin-bottom-null-sm">
                        <div class="tu-viaje__beneficios-item wow animated fadeInDown">
                            <img src="images/visa.png" alt="Visa" class="tu-viaje__beneficios-item-logo">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="tu-viaje__beneficios-item wow animated fadeInDown" data-wow-delay=".25s">
                            <img src="images/bbva.png" alt="BBVA" class="tu-viaje__beneficios-item-logo">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid--full-wrapper">
            <div id="map" class="tu-viaje__map"></div>
        </section>
    </main>

    <?php include "./footer.php"; ?>

    <?php include "./subfooter.php"; ?>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/app-dist.js"></script>
    <script>
            function initMap() {
                var location = {lat: -41.136621, lng: -71.299357};
                var terminal = {lat: -41.13050, lng: -71.271873};
                var moreno = {lat: -41.134934, lng: -71.306900};
                var bustillo = {lat: -41.131554, lng: -71.325579};

                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: location,
                    disableDefaultUI: true
                });
    
                var marker = new google.maps.Marker({
                    position: terminal,
                    map: map,
                    icon: {
                        url: "images/pin.svg",
                        scaledSize: new google.maps.Size(50, 50)
                    }
                });
                
                var marker2 = new google.maps.Marker({
                    position: moreno,
                    map: map,
                    icon: {
                        url: "images/pin.svg",
                        scaledSize: new google.maps.Size(50, 50)
                    }
                });
                
                var marker3 = new google.maps.Marker({
                    position: bustillo,
                    map: map,
                    icon: {
                        url: "images/pin.svg",
                        scaledSize: new google.maps.Size(50, 50)
                    }
                });
            }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDP3aEyUjAfIPcGPl6fA4N3NRWae-A2OGg&callback=initMap">
    </script>

</body>

</html>