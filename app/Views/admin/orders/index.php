<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="list">
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
        <br>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
        <br>
    <?php endif ?>
    <table id="user_list" class="display" width="100%">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Ticket Name</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Country</th>
            <th>Fly Date</th>
            <th>Order Time</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lists as $key => $row) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $row->ticket_name ?> </td>
                <td><?= $row->customer_name ?></td>
                <td><?= $row->customer_phone ?></td>
                <td><?= $row->customer_country ?></td>
                <td><?= $row->fly_date ?></td>
                <td><?= $row->created_at ?></td>
                <td><?php if ($row->active == 1) {
                        echo "Processing";
                    } elseif ($row->active == 2) {
                        echo "Approve";
                    } else {
                        echo "Cancel";
                    } ?></td>
                <td>
                    <?php if (!empty(session()->get('loggedUser')) && session()->get('loggedUser')['type'] == "admin") { ?>
                        <?php if ($row->active != 2) { ?>
                            <a href="<?php
                            echo site_url("order/approve/" . $row->id) ?>" class="btn btn-success">
                                <i class="fa-solid fa-check"></i>
                            </a>
                        <?php }
                    } ?>
                    <?php if ($row->active != 3) { ?>
                        <a href="<?php
                        echo site_url("order/cancel/" . $row->id) ?>" class="btn btn-danger">
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
