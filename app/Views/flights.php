<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="list">
    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
    <?php endif ?>
    <?php if (!empty(session()->getFlashdata('info'))) : ?>
        <div class="alert alert-info"><?php echo session()->getFlashdata('info'); ?></div>
    <?php endif ?>

    <table id="user_list" class="display" align="center" width="100%"
           bgcolor="#f0f8ff" cellpadding="20">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Biman Name</th>
            <th>Flaying From</th>
            <th>Flaying To</th>
            <th>Fly Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (empty($lists)) { ?>
            <tr>
                <td>No flight available</td>
            </tr>
            <?php
        } ?>
        <?php
        foreach ($lists as $key => $row) { ?>
            <!--                --><?php
            //dd($row);?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $row->name ?> </td>
                <td><?= $row->_from ?></td>
                <td><?= $row->_to ?></td>
                <td><?= $row->fly_date ?></td>
                <td><a href=<?php
                    echo site_url("order/booking/" . $row->id) ?>>Book</a></td>
            </tr>
            <?php
        } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
