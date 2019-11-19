<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        
        <?php //$this->fetch('title') ?>
        <?php echo 'Dermiapp' ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php
        echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('clientes');
		echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
		echo $this->Html->css('style');
    ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div id="container">
	</div>
	<div class="content">
		<?php echo $this->fetch('content'); ?>
	</div>
    <?php
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('jquery.easing.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('custom');
    ?>
</body>
</html>
    <!-- <script>
    $(document).ready( function () {
        $('#table_users').DataTable();
    } );
    </script> -->
