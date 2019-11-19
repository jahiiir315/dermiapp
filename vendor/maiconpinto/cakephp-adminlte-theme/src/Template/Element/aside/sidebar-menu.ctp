<ul class="sidebar-menu" data-widget="tree">
  <li class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Administrar</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/clientes'); ?>"><i class="fa fa-circle-o"></i> Clientes</a></li>
      <li><a href="<?php echo $this->Url->build('/empleados'); ?>"><i class="fa fa-circle-o"></i>Empleados</a></li>
      <li><a href="<?php echo $this->Url->build('/doctores'); ?>"><i class="fa fa-circle-o"></i>Doctores</a></li>
      <?php if($current_user['role'] === 'admin'): ?>
        <li><a href="<?php echo $this->Url->build('/membresias'); ?>"><i class="fa fa-circle-o"></i>Membresias</a></li>
        <li><a href="<?php echo $this->Url->build('/users'); ?>"><i class="fa fa-circle-o"></i>Usuarios</a></li>
      <?php endif ?>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-laptop"></i> <span>Asesorias</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo $this->Url->build('/doctoresUsers'); ?>"><i class="fa fa-circle-o"></i>Asesoria medica</a></li>
      <li><a href="<?php echo $this->Url->build('/empleadosUsers'); ?>"><i class="fa fa-circle-o"></i>Asesoria web</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo $this->Url->build('/clientesUsers'); ?>">
      <i class="fa fa-heartbeat"></i> <span>Diagnosticar</span>
    </a>
  </li>
  <li>
    <a href="<?php echo $this->Url->build('/membresiasUsers'); ?>">
      <i class="fa fa-ambulance"></i> <span>Adquirir membresias</span>
    </a>
  </li>
  <!-- <li><a href="<?php echo $this->Url->build('/pages/debug'); ?>"><i class="fa fa-bug"></i> <span>Debug</span></a></li> -->
</ul>