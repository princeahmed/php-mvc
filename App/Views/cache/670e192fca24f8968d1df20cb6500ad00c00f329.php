<?php /* C:\xampp\htdocs\mvc\App\Views/home/index.blade.php */ ?>
<?php $__env->startSection('body'); ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="box main">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem
                        consectetur
                        eaque error eum
                        excepturi expedita laborum magni minus natus, nemo nulla odio, provident quae quam quasi quidem
                        quis
                        tempora.
                        excepturi expedita laborum magni minus natus, nemo nulla odio, provident quae quam quasi quidem
                        quis
                        tempora.
                    </div>
                </div>
                <div class="col-4">
                    <div class="box sidebar">
                        <div class="card">
                            <div class="card-left">
                                <div class="label">
                                    <a href="#" class="">PHP</a>
                                </div>
                                <div class="thumb">
                                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/0/09/Circle_Logo.svg/1200px-Circle_Logo.svg.png" alt="">
                                </div>
                                <div class="category">
                                    <span>Intermediate Difficulty</span>
                                </div>
                            </div>
                            <div class="card-right">
                                <h3 class="title">Testing Prince</h3>
                                <div class="content">
                                    <p>Adipiscuibusdam quidem quis sequi sit soluta suscipit temporibus, vel veritatis vero?</p>
                                </div>
                                <div class="meta">
                                    <span>5 Lessons</span>
                                    <span>53:00 Min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, asperiores doloribus
                    exercitationem libero magnam nobis quae quia sed voluptates voluptatum. Deserunt eaque eum, expedita
                    illo itaque odio quasi quis unde.
                </div>
                <div class="col-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consequatur debitis
                    distinctio dolorem, dolorum est impedit in iusto libero, molestias nemo neque numquam officiis quod
                    reiciendis tempora unde vel, voluptas?
                </div>
                <div class="col-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure modi placeat qui quos
                    veritatis. Animi consequatur doloribus earum error ex inventore ipsam molestias nemo obcaecati quae,
                    quibusdam quos unde voluptatum.
                </div>
                <div class="col-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda atque
                    dolorum earum explicabo impedit ipsa iusto molestias nulla odio, quaerat quis ratione recusandae
                    reiciendis repudiandae voluptas voluptates. Qui, quod?
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>