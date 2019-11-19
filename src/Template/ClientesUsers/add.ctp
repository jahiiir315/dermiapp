<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientesUser $clientesUser
 */
?>
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Diagnosticar
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
            <h3 class="box-title"><?php echo __('Formulario'); ?></h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo $this->Form->create($clientesUser, ['type' => 'file', 'id'=>'form_diagnostico']); ?>
            <div class="box-body">
              <?php
              if($current_user['role']==='admin'){
                echo $this->Form->control('user_id', ['options' => $users]);
              }
                echo $this->Form->control('cliente_id', ['options' => $clientes]);
                echo $this->Form->input('photo', ['type' => 'file', 'class'=> 'filestyle','data-btnClass'=>'btn-primary','data-text'=>'Examinar']);
                echo $this->Html->link(__('Diagnosticar'), ['action' => 'add#'], ['id'=>'diagnosticar','class'=>'btn btn-success']);
                // echo $this->Form->control('photo');
              ?>
            </div>
            <!-- /.box-body -->
            <div class="box-body" id="content_resultado_diagnostico">
              <?php 
                echo $this->Form->control('probbenigno');
                echo $this->Form->control('probmaligno');
                echo $this->Form->control('descripcion');
                echo $this->Form->submit(__('Guardar'),['id'=>'guardar_diagnostico']);
              ?>
            </div>

          <?php echo $this->Form->end(); ?>
        </div>
        <!-- /.box -->
      </div>
  </div>
  <!-- /.row -->
</section>
<script>
  
</script>
