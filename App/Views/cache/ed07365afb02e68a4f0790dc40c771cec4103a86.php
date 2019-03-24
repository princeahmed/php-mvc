<?php /* C:\xampp\htdocs\mvc\App\Views/layouts/app.blade.php */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/<?php echo $assets['frontend']['css'] ?>">

    <title><?php echo $__env->yieldContent('title', 'Write PHP likes a Pro'); ?> </title>
</head>
<body>

<!--Header-->
<?php $__env->startSection('header'); ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <nav class="navbar">

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
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg-green">
                <?php $__env->startSection('main'); ?>
                    <h2 id="body-title" class="text-center text-primary">This is main body</h2>
                <?php echo $__env->yieldSection(); ?>
            </div>
            <div class="col-md-4">
                <?php $__env->startSection('sidebar'); ?>
                    <h3 class="title text-center text-danger">Sidebar Content</h3>
                <?php echo $__env->yieldSection(); ?>
            </div>
        </div>
    </div>
<?php echo $__env->yieldSection(); ?>


<!--Footer-->


<?php $__env->startSection('footer'); ?>
    <h3>App Footer</h3>
<?php echo $__env->yieldSection(); ?>


<!--Footer-->


<!--Body Script-->
<script src="assets/<?php echo $assets['frontend']['js'] ?>"></script>

</body>
</html>