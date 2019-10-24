<?php $__env->startSection('contenu'); ?>
    <?php echo Form::open(['url' => 'users']); ?>

        <?php echo Form::label('nom', 'Entrez votre nom : '); ?>

        <?php echo Form::text('nom'); ?>

        <?php echo Form::submit('Envoyer !'); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hymed\Desktop\Formation_PHP_2019\Wamp\www\test\resources\views/infos.blade.php ENDPATH**/ ?>