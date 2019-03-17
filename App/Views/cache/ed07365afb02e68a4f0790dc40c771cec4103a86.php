<?php /* C:\xampp\htdocs\mvc\App\Views/layouts/app.blade.php */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/assets/production/<?php echo $assets['frontend']['css'] ?>">

    <title><?php echo $__env->yieldContent('title', 'Write PHP likes a Pro'); ?> </title>
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
                            <a class="nav-link" href="/">Home</a>
                        </li>
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
            <?php echo $__env->yieldSection(); ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 bg-green">
            <?php $__env->startSection('main'); ?>
                <h2 id="body-title" class="text-center text-primary">This is main body</h2>
            <?php echo $__env->yieldSection(); ?>
        </div>
        <div class="col-md-4">
            <?php $__env->startSection('sidebar'); ?>
                <h3 class="text-center text-danger">Sidebar Content</h3>
            <?php echo $__env->yieldSection(); ?>
        </div>
    </div>
</div>


<!--Footer-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php $__env->startSection('footer'); ?>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">First item</li>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">First item</li>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group list-group-primary">
                            <li class="list-group-item">First item</li>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                    </div>
                </div>
            <?php echo $__env->yieldSection(); ?>
        </div>
    </div>
</div>

<!--Body Script-->
<script src="./assets/production/<?php echo $assets['frontend']['js'] ?>"></script>

</body>
</html>