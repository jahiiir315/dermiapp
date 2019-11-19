<section class="content-header">
  <h1>
    Membresias User
    <small><?php echo __('View'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(['action' => 'index']); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Home'); ?></a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-info"></i>
          <h3 class="box-title"><?php echo __('Information'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <?php if($current_user['role'] === 'admin'): ?>
              <dt scope="row"><?= __('Membresia') ?></dt>
              <dd><?= $membresiasUser->has('membresia') ? $this->Html->link($membresiasUser->membresia->nombre, ['controller' => 'Membresias', 'action' => 'view', $membresiasUser->membresia->id]) : '' ?></dd>
            <?php else: ?>
              <dt scope="row"><?= __('Membresia') ?></dt>
              <dd><?= $membresiasUser->has('membresia') ? $membresiasUser->membresia->nombre : '' ?></dd>
            <?php endif ?>
            <?php if($current_user['role'] === 'admin'): ?>
              <dt scope="row"><?= __('User') ?></dt>
              <dd><?= $membresiasUser->has('user') ? $this->Html->link($membresiasUser->user->email, ['controller' => 'Users', 'action' => 'view', $membresiasUser->user->id]) : '' ?></dd>
            <?php endif ?>
            <!-- <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($membresiasUser->id) ?></dd> -->
            <dt scope="row"><?= __('Costo') ?></dt>
            <dd><?= $this->Number->format($membresiasUser->costo) ?></dd>
            <dt scope="row"><?= __('Fecha Inicio') ?></dt>
            <dd><?= h($membresiasUser->fecha_inicio) ?></dd>
            <dt scope="row"><?= __('Fecha Fin') ?></dt>
            <dd><?= h($membresiasUser->fecha_fin) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
