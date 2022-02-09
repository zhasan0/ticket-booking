<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:40px">
            <div class="col-md-8">
                <h4>Dashboard</h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>v</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $loggedUser['name']; ?></td>
                            <td><?php echo $loggedUser['email']; ?></td>
                            <td><a href="<?php echo site_url('auth/logout'); ?>">L</a></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</body>
</html>