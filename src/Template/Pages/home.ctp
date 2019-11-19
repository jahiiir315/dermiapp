
<?php ?>
<!-- <html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- <title>DermiApp</title> -->

  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<!-- </head> -->

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" class="img-responsive" style=" height: 80px; margin-top: -20px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Inicio</a></li>
                <li class=""><a href="#servicios">Servicios</a></li>
                <li class=""><a href="#sobre">Nosotros</a></li>
                <li class=""><a href="#socios">Socios</a></li>
                <li class=""><a href="#opiniones">Testimonios</a></li>
                <li>
                    <?= $this->Html->link(__('Login'), ['controller'=> 'users', "action" => "login"]) ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" alt="logo" width="200" class="img-responsive">
            </div>
            <div class="banner-text text-center">
              <h2 class="white">Prediagnostico de melanomas</h2>
              <p>Nos centramos en el prediagnostico de melanomas a través de redes neuronales convolucionales</p>
              <a href="#servicios" class="btn btn-appoint">Comience ahora</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#servicios"><span class="fa fa-angle-down"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <section id="servicios" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h3 class="ser-title">Nuestro servicio</h3>
          <hr class="botm-line">
          <p>Nos encargamos del prediagnostico de melanomas para el tratamiento y prevencion de cancer a la piel.</p>
          <p>Contamos con procedimientos innovadores, que te ayudará a descartar problemas mas complicados relacionados al cancer de piel.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <span class="fa fa-stethoscope"></span>
            </div>
            <div class="icon-info">
              <h4>Soporte de 24 horas</h4>
              <p>Disponible las 24 horas, los 7 días de la semana sin interrupción.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <span class="fa fa-ambulance"></span>
            </div>
            <div class="icon-info">
              <h4>Disponibilidad</h4>
              <p>Puede disponer de nuestros servicios desde la comodidad del hogar, además de contar con un diagnostico seguro y eficaz</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <span class="fa fa-user-md"></span>
            </div>
            <div class="icon-info">
              <h4>Asesoramiento médico</h4>
              <p>Contamos con el asesoramiento de medicos dermatólogos con años de experiencia.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <span class="fa fa-medkit"></span>
            </div>
            <div class="icon-info">
              <h4>Cuidado de salud premium</h4>
              <p>Contamos con paquetes de consultas ilimitadas y algoritmos mas eficaces.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-sm-6 ">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Básico</h3>
              <ul class="lista-planes">
                <li>
                  <p><span class="icon-planes fa fa-heart"></span>5 Consultas al mes</p>
                </li>
                <li>
                  <p class="texto-tachado"><span class="icon-planes fa fa-heart"></span>Soporte en linea</p>
                </li>
                <li>
                  <p class="texto-tachado"><span class="icon-planes fa fa-heart"></span>Historial de consultas</p>
                </li>
                <li>
                  <p class="texto-tachado"><span class="icon-planes fa fa-heart"></span>Lorem ipsum dolor sit amet consectetur</p>
                </li>
              </ul>
              <p>Totalmente Gratis</p>
              <a href="#" class="medi-info-btn">Comience Ahora</a>
            </div>
          </div>
          <div class="col-sm-6 ">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Empresarial</h3>
              <ul class="lista-planes">
                <li>
                  <p><span class="icon-planes fa fa-heart"></span>500 Consultas al mes</p>
                </li>
                <li>
                  <p><span class="icon-planes fa fa-heart"></span>Soporte en linea</p>
                </li>
                <li>
                  <p><span class="icon-planes fa fa-heart"></span>Historial de consultas</p>
                </li>
                <li>
                  <p><span class="icon-planes fa fa-heart"></span>Lorem ipsum dolor sit amet consectetur</p>
                </li>
              </ul>
              <p>S./150  Mensuales</p>
              <a href="#" class="medi-info-btn">Comience Ahora</a>
            </div>
          </div>
          
          
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="sobre" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Detección con<br>Inteligencia Artificial</h2>
            <hr class="botm-line">
            <p class="sec-para">Usamos modelos ya probados en otros campos para la detección de melanomas malignos.</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Quieres saber mas?...</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <span class="fa fa-angle-right" aria-hidden="true"></span> </div>
              <div class="more-features-box-text-description">
                <h3>Basado en el ABCDE de los melanomas</h3>
                <p>Tomamos en cuenta la asimetria, los bordes, el color, el diametro y elevación del melanoma a diagnosticar.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <span class="fa fa-angle-right" aria-hidden="true"></span> </div>
              <div class="more-features-box-text-description">
                <h3>Supervisado por profesionales en dermatología</h3>
                <p>Contamos con un asesoría de profesionales en el área de dermatología con años de experiencia y experticia.</p>
              </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Conoce nuestros doctores</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Marilyn Huaman</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Carlos Gambos</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Medina</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Anderson Vásquez</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ doctor team-->
    <section id="socios" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="ser-title">Nuestros Socios Estratégicos</h2>
            <hr class="botm-line">
          </div>
          <div class="col-md-10 col-md-offset-1">
            <div class="table-responsive">
              <table class="tabla_socios table ">
                <tr>
                  <th>ID</th>
                  <th>CÓDIGO</th>
                  <th>APELLIDO PATERNO</th>
                  <th>APELLIDO MATERNO</th>
                  <th>NOMBRES</th>
                  <th>IMAGEN</th>
                </tr>
                
                <tr>
                  <td>1</td>
                  <td>0201514041</td>	
                  <td>CHAMACHE</td>
                  <td>PEREDA</td>
                  <td>VANESA GABRIELA</td>
                  <td><img src="./img/fotosTT/chamache.jpg" alt="Chamache"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>0201514052</td>	
                  <td>CHAPA</td>
                  <td>CARRANZA</td>
                  <td>KATHIUSCA MASSUMY</td>
                  <td><img src="./img/fotosTT/chapa.jpg" alt="chapa.jpg"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>02015140513</td>	
                  <td>CRUZ</td>
                  <td>CADILLO</td>
                  <td>MABEL STEFANY</td>
                  <td><img src="./img/fotosTT/cruz.jpg" alt="Cruz"></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>0201514044</td>	
                  <td>FLORES</td>
                  <td>SOLIS</td>
                  <td>EDWIN JUNIOR</td>
                  <td><img src="./img/fotosTT/flores.jpg" alt="flores.jpg" width="40"></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>0201514025</td>	
                  <td>GUTIERREZ</td>
                  <td>LOPEZ</td>
                  <td>AXEL GASTÓN KEVIN</td>
                  <td><img src="./img/fotosTT/gutierrez.jpg" alt="gutierrez.jpg" width="40"></td>
                </tr>
  
                <tr>
                  <td>6</td>
                  <td>0201514056</td>	
                  <td>LECCA</td>
                  <td>REYNA</td>
                  <td>EDISON GABRIEL</td>
                  <td><img src="./img/fotosTT/lecca.jpg" alt="lecca.jpg" width="40"></td>
                </tr>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« Nuestra Vision »</h2>
        </div>
        <div class="col-md-4 col-sm-5">
          Queremos ser la primera empresa chimbotana que usa inteligencia artifical para mejorar la calidad de vida de los ciudadanos, teniendo como aliados a la mayoria de hospitales y/o clinicas, estableciendo alianzas mutuamente beneficiosas. 
          <p class="text-right text-primary"><span> DermiApp</span></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  
  <!--testimonial-->
  <section id="opiniones" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Algunos clientes</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>La única manera de brindar servicios de calidad a la población Chimbotana es usar la tecnología, y esta es el primer paso de un largo recorrido que tenemos que atravesar como sociedad.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/jose_calderon.jpg" alt="p" class="img-responsive"></a>
            <!-- User Name -->
            <h3>José <span>Calderon</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Usar tecnología avanzada que hace pocos años parecía que solo inventos Hollywoodenses al alcance de todos es una maravilla, nunca creí que esto se podría convertir en realidad </p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/enrique_valderrama.jpg" alt="p" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Enrique<span>Valderrama</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Si apoyamos a emprendimientos como este lograremos una mejora  en la calidad de vida de la población chimbotana con la visión de compartir nuestros avances con el resto de ciudades peruanas.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/sthepany_castro.jpg" alt="p" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Stephany<span>Castro</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->

  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Sobre nosotros</h4>
            </div>
            <div class="info-sec">
              <p>Nos centramos en el uso de redes neuronales convolucionales para el reconocimiento y pre diagnostico de melanomas</p>
              <ul class="quick-info">
                <li><a href="https://fb.com" target="_blank"><span class="fa fa-circle"></span>Melendez Rodriguez, Luis</a></li>
                <li><a href="https://fb.com" target="_blank"><span class="fa fa-circle"></span>Moncada Leiva, Jahir</a></li>
                <li><a href="https://fb.com" target="_blank"><span class="fa fa-circle"></span>Ycochea Carhuajulca, Cristian</a></li>
              </ul>
            </div>
            
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Enlaces rápidos</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><span class="fa fa-circle"></span>Inicio</a></li>
                <li><a href="#service"><span class="fa fa-circle"></span>Servicios</a></li>
              </ul>
              <!-- <p>
                  <a href="http://jigsaw.w3.org/css-validator/check/referer">
                      <img style="border:0;width:88px;height:31px"
                          src="http://jigsaw.w3.org/css-validator/images/vcss"
                          alt="¡CSS Válido!" />
                  </a>
              </p> -->
              <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer">
                    <img style="border:0;width:88px;height:31px"
                        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                        alt="¡CSS Válido!" />
                    </a>
                </p>              
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Siguenos en</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><span class="fa fa-facebook"></span></li>
                <li class="bgred"><span class="fa fa-google-plus"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright DermiApp
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  
<!--<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script> -->

</body>

<!-- </html> -->