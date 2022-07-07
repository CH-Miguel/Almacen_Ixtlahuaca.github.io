
<?php if(session("mensaje")): ?>
    <div class="alert alert-<?php echo e(session('tipo') ? session("tipo") : "info"); ?>">
        <?php echo e(session('mensaje')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/notificacion.blade.php ENDPATH**/ ?>