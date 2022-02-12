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
        <form action="<?php echo site_url('ticketorigin/store'); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required
                           value="<?php echo set_value('name'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'name') : '' ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="company">Companies</label>
                    <select name="company" id="company" class="form-control">
                        <option value="0">Select Company</option>
                        <?php foreach ($companies as $company) { ?>
                            <option value="<?= $company['id'] ?>"><?= $company['name'] ?></option>
                        <?php } ?>
                    </select>
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'company') : '' ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="from">From</label>
                    <input type="text" name="from" id="from" class="form-control" required
                           value="<?php echo set_value('from'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'from') : '' ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="from">To</label>
                    <input type="text" name="to" id="to" class="form-control" required
                           value="<?php echo set_value('to'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'to') : '' ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="fly_date">Fly Date</label>
                    <input type="date" name="fly_date" id="fly_date" class="form-control" required
                           value="<?php echo set_value('fly_date'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'fly_date') : '' ?></span>
                </div>
                <div class="col-md-6">
                    <label for="from">Purchase Price</label>
                    <input type="text" name="purchase_price" id="purchase_price" class="form-control" required
                           value="<?php echo set_value('purchase_price'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'purchase_price') : '' ?></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="sale_price">Sale Price</label>
                    <input type="text" name="sale_price" id="sale_price" class="form-control" required
                           value="<?php echo set_value('sale_price'); ?>">
                    <span class="text-danger"><?php echo isset($validation) ? display_error($validation, 'sale_price') : '' ?></span>
                </div>
                <div class="col-md-12">
                    <label for="status">Status</label>
                    <input type="checkbox" name="status" id="status" <?php if (set_value('status') == 1) echo "checked"?> checked>
                </div>
                <div class="com-md-12 text-md-end">
                    <button type="submit" class="btn btn-success mt-3">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
