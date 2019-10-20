<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php //echo $this->fetch('title'); ?>
		<?php echo 'Dermiapp' ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('clientes');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('style');

		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
	</div>
	<div class="content">
		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>

	
<?php 
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('jquery.easing.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('custom');
	
 ?>
</body>

</html>
