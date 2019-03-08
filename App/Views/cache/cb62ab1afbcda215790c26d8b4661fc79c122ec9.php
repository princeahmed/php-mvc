<?php /* C:\xampp\htdocs\mvc\App\Views/index.blade.php */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write PHP like a Pro</title>
</head>
<body>

<?php if(!empty($name)): ?>
    <h1>Hello <?php echo e($name); ?></h1>
<?php endif; ?>

<?php if(!empty($posts)): ?>
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <h1><?php echo e($post->title); ?></h1>
        <p><?php echo e($post->content); ?></p>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>No Post.</h1>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>