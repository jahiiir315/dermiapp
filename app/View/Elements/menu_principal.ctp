
    <!--banner-->
    <!-- En este elemento debe ir el  side bar -->
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
              <li><?php echo $this->Html->link('Inicio', '#baner'); ?></li>
                <li><?php echo $this->Html->link('Servicios', '#servicios'); ?></li>
                <li><?php echo $this->Html->link('Nosotros', '#sobre'); ?></li>
                <li><?php echo $this->Html->link('Socios', '#socios'); ?></li>
                <li><?php echo $this->Html->link('Testimonios', '#opiniones'); ?></li>
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