<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="list">
    <table id="user_list" class="display" width="100%">
        <thead>
        <tr>
            <th>SL#</th>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($lists as $key => $row) { ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td> <?= $row['name'] ?> </td>
                <td><?= $row['location'] ?></td>
                <td>Hello</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
