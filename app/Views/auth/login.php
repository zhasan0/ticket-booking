<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="login_area">
                <div class="header text-center mb-3">
                    <h4 class="text-uppercase">Sign In</h4>
                </div>
                <div class="body">
                    <form action="<?php echo base_url('auth/loginCheck'); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                            <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
                        <?php endif ?>
                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
                        <?php endif ?>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp" value="<?php echo set_value('email'); ?>">
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'email') : '' ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                   value="<?php echo set_value('password'); ?>">
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'password') : '' ?></span>
                        </div>
                        <div class="com-md-12">
                            <div class="login_btn text-md-end">
                                <button type="submit" class="btn btn-primary text-uppercase">Login</button>
                            </div>
                        </div>

                        <p class="mt-5">Not yet registered! <a href=" <?php echo route_to('register') ?>" class="">Create account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>