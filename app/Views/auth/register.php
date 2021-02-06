<?php $this->extend('auth/templet'); ?>
<?php $this->section('content'); ?>
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col mx-5">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="user" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>


                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" placeholder="Email Address" value="<?= old('email') ?>">
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" value="<?= old('username') ?>" placeholder="Ussername">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="exampleInputPassword" placeholder="Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 mb-3 mb-sm-0">
                                    <input type="password" name="pass_confirm" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a href="<?php echo base_url() ?>/login/login" class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endSection(); ?>