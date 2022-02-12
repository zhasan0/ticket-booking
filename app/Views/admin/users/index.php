<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="list">
    <table id="user_list" class="display" width="100%">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Country</th>
            <th>Type</th>
<!--            <th>Action</th>-->
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lists as $key => $row) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td> <?= $row['name'] ?> </td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['country'] ?></td>
                <td><?= $row['type'] ?></td>
<!--                <td>Hello</td>-->
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
