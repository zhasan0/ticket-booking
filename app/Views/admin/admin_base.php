<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('img/logo.png') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo base_url('css/sidebars.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/admin/style.css') ?>">
    <title>Dashboard</title>
</head>
<body>

<div class="">
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/"
               class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ms-md-auto text-white text-decoration-none">
                <img src="<?php echo base_url('img/logo.png') ?>" alt="logo" width="60">
                <span class="fs-4">Ticket Booking</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <?php if (session()->get('loggedUser')['type'] == "admin") { ?>
<!--                    <li>-->
<!--                        <a href="/dashboard" class="nav-link text-white">-->
<!--                            <svg class="bi me-2" width="16" height="16">-->
<!--                                <use xlink:href="#speedometer2"/>-->
<!--                            </svg>-->
<!--                            Dashboard-->
<!--                        </a>-->
<!--                    </li>-->
                <?php } ?>
                <li>
                    <a href="<?php echo site_url('order/index'); ?>" class="nav-link text-white">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"/>
                        </svg>
                        Orders
                    </a>
                </li>
                <?php if (session()->get('loggedUser')['type'] == "admin") { ?>
                    <li>
                        <a href="<?php echo site_url('company/index'); ?>" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid"/>
                            </svg>
                            Companies
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('ticketorigin/index'); ?>" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#people-circle"/>
                            </svg>
                            Ticket Origins
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('user/index'); ?>" class="nav-link text-white">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#people-circle"/>
                            </svg>
                            Customer
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                   id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('img/user_logo.png') ?>" alt="" width="32" height="32"
                         class="rounded-circle me-2">
                    <strong><?php echo session()->get('loggedUser')['name']; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="<?php echo site_url('auth/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <div class="page-header">
                <div class="title float-start">
                    <?php if (!empty($page_header)) {
                        echo "<h4>" . $page_header . "</h4>";
                    } else { ?>
                        <h4>Dashboard</h4>
                    <?php } ?>
                </div>
                <?php if (!empty($addLink)) { ?>
                    <div class="link float-end">
                        <a href="<?= $addLink ?>" class="btn btn-success">Add New</a>
                    </div>
                <?php } ?>
            </div>
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('js/admin/sidebars.js') ?>"></script>
<script src="<?php echo base_url('js/admin/index.js') ?>"></script>
</body>
</html>