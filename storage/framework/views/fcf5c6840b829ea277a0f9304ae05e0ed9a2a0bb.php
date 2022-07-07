<?php $__env->startSection("titulo", "Detalle de venta "); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="row">
        <div class="col-12">
            <h1>Detalle de venta #<?php echo e($venta->id); ?></h1>
            <h1>Cliente: <small><?php echo e($venta->cliente->nombre); ?></small></h1>
            <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <a class="btn btn-info" href="<?php echo e(route("ventas.index")); ?>">
                <i class="fa fa-arrow-left"></i>&nbsp;Volver
            </a>
            <a class="btn btn-success" href="<?php echo e(route("ventas.ticket", ["id" => $venta->id])); ?>">
                <i class="fa fa-print"></i>&nbsp;Ticket
            </a>
            <h2>Productos</h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Código de barras</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $venta->productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producto->descripcion); ?></td>
                        <td><?php echo e($producto->codigo_barras); ?></td>
                        <td>$<?php echo e(number_format($producto->precio, 2)); ?></td>
                        <td><?php echo e($producto->cantidad); ?></td>
                        <td>$<?php echo e(number_format($producto->cantidad * $producto->precio, 2)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3"></td>
                    <td><strong>Total</strong></td>
                    <td>$<?php echo e(number_format($total, 2)); ?></td>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/ventas/ventas_show.blade.php ENDPATH**/ ?>