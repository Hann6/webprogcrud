<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        <?php if(session()->has('success')): ?>
            <div><?php echo e(session('success')); ?></div>
        <?php endif; ?>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
        </thead>
        <tbody>
            <?php $__currentLoopData = $index; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index->id); ?></td>
                    <td><?php echo e($index->name); ?></td>
                    <td><?php echo e($index->age); ?></td>
                    <td>
                        <a href="<?php echo e(route('edit', ['index' => $index])); ?>">Edit</a>
                    </td>
                <td>
                    <form method = "post" action="<?php echo e(route('delete', ['index' => $index])); ?>"> 
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value = "Delete" />
                    </form>
                </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\HANS\Kuliah\Sem 5\latihan\Laravel Final\latHans\resources\views/index.blade.php ENDPATH**/ ?>