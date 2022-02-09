<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <div class="container">
        <div class="register_area">
            <div class="header text-center">
                <h4 class="text-uppercase">Sign Up</h4>
            </div>
            <div class="body">
                <form action="<?php echo base_url('auth/registrationCheck'); ?>" method="post">

                    <?php echo csrf_field(); ?>

                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id=""
                                   aria-describedby="emailHelp" value="<?php echo set_value('name'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'name') : '' ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id=""
                                   value="<?php echo set_value('email'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'email') : '' ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id=""
                                   value="<?php echo set_value('phone'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'phone') : '' ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" class="form-control" id=""
                                   value="<?php echo set_value('country'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'country') : '' ?></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id=""
                                   value="<?php echo set_value('password'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'password') : '' ?></span>
                        </div>
                        <div class="col-md-6">
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id=""
                                   value="<?php echo set_value('cpassword'); ?>" required>
                            <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                        </div>
                    </div>

                    <div class="com-md-12">
                        <div class="register_btn text-md-end">
                            <button type="submit" class="btn btn-primary text-uppercase">Register</button>
                        </div>
                    </div>
                    <p class="mt-5">Already Have Account? <a href="<?php echo site_url('auth') ?>">Login Here</a></p>
                </form>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>