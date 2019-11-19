<section class="content-header">
  <h1>
    Cliente
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
            <dt scope="row"><?= __('Nombres') ?></dt>
            <dd><?= h($cliente->nombres) ?></dd>
            <dt scope="row"><?= __('Apellido1') ?></dt>
            <dd><?= h($cliente->apellido1) ?></dd>
            <dt scope="row"><?= __('Apellido2') ?></dt>
            <dd><?= h($cliente->apellido2) ?></dd>
            <dt scope="row"><?= __('Dni') ?></dt>
            <dd><?= h($cliente->dni) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($cliente->id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</section>
