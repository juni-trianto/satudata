<?= form_open('admin/urusan'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Urusan</label>
        <input type="text" class="form-control" name="urusan" autocomplete="off" required placeholder="Cth .Pendidikan" >
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>