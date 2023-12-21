<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <form method = "post" action="<?php echo e(route('store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label> ID:  </label>
            <input type="number" name = "id" placeholder="ID" />
        </div>

        <div>
            <label> Name:  </label>
            <input type="text" name = "name" placeholder="Name" />
        </div>

        <div>
            <label> Age:  </label>
            <input type="number" name = "age" placeholder="Age" />
        </div>

        <div>
            <input type="submit" value="SAVE">
        </div>

    </form>
</body>
</html><?php /**PATH C:\HANS\Kuliah\Sem 5\latihan\Laravel Final\latHans\resources\views/create.blade.php ENDPATH**/ ?>