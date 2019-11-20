<section class="content-header">
  <h1>
    Diagnosticos
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
          <div class="class-md-4">
            <section>
              <article class ="well">
              <p>
                <h4>
                  <strong>Cliente: </strong><?= $clientesUser->has('cliente') ? $this->Html->link($clientesUser->cliente->get('label'), ['controller' => 'Clientes', 'action' => 'view', $clientesUser->cliente->id]) : '' ?>
                </h4>
                <h4>
                  <strong>Descripcion: </strong> <?= h($clientesUser->descripcion) ?>
                </h4>
                <h4>
                  <strong>Probabilidad de ser benigno: </strong> <?= $this->Number->format($clientesUser->probbenigno) ?>
                </h4>
                <h4>
                  <strong>Probabilidad de ser maligno: </strong> <?= $this->Number->format($clientesUser->probmaligno) ?>
                </h4>
                <?php if($current_user === 'admin'): ?>
                  <h4>
                    <strong>Usuario: </strong> <?= $clientesUser->has('user') ? $this->Html->link($clientesUser->user->email, ['controller' => 'Users', 'action' => 'view', $clientesUser->user->id]) : '' ?>
                  </h4>
                <?php endif?>
              </p>
              <h4>
                <strong>Imagen: </strong>
              </h4>
                <td><?= $this->Html->image('../files/clientesusers/photo/'.$clientesUser->photodir.'/'.$clientesUser->photo, ['alt' => $clientesUser->descripcion, 'class'=>"img-responsive img-thmbnail center-block"]); ?></td>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
