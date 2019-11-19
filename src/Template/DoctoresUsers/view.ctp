<section class="content-header">
  <h1>
    Asesoría médica
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
          <h3 class="box-title"><?php echo __('Informacion'); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <dl class="dl-horizontal">
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($doctoresUser->id) ?></dd>
            <dt scope="row"><?= __('Doctor') ?></dt>
            <dd><?= $doctoresUser->has('doctore') ? $this->Html->link($doctoresUser->doctore->get('label'), ['controller' => 'Doctores', 'action' => 'view', $doctoresUser->doctore->id]) : '' ?></dd>
            <?php if($current_user === 'admin'): ?>
              <dt scope="row"><?= __('User') ?></dt>
              <dd><?= $doctoresUser->has('user') ? $this->Html->link($doctoresUser->user->id, ['controller' => 'Users', 'action' => 'view', $doctoresUser->user->id]) : '' ?></dd>
            <?php endif ?>
            <dt scope="row"><?= __('Descripcion') ?></dt>
            <dd><?= h($doctoresUser->descripcion) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>

</section>
