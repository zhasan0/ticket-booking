<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ticket Booking</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">

</head>

<body>
<div id="booking" class="section">
    <div class="auth_area">
        <div class="container">
            <a class="btn btn-primary" href="<?php echo site_url('/'); ?>">Home</a> &nbsp
            <a class="btn btn-primary" href="<?php echo site_url('auth'); ?>">Login</a> &nbsp
            <a class="btn btn-primary" href="<?php echo site_url('auth/register'); ?>">Register</a>
        </div>
    </div>
    <div class="section-center">
        <?= $this->renderSection('content') ?>
    </div>
</div>

</body>

</html>