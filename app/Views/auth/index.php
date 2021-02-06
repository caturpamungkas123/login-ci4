<?php $this->extend('auth/templet') ?>
<?php $this->section('content'); ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><?= lang('Auth.loginTitle') ?></h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form class="user" action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>

                                    <?php if ($config->validFields === ['email']) : ?>

                                        <div class="form-group">
                                            <input type="email" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php else : ?>

                                        <div class="form-group">
                                            <input type="text" name="login" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Ussername...">
                                            <div class="invalid-feedback">
                                                <?= session('errors.login') ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleInputPassword" placeholder="Password">
                                        <div class="invalid-feedback">
                                            <?= session('errors.password') ?>
                                        </div>
                                    </div>

                                    <?php if ($config->allowRemembering) : ?>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="customCheck" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck"><?= lang('Auth.rememberMe') ?></label>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>

                                <?php if ($config->allowRegistration) : ?>
                                    <div class="text-center">
                                        <a href="<?= route_to('register') ?>" class="small" href="register.html">Create an Account!</a>
                                    </div>
                                <?php endif; ?>
                                <?php if ($config->activeResetter) : ?>
                                    <div class="text-center">
                                        <a href="<?= route_to('forgot') ?>" class="small" href="register.html"><?= lang('Auth.forgotYourPassword') ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php $this->endSection(); ?>