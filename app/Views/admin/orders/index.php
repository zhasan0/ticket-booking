<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="list">
    <table id="user_list" class="display" width="100%">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Ticket Name</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Fly Date</th>
            <th>Order Time</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lists as $key => $row) { ?>
<!--                --><?php //dd($row);?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $row->ticket_name ?> </td>
                <td><?= $row->customer_name ?></td>
                <td><?= $row->customer_phone ?></td>
                <td><?= $row->fly_date ?></td>
                <td><?= $row->created_at ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
