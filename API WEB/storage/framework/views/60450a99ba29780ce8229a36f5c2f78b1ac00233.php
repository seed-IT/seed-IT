<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mon joli site</title>
		<?php echo Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'); ?>

		<?php echo Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css'); ?>

		<!--[if lt IE 9]>
			<?php echo e(Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js')); ?>

			<?php echo e(Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')); ?>

		<![endif]-->
		<style> textarea { resize: none; } </style>
	</head>
	<body>
		<?php echo $__env->yieldContent('contenu'); ?>
	</body>
</html><?php /**PATH C:\Users\Hymed\Desktop\Formation_PHP_2019\Wamp\www\test\resources\views/template.blade.php ENDPATH**/ ?>