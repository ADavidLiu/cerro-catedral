<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catedral Alta Patagonia | Parte Diario</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body class="loading">
    <div class="backdrop">&nbsp;</div>

    <?php include "./header-alt.php"; ?>

    <?php include "./nav.php"; ?>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="wow animated fadeInDown u-color-dark-3">Parte <span class="u-weight-reg">diario</span></h1>
                    <hr class="banner__divider banner__divider--primary u-margin-bottom-med u-margin-top-med">
                    <p class="text-icon u-color-dark-3 wow animated fadeInDown u-margin-bottom-smallest" data-wow-delay=".5s"><img src="images/i-clock.svg" alt="Actualización" class="text-icon__img">ÚLTIMA ACTUALIZACIÓN: 23 de Febrero de 2018 - 11:15 hs.</p>
                    <p class="u-color-dark-3 u-weight-med wow animated fadeInDown" data-wow-delay=".75s"><i>Cerro Catedral se encuentra abierto de lunes a domingo de 9 a 18 horas. Último ascenso 17.00 hs</i></p>
                    <img src="images/i-arrow.png" alt="Arrow" class="banner__arrow" data-scroll-to="parte-diario">
                </div>
            </div>
        </div>
    </section>

    <main data-scroll-target="parte-diario" class="parte tabs">
        <nav class="navigation navigation--bg-white u-margin-bottom-med-2 tabs__controls">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navigation__content">
                            <h4 class="navigation__item u-color-white u-weight-reg" data-tab-show="clima"><span>Clima</span></h4>
                            <h4 class="navigation__item navigation__item--active u-color-white u-weight-reg" data-tab-show="estado"><span>Estado de Medios, Pistas y Caminos</span></h4>
                            <h4 class="navigation__item u-color-white u-weight-reg" data-tab-show="pronostico"><span>Pronóstico</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="tabs__content">
            <section class="container-fluid--full-wrapper tabs__content-item parte__clima" data-tab-target="clima">
                <div class="container-fluid">
                    <div class="row u-margin-bottom-med">
                        <div class="col-xs-12 col-sm-4 u-margin-bottom-med">
                            <div class="parte__clima-box">
                                <div class="parte__clima-box-header">
                                    <h4 class="u-color-white">SECTOR BASE</h4>
                                    <p class="paragraph--big u-color-white u-align-inline-right-md">Alt. 1000 msnm</p>
                                </div>
                                <div class="parte__clima-box-content">
                                    <div class="parte__clima-actual u-margin-bottom-med-2">
                                        <img src="images/i-nevada.svg" alt="Nevada" class="parte__clima-actual-icon u-margin-bottom-small">
                                        <h3 class="heading-tertiary--big u-color-white u-weight-bld">11° C</h3>
                                    </div>
                                    <div class="parte__clima-info">
                                        <p class="paragraph--small u-color-white u-weight-bld">Información del Clima</p>
                                        <ul class="parte__clima-info-list">
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Sensación Térmica:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">11 ºC</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Viento (Km/h):</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">0-10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Visibilidad:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">Buena</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Calidad de la nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">-----</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Última Nevada:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">29/10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Precipitados Últimas 24Hs:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Altura de la Nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 u-margin-bottom-med">
                            <div class="parte__clima-box">
                                <div class="parte__clima-box-header">
                                    <h4 class="u-color-white">SECTOR INTERMEDIO</h4>
                                    <p class="paragraph--big u-color-white u-align-inline-right-md">Alt. 1000 msnm</p>
                                </div>
                                <div class="parte__clima-box-content">
                                    <div class="parte__clima-actual u-margin-bottom-med-2">
                                        <img src="images/i-nevada.svg" alt="Nevada" class="parte__clima-actual-icon u-margin-bottom-small">
                                        <h3 class="heading-tertiary--big u-color-white u-weight-bld">4° C</h3>
                                    </div>
                                    <div class="parte__clima-info">
                                        <p class="paragraph--small u-color-white u-weight-bld">Información del Clima</p>
                                        <ul class="parte__clima-info-list">
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Sensación Térmica:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">11 ºC</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Viento (Km/h):</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">0-10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Visibilidad:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">Buena</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Calidad de la nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">-----</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Última Nevada:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">29/10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Precipitados Últimas 24Hs:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Altura de la Nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 u-margin-bottom-med">
                            <div class="parte__clima-box">
                                <div class="parte__clima-box-header">
                                    <h4 class="u-color-white">SECTOR SUPERIOR</h4>
                                    <p class="paragraph--big u-color-white u-align-inline-right-md">Alt. 1000 msnm</p>
                                </div>
                                <div class="parte__clima-box-content">
                                    <div class="parte__clima-actual u-margin-bottom-med-2">
                                        <img src="images/i-nevada.svg" alt="Nevada" class="parte__clima-actual-icon u-margin-bottom-small">
                                        <h3 class="heading-tertiary--big u-color-white u-weight-bld">2° C</h3>
                                    </div>
                                    <div class="parte__clima-info">
                                        <p class="paragraph--small u-color-white u-weight-bld">Información del Clima</p>
                                        <ul class="parte__clima-info-list">
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Sensación Térmica:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">11 ºC</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Viento (Km/h):</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">0-10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Visibilidad:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">Buena</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Calidad de la nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">-----</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Última Nevada:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">29/10</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Precipitados Últimas 24Hs:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                            <li class="parte__clima-info-item">
                                                <p class="paragraph--small u-color-white u-weight-reg">Altura de la Nieve:</p>
                                                <p class="paragraph--small u-color-white u-weight-reg">cm.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 u-margin-bottom-med">
                            <div class="parte__clima-box">
                                <div class="parte__clima-box-header">
                                    <h4 class="u-color-white">Riesgo de avalanchas</h4>
                                    <p class="paragraph--big u-color-white u-align-inline-right-md"><a href="#" class="link-bg-primary">Ver Escala de Riesgos de Avalanchas</a></p>
                                </div>
                                <div class="parte__clima-box-content parte__clima-box-content--alt">
                                    <div class="parte__clima-riesgo">
                                        <div class="parte__clima-riesgo-flag parte__clima-riesgo-flag--low">&nbsp;</div>
                                        <h2 class="heading-secondary--med u-color-white u-weight-bld">BAJO</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 u-margin-bottom-med">
                            <div class="parte__clima-box">
                                <div class="parte__clima-box-header">
                                    <h4 class="u-color-white">Ruta de acceso a Catedral</h4>
                                    <p class="paragraph--big u-color-white u-align-inline-right-md">Desde Cruce de Vírgen de las Nieves a la Base</p>
                                </div>
                                <div class="parte__clima-box-content parte__clima-box-content--alt u-align-inline-center">
                                    <h2 class="heading-secondary--med u-color-white u-weight-bld">TRANSITABLE</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="parte__referencias">
                                <h3 class="heading-teritary--med u-color-white u-weight-bld parte__referencias-title">REFERENCIAS</h3>
                                <div class="parte__referencias-list">
                                    <div class="parte__referencias-item">
                                        <img src="images/i-soleado.svg" alt="Soleado" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Soleado</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-nublado-parcial.svg" alt="Nublado Parcial" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Nublado Parcial</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-nublado.svg" alt="Nublado" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Nublado</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-nevada.svg" alt="Nevadas" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Nevadas</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-lluvias.svg" alt="Lluvias" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Lluvias</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-aguanieve.svg" alt="Aguanieve" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Aguanieve</h4>
                                    </div>
                                    <div class="parte__referencias-item">
                                        <img src="images/i-ventoso.svg" alt="Ventoso" class="parte__referencias-item-icon">
                                        <h4 class="u-color-white u-weight-reg parte__referencias-item-label">Ventoso</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container-fluid u-margin-bottom-big tabs__content-item tabs__content-item--active" data-tab-target="estado">
                <div class="row u-margin-bottom-big">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 u-align-inline-center">
                        <div class="parte__estado">
                            <select class="parte__estado-select">
                                <option value="todos">Ver todos</option>
                                <option value="pistas">Pistas</option>
                                <option value="medios">Medios</option>
                            </select>
                            <img src="images/mapa-estado-pistas-medios.jpg" alt="Mapa del Estao de Pistas y Medios" class="parte__estado-img">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-1 col-md-4">
                        <table class="table">
                            <tr>
                                <th colspan="2">Horarios Cable Carril</th>
                            </tr>
                            <tr>
                                <td>Primer ascenso</td>
                                <td>09:00 HS</td>
                            </tr>
                            <tr>
                                <td>Último ascenso</td>
                                <td>16:15 HS</td>
                            </tr>
                            <tr>
                                <td>Último descenso</td>
                                <td>17:00 HS</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </main>
    
    <?php include "./footer.php"; ?>

    <?php include "./subfooter.php"; ?>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/app-dist.js"></script>

</body>

</html>