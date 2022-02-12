<?= $this->extend('admin/admin_base') ?>

<?= $this->section('content') ?>
<div class="create">
    <div class="form">
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?php echo session()->getFlashdata('fail'); ?></div>
            <br>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?php echo session()->getFlashdata('success'); ?></div>
            <br>
        <?php endif ?>
        <form action="<?php echo site_url('company/store'); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'name') : '' ?></span>
                </div>
                <div class="col-md-12 mt-3">
                    <label for="location">Address</label>
                    <textarea name="location" id="location" rows="5" class="form-control" required><?php echo set_value('location'); ?></textarea>
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'location') : '' ?></span>
                </div>
                <div class="com-md-12 text-md-end">
                    <button type="submit" class="btn btn-success mt-3">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
