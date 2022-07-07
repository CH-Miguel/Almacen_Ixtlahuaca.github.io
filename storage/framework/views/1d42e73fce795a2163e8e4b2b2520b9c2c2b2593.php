<?php $__env->startSection("titulo", "Editar producto"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="row">
        <div class="col-12">
            <h1>Editar producto</h1>
            <form method="POST" action="<?php echo e(route("productos.update", [$producto])); ?>">
                <?php echo method_field("PUT"); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label class="label">Código de barras</label>
                    <input required value="<?php echo e($producto->codigo_barras); ?>" autocomplete="off" name="codigo_barras"
                           class="form-control"
                           type="text" placeholder="Código de barras">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required value="<?php echo e($producto->descripcion); ?>" autocomplete="off" name="descripcion"
                           class="form-control"
                           type="text" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required value="<?php echo e($producto->precio_compra); ?>" autocomplete="off" name="precio_compra"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Precio de venta</label>
                    <input required value="<?php echo e($producto->precio_venta); ?>" autocomplete="off" name="precio_venta"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de venta">
                </div>
                <div class="form-group">
                    <label class="label">Existencia</label>
                    <input required value="<?php echo e($producto->existencia); ?>" autocomplete="off" name="existencia"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Existencia">
                </div>

                <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="<?php echo e(route("productos.index")); ?>">Volver</a>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/productos/productos_edit.blade.php ENDPATH**/ ?>