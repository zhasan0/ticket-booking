<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
    <div class="dashboard">
        <div class="row">
            <div class="col-md-4">
                <div class="box bg-1">
                    <div class="box-content ">
                        <h5 class="text-uppercase">Total Orders</h5>
                        <span>20</span>
                    </div>
                    <div class="box-footer">
                        <a href="<?php echo site_url('order/index'); ?>">See All Orders</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box bg-2">
                    <div class="box-content">
                        <h5 class="text-uppercase">Total Tickets</h5>
                        <span>20</span>
                    </div>
                    <div class="box-footer">
                        <a href="<?php echo site_url('ticketorigin/index'); ?>">See All Tickets</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box bg-3">
                    <div class="box-content">
                        <h5 class="text-uppercase">Total Customers</h5>
                        <span>20</span>
                    </div>
                    <div class="box-footer">
                        <a href="<?php echo site_url('user/index'); ?>">See All Customers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
