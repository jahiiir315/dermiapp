<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Asesorias médicas
    <?php if($current_user['role']==='admin'): ?>
      <div class="pull-right"><?php echo $this->Html->link(__('Nueva'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
    <?php else: ?>
      <?php if(isset($membresiaActiva['membresia_id'])): ?>
        <div class="pull-right"><?php echo $this->Html->link(__('Nueva'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
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
          <h3 class="box-title"><?php echo __('Lista de asesorias médicas'); ?></h3>

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
          <table id="table_asesorias_medicas" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Doctor</th>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <th scope="col">User</th>
                  <?php endif ?>
                  <th scope="col">Descripcion</th>
                  <th scope="col" class="actions text-center"><?= __('Actions') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($doctoresUsers as $doctoresUser): ?>
                <tr>
                  <td><?= $this->Number->format($doctoresUser->id) ?></td>
                  <td><?= $doctoresUser->has('doctore') ? $this->Html->link($doctoresUser->doctore->get('label'), ['controller' => 'Doctores', 'action' => 'view', $doctoresUser->doctore->id]) : '' ?></td>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <td><?= $doctoresUser->has('user') ? $this->Html->link($doctoresUser->user->email, ['controller' => 'Users', 'action' => 'view', $doctoresUser->user->id]) : '' ?></td>
                  <?php endif ?>
                  <td><?= h($doctoresUser->descripcion) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $doctoresUser->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?php if($current_user['role'] ==='admin'): ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $doctoresUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $doctoresUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctoresUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
                      <?php else: ?>
                        <?php if(isset($membresiaActiva['membresia_id'])): ?>
                          <?= $this->Html->link(__('Editar'), ['action' => 'edit', $doctoresUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                          <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $doctoresUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctoresUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
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