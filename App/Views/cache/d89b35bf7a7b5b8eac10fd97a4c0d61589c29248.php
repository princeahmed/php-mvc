<?php /* C:\xampp\htdocs\mvc\App\Views////master.blade.php */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

<!--Header-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startSection('header'); ?>
                <nav class="navbar navbar-expand-sm bg-light">

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                        </li>
                    </ul>

                </nav>
            <?php $__env->stopSection(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php $__env->startSection('main'); ?>

            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('sidebar'); ?>

            <?php $__env->stopSection(); ?>
        </div>
    </div>
</div>


<!--Footer-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startSection('footer'); ?>
            <?php $__env->stopSection(); ?>
        </div>
    </div>
</div>

</body>
</html>