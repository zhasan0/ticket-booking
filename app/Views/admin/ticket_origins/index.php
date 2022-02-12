<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="list">
    <table id="user_list" class="display" width="100%">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Name</th>
            <th>From</th>
            <th>To</th>
            <th>Fly Date</th>
            <th>Purchase Price</th>
            <th>Sale Price</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lists as $key => $row) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td> <?= $row['name'] ?> </td>
                <td><?= $row['from'] ?></td>
                <td><?= $row['to'] ?></td>
                <td><?= $row['fly_date'] | date("d, m,YYYY") ?></td>
                <td><?= $row['purchase_price'] ?></td>
                <td><?= $row['sale_price'] ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
