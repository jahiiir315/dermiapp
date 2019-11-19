<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users

    <div class="pull-right"><?php echo $this->Html->link(__('Crear usuario'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box content">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lista de usuarios'); ?></h3>

          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <!-- <input type="text" name="table_search" class="form-control pull-right" placeholder="<?php echo __('Search'); ?>">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div> -->
              </div>
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table id="table_users" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">Id </th>
                  <th scope="col">Nombre </th>
                  <th scope="col">Dni </th>
                  <th scope="col">Ruc </th>
                  <th scope="col">Direccion </th>
                  <th scope="col">Celular </th>
                  <th scope="col">Telefono </th>
                  <th scope="col">Email </th>
                  <!-- <th scope="col">password </th> -->
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= $this->Number->format($user->id) ?></td>
                  <td><?= h($user->nombre) ?></td>
                  <td><?= h($user->dni) ?></td>
                  <td><?= h($user->ruc) ?></td>
                  <td><?= h($user->direccion) ?></td>
                  <td><?= h($user->celular) ?></td>
                  <td><?= h($user->telefono) ?></td>
                  <td><?= h($user->email) ?></td>
                  <!-- <td><?= h($user->password) ?></td> -->
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class'=>'btn btn-danger btn-xs']) ?>
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

