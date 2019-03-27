<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/<?php echo $assets['frontend']['css'] ?>">

    <title>@yield('title', 'Write PHP likes a Pro') </title>
</head>
<body>

<!--Header-->
@section('header')
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
@show

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg-green">
                @section('main')
                    <h2 id="body-title" class="text-center text-primary">This is main body</h2>
                @show
            </div>
            <div class="col-md-4">
                @section('sidebar')
                    <h3 class="title text-center text-danger">Sidebar Content</h3>
                @show
            </div>
        </div>
    </div>
@show


<!--Footer-->


@section('footer')
    <h3>App Footer</h3>
@show


<!--Footer-->


<!--Body Script-->
<script src="/assets/<?php echo $assets['frontend']['js'] ?>"></script>

</body>
</html>