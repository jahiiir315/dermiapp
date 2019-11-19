<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Diagnosticos

<?php if($current_user['role'] === 'user' ): ?>
  <!-- Si esta usando la normal -->
  <?php if(isset($membresiaActiva)): ?>
    <?php if($membresiaActiva['membresia_id'] === 1): ?>
        <div class="pull-right"><?php  echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
    <?php else: ?>
        <div class="pull-right"><?php  echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
    <?php endif ?>
  <?php else: ?>
  <?php endif ?>
<?php else: ?>
  <div class="pull-right"><?php  echo $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class'=>'btn btn-success btn-xs']) ?></div>
<?php endif ?>

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
              Usted tiene intentos ilimitados</div>
      </section>
    <?php endif ?>
  <?php else: ?>
    <section class="content-header">
          <div class="alert alert-danger alert-dismissible">
              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
              <h4><i class="icon fa fa-check"></i>Aviso</h4>
              Su version gratuita ha finalizado</div>
      </section>
  <?php endif ?>
<?php endif ?>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box content">
        <div class="box-header">
          <h3 class="box-title"><?php echo __('Lisra de diagnosticos'); ?></h3>

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
          <table id="table_diagnosticos" class="table table-hover">
            <thead>
              <tr>
                  <th scope="col">ID</th>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <th scope="col">User</th>
                  <?php endif ?>
                  <th scope="col">Cliente</th>
                  <th scope="col">Prob. benigno</th>
                  <th scope="col">Prob. maligno</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Foto</th>
                  <th scope="col" class="actions text-center"><?= __('Acciones') ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($clientesUsers as $clientesUser): ?>
                <tr>
                  <td><?= $this->Number->format($clientesUser->id) ?></td>
                  <?php if($current_user['role'] === 'admin'): ?>
                    <td><?= $clientesUser->has('user') ? $this->Html->link($clientesUser->user->email, ['controller' => 'Users', 'action' => 'view', $clientesUser->user->id]) : '' ?></td>
                  <?php endif ?>
                  <td><?= $clientesUser->has('cliente') ? $this->Html->link($clientesUser->cliente->get('label'), ['controller' => 'Clientes', 'action' => 'view', $clientesUser->cliente->id]) : '' ?></td>
                  <td><?= $this->Number->format($clientesUser->probbenigno) ?></td>
                  <td><?= $this->Number->format($clientesUser->probmaligno) ?></td>
                  <td><?= h($clientesUser->descripcion) ?></td>
                  <!-- <td><?= h($clientesUser->photo) ?></td> -->
                  <td><?= $this->Html->image('../files/clientesusers/photo/'.$clientesUser->photodir.'/square_'.$clientesUser->photo, ['alt' => $clientesUser->descripcion, 'weight'=>55, 'height'=>55]); ?></td>
                  <td class="actions text-right">
                      <?= $this->Html->link(__('Ver'), ['action' => 'view', $clientesUser->id], ['class'=>'btn btn-info btn-xs']) ?>
                      <?php if($current_user['role'] === 'admin'): ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $clientesUser->id], ['class'=>'btn btn-warning btn-xs']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $clientesUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientesUser->id), 'class'=>'btn btn-danger btn-xs']) ?>
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