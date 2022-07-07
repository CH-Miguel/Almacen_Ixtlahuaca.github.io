<?php $__env->startSection("titulo", "Inicio"); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="col-12 text-center">
        <h1>Bienvenido, <?php echo e(Auth::user()->name); ?></h1>
    </div>
    <?php $__currentLoopData = [
    ["productos", "ventas", "vender", "clientes"],
    ["usuarios", "acerca_de", "soporte"]
    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 pb-2">
            <div class="row">
                <?php $__currentLoopData = $modulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo e(url("/img/$modulo.png")); ?>">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo e($modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)); ?>

                                </h5>
                                <a href="<?php echo e(route("$modulo.index")); ?>" class="btn btn-success">
                                    Ir a&nbsp;<?php echo e($modulo === "acerca_de" ? "Acerca de" : ucwords($modulo)); ?>

                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('maestra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/home.blade.php ENDPATH**/ ?>