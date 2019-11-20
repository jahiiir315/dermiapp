<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MembresiasUser $membresiasUser
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Membresias
      <small><?php echo __('Add'); ?></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"><?php echo __(''); ?></h3>
          </div>
          <?php if($current_user['role'] === 'user'): ?>
          <div class="row content">
            <div class="col-md-4">
              <section>
              <?php echo $this->Form->create($membresiasUser, ['role' => 'form']); ?>
                <article class ="well">
                  <p>
                  <input name="promocion" type="hidden" value='1'>
                  <td><?= $this->Html->image('promo1.jpg', ['alt' => "promocion 1", 'weight'=>500, 'height'=>500, 'class'=>"img-responsive img-thmbnail center-block"]); ?></td>
                    <h4>
                      <strong>Plan: </strong> Premium
                    </h4>
                    <h4>
                      <strong>Periodo: </strong> 1 Mes
                    </h4>
                    <h4>
                      <strong>Cuenta con: </strong>
                      <br>*Asesoria medica y web
                      <br>*Historial de clientes y consultas
                      <br>*Consultas ilimitadas
                    </h4>
                    <?php if($membresiaActiva==Null or $membresiaActiva['membresia_id']===1 ): ?>
                      <?php echo $this->Form->submit(__('Comprar $50')); ?>
                    <?php endif ?>
                    
                  </p>
                </article>
                <?php echo $this->Form->end(); ?>
              </section>
            </div>
            <div class="col-md-4">
            <section>
              <?php echo $this->Form->create($membresiasUser, ['role' => 'form']); ?>
              <input name="promocion" type="hidden" value='2'>
                <article class ="well">
                  <p>
                  <td><?= $this->Html->image('promo2.jpeg', ['alt' => "promocion 2", 'weight'=>500, 'height'=>500, 'class'=>"img-responsive img-thmbnail center-block"]); ?></td>
                    <h4>
                      <strong>Plan: </strong> Premium
                    </h4>
                    <h4>
                      <strong>Periodo: </strong> 2 Meses
                    </h4>
                    <h4>
                      <strong>Cuenta con: </strong>
                      <br>*Asesoria medica y web
                      <br>*Historial de clientes y consultas
                      <br>*Consultas ilimitadas
                    </h4>
                    <?php if($membresiaActiva==Null or $membresiaActiva['membresia_id']===1 ): ?>
                      <?php echo $this->Form->submit(__('Comprar $90')); ?>
                    <?php endif ?>
                  </p>
                </article>
                <?php echo $this->Form->end(); ?>
              </section>
            </div>
            <div class="col-md-4">
            <section>
              <?php echo $this->Form->create($membresiasUser, ['role' => 'form']); ?>
                <article class ="well">
                  <p>
                  <input name="promocion" type="hidden" value='3'>
                  <td><?= $this->Html->image('promo3.jpg', ['alt' => "promocion 3", 'weight'=>500, 'height'=>500, 'class'=>"img-responsive img-thmbnail center-block"]); ?></td>
                    <h4>
                      <strong>Plan: </strong> Premium
                    </h4>
                    <h4>
                      <strong>Periodo: </strong> 3 Meses
                    </h4>
                    <h4>
                      <strong>Cuenta con: </strong>
                      <br>*Asesoria medica y web
                      <br>*Historial de clientes y consultas
                      <br>*Consultas ilimitadas
                    </h4>
                    <?php if($membresiaActiva==Null or $membresiaActiva['membresia_id']===1 ): ?>
                      <?php echo $this->Form->submit(__('Comprar $130')); ?>
                    <?php endif ?>
                  </p>
                </article>
                <?php echo $this->Form->end(); ?>
              </section>
            </div>
          </div>
          <?php endif ?>
          <!-- /.box-header -->
          <!-- form start -->
          <?php if($current_user['role'] === 'admin'): ?>
            <?php echo $this->Form->create($membresiasUser, ['role' => 'form']); ?>
              <div class="box-body">
                <?php
                  echo $this->Form->control('membresia_id', ['options' => $membresias]);
                  echo $this->Form->control('user_id', ['options' => $users]);
                  echo $this->Form->control('fecha_inicio');
                  echo $this->Form->control('fecha_fin');
                  echo $this->Form->control('costo');
                  ?>
              </div>
              <!-- /.box-body -->

            <?php echo $this->Form->submit(__('Guardar')); ?>

            <?php echo $this->Form->end(); ?>
          <?php endif ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
