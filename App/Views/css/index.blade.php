@extends('layouts.app')

@section('header')
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="logo-box">
                        <img src="../assets/logo.png" alt="Prince" class="logo">
                    </div>

                    <div class="hero-title">
                        <h1>
                            <span class="main-title">PRINCE</span>
                            <span class="sub-title">PHP WORDPRESS DEVELOPER</span>
                        </h1>
                    </div>

                    <div class="hero-action">
                        <a href="#" class="action-btn">GET STARTED</a>
                        <a href="#" class="action-btn-2">CONTACT</a>
                    </div>

                </div>
            </div>
        </div>
    </header>
@endsection

@section('body')
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title">We Develop Things, That Work</h1>
                </div>
                <div class="col-6">
                    <div class="images-box">
                        <img src="assets/placeholder.jpg" class="img-1" alt="">
                        <img src="assets/placeholder.jpg" class="img-2" alt="">
                        <img src="assets/placeholder.jpg" class="img-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection