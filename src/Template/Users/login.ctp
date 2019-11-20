<?php use Cake\Core\Configure; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo Configure::read('Theme.title'); ?> | <?php echo $this->fetch('title'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php //echo $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <?php //echo $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
  <!-- Ionicons -->
  <?php //echo $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
  <!-- Theme style -->
  <?php //echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <!-- iCheck -->
  <?php //echo $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>
  <?php echo $this->Html->css('login'); ?>

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
<body class="">
  <form method="post" accept-charset="utf-8" role="form" action="/dermiapp/users/login">
    <div style="display:none;">
      <input type="hidden" name="_method" value="POST">
      <input type="hidden" name="_csrfToken" autocomplete="off" value="a5e2be8bf597df5bd5bcc61503c71affb6aaef09a466f4b13796acc9ef2fb233e9782aba193606dab7e10b187f6485af769ef8a56435c5a2dd61d1163eee6eb1">
    </div>
    <fieldset>
      <!-- <div class="form-group has-feedback">
          <div class="form-group input email">
            <input type="email" name="email" class="form-control" placeholder="E-mail" required="required" id="email">
          </div>            
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <div class="form-group input password">
            <input type="password" name="password" class="form-control" placeholder="Contraseña" required="required" id="password">
          </div>            
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
          <div class="col-xs-4">
            <button class="btn btn-primary btn-block btn-flat" type="submit">Ingresar</button>            
          </div>
          <div class="col-xs-4">
            <a href="/dermiapp/users/add" class="btn btn-primary btn-block btn-flat">Registrarse</a>            
          </div>
      </div> -->
      <div class="materialContainer">
        <div class="box">
            <div class="title">LOGIN</div>
            <?= $this->Flash->render() ?>
            <div class="input">
              <label for="name">Username</label>
              <!-- <input type="text" name="name" id="name"> -->
              <input type="email" name="email" required="required" id="email">
              <span class="spin"></span>
            </div>
            <div class="input">
              <label for="pass">Password</label>
              <!-- <input type="password" name="pass" id="pass"> -->
              <input type="password" name="password" required="required" id="password">
              <span class="spin"></span>
            </div>
            <div class="button login">
              <!-- <button><span>GO</span> <i class="fa fa-check"></i></button> -->
              <button type="submit"><span>Ingresar</span> <i class="fa fa-check"></i></button>
            </div>
            <!-- <a href="" class="pass-forgot">Registrate aqui</a> -->
            <a href="/dermiapp/users/add" class="pass-forgot">Registrate aquí</a>            
        </div>
        <!-- <div class="overbox"> -->
      <!-- <div class="material-button alt-2"></div> -->
<!-- 
      <div class="title">REGISTER</div>

      <div class="input">
         <label for="regname">Username</label>
         <input type="text" name="regname" id="regname">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="regpass">Password</label>
         <input type="password" name="regpass" id="regpass">
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="reregpass">Repeat Password</label>
         <input type="password" name="reregpass" id="reregpass">
         <span class="spin"></span>
      </div>

      <div class="button">
         <button><span>NEXT</span></button>
      </div>
 -->

   <!-- </div> -->

  </fieldset>
  </form>



 

</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery/dist/jquery.min'); ?>
<!-- Bootstrap 3.3.7 -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap/dist/js/bootstrap.min'); ?>
<!-- iCheck -->
<?php echo $this->Html->script('AdminLTE./plugins/iCheck/icheck.min'); ?>
<?php echo $this->Html->script('login'); ?>

<?php echo $this->fetch('script'); ?>

<?php echo $this->fetch('scriptBottom'); ?>

</body>
</html>
