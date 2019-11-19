<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Membresias

    <div class="pull-right"><?php echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box content">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lista de membresias'); ?></h3>

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
          <table id="table_membresias" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($membresias as $membresia): ?>
                <tr>
                  <td><?= $this->Number->format($membresia->id) ?></td>
                  <td><?= h($membresia->nombre) ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $membresia->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?= $this->Html->link(__('Editar'), ['action' => 'edit', $membresia->id], ['class'=>'btn btn-warning btn-xs']) ?>
                      <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $membresia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membresia->id), 'class'=>'btn btn-danger btn-xs']) ?>
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