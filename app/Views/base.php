<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">

    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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