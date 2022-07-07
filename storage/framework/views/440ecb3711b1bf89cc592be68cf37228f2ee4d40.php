<?php $__env->startSection("titulo", "Productos"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="row">
        <div class="col-12">
            <h1>Productos <i class="fa fa-box"></i></h1>
            <a href="<?php echo e(route("productos.create")); ?>" class="btn btn-success mb-2">Agregar</a>
            <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Código de barras</th>
                        <th>Descripción</th>
                        <th>Precio de compra</th>
                        <th>Precio de venta</th>
                        <th>Utilidad</th>
                        <th>Existencia</th>

                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($producto->codigo_barras); ?></td>
                            <td><?php echo e($producto->descripcion); ?></td>
                            <td><?php echo e($producto->precio_compra); ?></td>
                            <td><?php echo e($producto->precio_venta); ?></td>
                            <td><?php echo e($producto->precio_venta - $producto->precio_compra); ?></td>
                            <td><?php echo e($producto->existencia); ?></td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo e(route("productos.edit",[$producto])); ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route("productos.destroy", [$producto])); ?>" method="post">
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

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/productos/productos_index.blade.php ENDPATH**/ ?>