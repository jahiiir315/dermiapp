<?php use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dermiapp</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php echo $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
  <!-- Ionicons -->
  <?php echo $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?php echo $this->Html->css('AdminLTE.skins/skin-'. Configure::read('Theme.skin') .'.min'); ?>
  <?php echo $this->Html->css('AdminLTE./bower_components/dataTables.net-bs/css/dataTables.bootstrap.min');?>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?php echo $this->fetch('css'); ?>

</head>
<body class="hold-transition skin-<?php echo Configure::read('Theme.skin'); ?> sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo $this->Url->build('/'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Dermiapp</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <?php echo $this->element('nav-top'); ?>
  </header>

  <?php echo $this->element('aside-main-sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <?php echo $this->Flash->render(); ?>
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->fetch('content'); ?>

  </div>
  <!-- /.content-wrapper -->

  <?php echo $this->element('footer'); ?>

  <!-- Control Sidebar -->
  <?php echo $this->element('aside-control-sidebar'); ?>
  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery/dist/jquery.min'); ?>
<!-- Bootstrap 3.3.7 -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap/dist/js/bootstrap.min'); ?>
<!-- AdminLTE App -->
<?php echo $this->Html->script('AdminLTE.adminlte.min'); ?>
<!-- Slimscroll -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery-slimscroll/jquery.slimscroll.min'); ?>
<!-- FastClick -->
<?php echo $this->Html->script('AdminLTE./bower_components/fastclick/lib/fastclick'); ?>
<?php echo $this->Html->script('AdminLTE./bower_components/dataTables.net/js/jquery.dataTables.min');?>
<?php echo $this->Html->script('AdminLTE./bower_components/dataTables.net-bs/js/dataTables.bootstrap.min');?>
<?php echo $this->Html->script('bootstrap-filestyle.min');?>



<?php echo $this->fetch('script'); ?>

<?php echo $this->fetch('scriptBottom'); ?>

<script type="text/javascript">
    axios.defaults.headers.post['Content-Type'] ='multipart/form-data;charset=utf-8';
    axios.defaults.baseURL = 'https://gateway.watsonplatform.net/visual-recognition/api/v3/classify?version=2018-03-19&threshold=0.6&classifier_ids=DefaultCustomModel_1108769451';
    $(document).ready(function(){
        $(".navbar .menu").slimscroll({
            height: "200px",
            alwaysVisible: false,
            size: "3px"
        }).css("width", "100%");
        
        var a = $('a[href="<?php echo $this->Url->build() ?>"]');
        if (!a.parent().hasClass('treeview') && !a.parent().parent().hasClass('pagination')) {
            a.parent().addClass('active').parents('.treeview').addClass('active');
        }

        $('#table_users').DataTable();
        $('#table_clientes').DataTable();
        $('#table_doctores').DataTable();
        $('#table_empleados').DataTable();
        $('#table_membresias').DataTable();
        $('#table_asesorias_medicas').DataTable();
        $('#table_asesorias_web').DataTable();
        $('#table_diagnosticos').DataTable();
        $('#table_membresias_users').DataTable();

        $('#diagnosticar').click(function() {
          var imagen = document.getElementById('photo')
          var cliente = document.getElementById('cliente-id')
          if(cliente.value){
            if(imagen.value){
              consultar();
            }else{
              alert('Seleccione una foto');
            }
          }else{
            alert('Se necesita un cliente');
          }
        })

        $('#content_resultado_diagnostico').hide();
    });

    function consultar(){
      
      var data = new FormData($('#form_diagnostico')[0])
      
      axios.post('', data, 
        {
          auth: 
          {
            username: 'apikey',
            password: 'tQnhA_uLeRJ7VK142yNVqcgBHx0H05AScDkQ4OdKOyqy'
          }
        }
      ).then( res => {
        mostrar_resultado(diagnostico(res.data))
      }).catch(err => {
        console.log(err)
        this.cargando = false
      })
    }

    function diagnostico(resultado){
    let scores = {
          'Benigno': 0,
          'Maligno': 0,
        }
        // console.log(this.resultado)
        if(resultado)
        {
          resultado.images[0].classifiers[0].classes.forEach(element => {
            scores[element.class] = element.score
          });
          return scores;
        }else{
          return false
        }
    }
    function mostrar_resultado(puntajes){
      if(puntajes){
        console.log(puntajes)
        $('#probbenigno').val((puntajes.Benigno).toFixed(2))
        $('#probmaligno').val((puntajes.Maligno).toFixed(2))

        let benigno = puntajes.Benigno > puntajes.Maligno
        let resultado
          if(benigno)
          {
            resultado =  {
                benigno,
                texto: 'Su melanoma se ha detectado como Benigno con un ' + Math.round(puntajes.Benigno * 10000) / 100 + '% de fiabilidad.',
                recomendacion: 'En caso el melanoma cambie en el transcurso de las semanas volver a repetir este test.',
              }
          }else{
            resultado = {
                benigno,
                texto: 'Su melanoma se ha detectado como maligno con un ' + Math.round(puntajes.Maligno * 10000) / 100 + '% de fiabilidad.',
                recomendacion: 'Se le recomienda que se le practique una biopsia para poder comprobarlo con  un 100% de fiabilidad.',
              }
          }
        $('#descripcion').val(resultado.texto)
        $('#content_resultado_diagnostico').show()
        $('#diagnosticar').hide()
      }
    }
</script>

</body>
</html>
