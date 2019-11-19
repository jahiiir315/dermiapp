<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  <?php if($current_user['role'] === 'admin'): ?>
    Membresias de usuarios
  <?php else: ?>
    Mis membresias
  <?php endif ?>

    <div class="pull-right"><?php echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>
<?php if($current_user['role'] === 'user' ): ?>
  <!-- Si esta usando la normal -->
  <?php if(isset($membresiaActiva)): ?>
    <?php if($membresiaActiva['membresia_id'] === 1): ?>
      <section class="content-header">
          <div class="alert alert-success alert-dismissible">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <h4><i class="icon fa fa-check"></i>Está usando nuestra version demo</h4>

              Actualmente le queda <?php echo $membresiaActiva['intentos'] ?> intentos</div>
      </section>
    <?php else: ?>
      <section class="content-header">
          <div class="alert alert-success alert-dismissible">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <h4><i class="icon fa fa-check"></i>Está usando nuestra version premium</h4>
              Usted tiene intentos ilimitados
      </section>
    <?php endif ?>
  <?php else: ?>
    <section class="content-header">
          <div class="alert alert-danger alert-dismissible">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <h4><i class="icon fa fa-check"></i>Aviso</h4>
              Su version gratuita ha finalizado
      </section>
  <?php endif ?>
<?php endif ?>



<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box content">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lista de membresias de usuarios'); ?></h3>

          <div class="box-tools">
            <!-- <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </form> -->
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="table_membresias_users" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Membresia</th>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <th scope="col">User</th>
                  <?php endif ?>
                  <th scope="col">Fecha de inicio</th>
                  <th scope="col">Fecha de fin</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Estado</th>
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($membresiasUsers as $membresiasUser): ?>
                <tr>
                  <td><?= $this->Number->format($membresiasUser->id) ?></td>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <td><?= $membresiasUser->has('membresia') ? $this->Html->link($membresiasUser->membresia->nombre, ['controller' => 'Membresias', 'action' => 'view', $membresiasUser->membresia->id]) : '' ?></td>
                    <td><?= $membresiasUser->has('user') ? $this->Html->link($membresiasUser->user->email, ['controller' => 'Users', 'action' => 'view', $membresiasUser->user->id]) : '' ?></td>
                  <?php else: ?>
                      <td><?= $membresiasUser->has('membresia') ?$membresiasUser->membresia->nombre : '' ?></td>
                  <?php endif ?>
                  <td><?= h($membresiasUser->fecha_inicio) ?></td>
                  <td><?= h($membresiasUser->fecha_fin) ?></td>
                  <td><?= $this->Number->format($membresiasUser->costo) ?></td>
                  <td><?= $membresiasUser->estado ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $membresiasUser->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?php if($current_user['role'] === 'admin'): ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $membresiasUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $membresiasUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membresiasUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
                      <?php endif ?>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>