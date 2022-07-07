<?php $__env->startSection("titulo", "Ventas"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="row">
        <div class="col-12">
            <h1>Ventas <i class="fa fa-list"></i></h1>
            <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <!-- <th>Cliente</th>-->
                        <th>Total</th>
                        <th>Ticket de venta</th>
                        <th>Detalles</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($venta->created_at); ?></td>
                           <!-- <td><?php echo e($venta->cliente->nombre); ?></td> -->
                            <td>$<?php echo e(number_format($venta->total, 2)); ?></td>
                            <td>
                                <a class="btn btn-info" href="<?php echo e(route("ventas.ticket", ["id"=>$venta->id])); ?>">
                                    <i class="fa fa-print"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="<?php echo e(route("ventas.show", $venta)); ?>">
                                    <i class="fa fa-info"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route("ventas.destroy", [$venta])); ?>" method="post">
                                    <?php echo method_field("delete"); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/ventas/ventas_index.blade.php ENDPATH**/ ?>