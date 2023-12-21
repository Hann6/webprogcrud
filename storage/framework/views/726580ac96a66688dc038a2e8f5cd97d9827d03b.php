<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>
    <form method = "post" action="<?php echo e(route('update', ['index' => $index])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
        <div>
            <label> ID:  </label>
            <input type="number" name = "id" placeholder="ID" value = "<?php echo e($index->id); ?>"/>
        </div>

        <div>
            <label> Name:  </label>
            <input type="text" name = "name" placeholder="Name" value = "<?php echo e($index->name); ?>"/>
        </div>

        <div>
            <label> Age:  </label>
            <input type="number" name = "age" placeholder="Age" value = "<?php echo e($index->age); ?>"/>
        </div>

        <div>
            <input type="submit" value="UPDATE">
        </div>

    </form>
</body>
</html><?php /**PATH C:\HANS\Kuliah\Sem 5\latihan\Laravel Final\latHans\resources\views/edit.blade.php ENDPATH**/ ?>