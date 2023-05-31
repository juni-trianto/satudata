<?= form_open('admin/setting/setting_add'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Key</label>
        <input type="text" class="form-control" name="key" autocomplete="off" required placeholder="Cth . site_title">
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Value</label>
        <input type="text" class="form-control" name="value" autocomplete="off" required placeholder="Cth. Aplikasi Simkar">
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>