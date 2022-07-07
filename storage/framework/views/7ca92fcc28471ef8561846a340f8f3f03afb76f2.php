<?php $__env->startSection("titulo", "Usuarios"); ?>
<?php $__env->startSection("contenido"); ?>
    <div class="row">
        <div class="col-12">
            <h1>Usuarios <i class="fa fa-users"></i></h1>
            <a href="<?php echo e(route("usuarios.create")); ?>" class="btn btn-success mb-2">Agregar</a>
            <?php echo $__env->make("notificacion", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Correo electrónico</th>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($usuario->email); ?></td>
                            <td><?php echo e($usuario->name); ?></td>
                            <td>
                                <a class="btn btn-warning" href="<?php echo e(route("usuarios.edit",[$usuario])); ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="<?php echo e(route("usuarios.destroy", [$usuario])); ?>" method="post">
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

<?php echo $__env->make("maestra", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miaxh\laravel\Almacen_Ixtlahuaca\resources\views/usuarios/usuarios_index.blade.php ENDPATH**/ ?>