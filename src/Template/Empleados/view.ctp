<section class="content-header">
  <h1>
    Empleado
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
            <dd><?= h($empleado->nombres) ?></dd>
            <dt scope="row"><?= __('Apellido paterno') ?></dt>
            <dd><?= h($empleado->apellido1) ?></dd>
            <dt scope="row"><?= __('Apellido materno') ?></dt>
            <dd><?= h($empleado->apellido2) ?></dd>
            <dt scope="row"><?= __('Celular') ?></dt>
            <dd><?= h($empleado->celular) ?></dd>
            <dt scope="row"><?= __('Dni') ?></dt>
            <dd><?= h($empleado->dni) ?></dd>
            <dt scope="row"><?= __('Id') ?></dt>
            <dd><?= $this->Number->format($empleado->id) ?></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <?php if($current_user === 'admin'): ?>
                  
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <i class="fa fa-share-alt"></i>
          <h3 class="box-title"><?= __('Users') ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php if (!empty($empleado->users)): ?>
          <table class="table table-hover">
              <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Nombre') ?></th>
                    <th scope="col"><?= __('Dni') ?></th>
                    <th scope="col"><?= __('Ruc') ?></th>
                    <th scope="col"><?= __('Direccion') ?></th>
                    <th scope="col"><?= __('Celular') ?></th>
                    <th scope="col"><?= __('Telefono') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Password') ?></th>
                    <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
              <?php foreach ($empleado->users as $users): ?>
              <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->nombre) ?></td>
                    <td><?= h($users->dni) ?></td>
                    <td><?= h($users->ruc) ?></td>
                    <td><?= h($users->direccion) ?></td>
                    <td><?= h($users->celular) ?></td>
                    <td><?= h($users->telefono) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->password) ?></td>
                      <td class="actions text-right">
                      <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'class'=>'btn btn-danger btn-xs']) ?>
                  </td>
              </tr>
              <?php endforeach; ?>
          </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif ?>
</section>
