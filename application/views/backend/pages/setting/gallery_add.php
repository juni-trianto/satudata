<?= form_open_multipart('admin/setting/gallery_add'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Image</label>
        <input type="file" class="form-control" name="userfile" required>
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>