<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
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
  <?php echo $this->Html->css('AdminLTE./bower_components/bootstrap/dist/css/bootstrap.min'); ?>
  <!-- Font Awesome -->
  <?php echo $this->Html->css('AdminLTE./bower_components/font-awesome/css/font-awesome.min'); ?>
  <!-- Ionicons -->
  <?php echo $this->Html->css('AdminLTE./bower_components/Ionicons/css/ionicons.min'); ?>
  <!-- Theme style -->
  <?php echo $this->Html->css('AdminLTE.AdminLTE.min'); ?>
  <!-- iCheck -->
  <?php echo $this->Html->css('AdminLTE./plugins/iCheck/square/blue'); ?>
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
<?php if(isset($current_user)): ?>
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo __('Form'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo $this->Form->create($user, ['role' => 'form']); ?>
              <div class="box-body">
                <?php
                  echo $this->Form->control('nombre');
                  echo $this->Form->control('dni');
                  echo $this->Form->control('ruc');
                  echo $this->Form->control('direccion');
                  echo $this->Form->control('celular');
                  echo $this->Form->control('telefono');
                  echo $this->Form->control('email');
                  echo $this->Form->control('password');
                ?>
                <label for="role">Rol</label>
                <select name="role" class="form-control">
                  <option value="admin">Adminstrador</option>
                  <option value="user">Usuario</option>
                </select>
              </div>
              <!-- /.box-body -->

            <?php echo $this->Form->submit(__('Submit')); ?>

            <?php echo $this->Form->end(); ?>
          </div>
          <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->
  </section>
<?php else: ?>
  <body class="">

  <form method="post" accept-charset="utf-8" role="form" action="/dermiapp/users/add">
    <div style="display:none;">
      <input type="hidden" name="_method" value="POST">
      <input type="hidden" name="_csrfToken" autocomplete="off" value="a5e2be8bf597df5bd5bcc61503c71affb6aaef09a466f4b13796acc9ef2fb233e9782aba193606dab7e10b187f6485af769ef8a56435c5a2dd61d1163eee6eb1">
    </div>   
    <div class="col-md-offset-1">

      <div class="title">Registrarse</div>
      <div class="col-md-5">
        <div class="input">
          <label for="nombre">Nombre*</label>
          <input type="text" name="nombre" required="required" maxlength="255" id="nombre">
          <span class="spin"></span>
        </div>
        
        <div class="input">
          <label for="email">Email*</label>
          <input type="email" name="email" required="required" maxlength="255" id="email">
          <span class="spin"></span>
        </div>
        
        <div class="input">
          <label for="password">Contraseña*</label>
          <input type="password" name="password"  required="required" id="password">
          <span class="spin"></span>
        </div>

        <div class="input">
          <label for="ruc">RUC</label>
          <input type="text" name="ruc" class="form-control" maxlength="10" id="ruc">
          <span class="spin"></span>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <!-- <div class="title">REGISTER</div> -->
      <div class="input">
        <label for="dni">DNI</label>
        <input type="text" name="dni" maxlength="8" id="dni">
        <span class="spin"></span>
      </div>
      
      <div class="input">
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" class="form-control" maxlength="255" id="direccion">
        <span class="spin"></span>
      </div>
      
      <div class="input">
        <label for="celular">Celular</label>
        <input type="text" name="celular" class="form-control" maxlength="9" id="celular">
        <span class="spin"></span>
      </div>
      <div class="input">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="form-control" maxlength="9" id="telefono">
        <span class="spin"></span>
      </div>
      
      <div class="button">
        <button type="submit"><span>Aceptar</span></button>
        <!-- <div class="box-footer "><input type="submit" class="btn btn-success" value="Registrar"></div> -->
      </div>
    </div>
  </div>
</div> 
</form>
  </body>
<?php endif ?>

<!-- jQuery 3 -->
<?php echo $this->Html->script('AdminLTE./bower_components/jquery/dist/jquery.min'); ?>
<!-- Bootstrap 3.3.7 -->
<?php echo $this->Html->script('AdminLTE./bower_components/bootstrap/dist/js/bootstrap.min'); ?>
<?php echo $this->Html->script('login'); ?>
<!-- iCheck -->

</html>