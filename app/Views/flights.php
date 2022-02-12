<?= $this->extend('base') ?>

<?= $this->section('content') ?>
<div class="list">
    <table id="user_list" class="display" align="center" width="80%"
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
                    echo site_url("book?ticket_id=" . $row->id) ?>>Book</a></td>
            </tr>
            <?php
        } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
