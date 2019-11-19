<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Doctore $doctore
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Doctore
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
            <h3 class="box-title"><?php echo __('Form'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($doctore, ['role' => 'form']); ?>
            <div class="box-body">
              <?php
                echo $this->Form->control('nombres');
                echo $this->Form->control('apellido1');
                echo $this->Form->control('apellido2');
                echo $this->Form->control('dni');
                echo $this->Form->control('codigomedico');
                echo $this->Form->control('users._ids', ['options' => $users]);
              ?>
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
