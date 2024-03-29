<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MembresiasUser $membresiasUser
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Membresia
      <small><?php echo __('Edit'); ?></small>
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
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
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
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
