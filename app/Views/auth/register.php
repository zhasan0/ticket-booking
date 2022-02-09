<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
               <h4>Sign Up</h4>
               <form action="<?php echo base_url('auth/save'); ?>" method="post">

               <?php echo csrf_field(); ?>

               <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
                <?php endif ?>
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
                <?php endif ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation,'name') : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                    value="<?php echo set_value('email'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation,'email') : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"value="<?php echo set_value('password'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation,'password') : '' ?></span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1"
                    value="<?php echo set_value('cpassword'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation,'cpassword') : '' ?></span>
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <br>
                <br>
                <a href="<?php echo site_url('auth') ?>">Already Have account ?</a>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>