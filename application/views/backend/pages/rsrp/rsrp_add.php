<?= form_open('admin/rsrp'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Start</label>
        <input type="number" class="form-control" name="start" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Finish</label>
        <input type="number" class="form-control" name="finish" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Color</label>
        <input type="text" class="form-control" name="color" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Color</label>
        <input type="text" class="form-control" name="information" autocomplete="off" required >
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>