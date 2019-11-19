<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Asesoria web

  <?php if($current_user['role']==='admin'): ?>
    <div class="pull-right"><?php echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  <?php else: ?>
    <?php if(isset($membresiaActiva['membresia_id'])): ?>
      <div class="pull-right"><?php echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
    <?php endif ?>
  <?php endif ?>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box content">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lista de asesorias web'); ?></h3>

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
          <table id="table_asesorias_web" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Empleado</th>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <th scope="col">User</th>
                  <?php endif ?>
                  <th scope="col">Descripcion</th>
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($empleadosUsers as $empleadosUser): ?>
                <tr>
                  <td><?= $this->Number->format($empleadosUser->id) ?></td>
                  <td><?= $empleadosUser->has('empleado') ? $this->Html->link($empleadosUser->empleado->get('label'), ['controller' => 'Empleados', 'action' => 'view', $empleadosUser->empleado->id]) : '' ?></td>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <td><?= $empleadosUser->has('user') ? $this->Html->link($empleadosUser->user->email, ['controller' => 'Users', 'action' => 'view', $empleadosUser->user->id]) : '' ?></td>
                  <?php endif?>
                  <td><?= h($empleadosUser->descripcion) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $empleadosUser->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?php if($current_user['role'] ==='admin'): ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empleadosUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $empleadosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadosUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
                      <?php else: ?>
                        <?php if(isset($membresiaActiva['membresia_id'])): ?>
                          <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empleadosUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                          <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $empleadosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empleadosUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
                        <?php endif ?>
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