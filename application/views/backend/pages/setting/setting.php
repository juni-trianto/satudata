  <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/setting/setting_add') ?>')" class="mb-3 btn btn-success">
    + Tambah Data
</a>
<div class="card">
    <div class="card-body">
            <?= form_open('admin/setting'); ?>
            <?php foreach($this->db->get('setting')->result_array() as $row): ?>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-3 col-form-label"><?= $row['key'] ?></label>
                <div class="col-9">
                    <input type="text" class="form-control" name="<?= $row['key'] ?>" value="<?= $row['value'] ?>">
                </div>
            </div>
            <?php endforeach; ?>

            <div class="justify-content-end row">
                <div class="col-9">
                    <button type="submit" name="submit" class="btn btn-info">Update</button>
                </div>
            </div>
        <?= form_close(); ?>
    </div>
</div>