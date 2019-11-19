<?php use Cake\Core\Configure; ?>
<nav class="navbar navbar-static-top">

  <?php if (isset($layout) && $layout == 'top'): ?>
  <div class="container">

    <div class="navbar-header">
      <a href="<?php echo $this->Url->build('/'); ?>" class="navbar-brand"><?php echo Configure::read('Theme.logo.large') ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <i class="fa fa-bars"></i>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
        </div>
      </form>
    </div>
    <!-- /.navbar-collapse -->
  <?php else: ?>

    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

  <?php endif; ?>



  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <li class="dropdown messages-menu">
       
        <ul class="dropdown-menu">
          <li class="header">You have 4 messages</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li><!-- start message -->
                <a href="#">
                  <div class="pull-left">
                    <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                  </div>
                  <h4>
                    Support Team
                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <!-- end message -->
              <li>
                <a href="#">
                  <div class="pull-left">
                    <?php echo $this->Html->image('user3-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                  </div>
                  <h4>
                    AdminLTE Design Team
                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <?php echo $this->Html->image('user4-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                  </div>
                  <h4>
                    Developers
                    <small><i class="fa fa-clock-o"></i> Today</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <?php echo $this->Html->image('user3-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                  </div>
                  <h4>
                    Sales Department
                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
              <li>
                <a href="#">
                  <div class="pull-left">
                    <?php echo $this->Html->image('user4-128x128.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>
                  </div>
                  <h4>
                    Reviewers
                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                  </h4>
                  <p>Why not buy a new awesome theme?</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="footer"><a href="#">See All Messages</a></li>
        </ul>
      </li>
      
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
          <span class="hidden-xs"><?= $current_user['nombre'] ?></span>
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>

            <p>
              <?= $current_user['nombre'] ?>
            </p>
          </li>
          <!-- Menu Body -->
          
          <!-- Menu Footer-->
          <li class="user-footer">
            
            <div class="pull-right">
              <?= $this->Html->link('Cerrar sesión',['controller'=>'users', 'action'=>'logout'], ['class'=>'btn btn-default btn-flat'])?>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <!-- <?php if (!isset($layout)): ?>
      li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li><
      <?php endif; ?> -->
    </ul>
  </div>

  <?php if (isset($layout) && $layout == 'top'): ?>
  </div>
  <?php endif; ?>
</nav>