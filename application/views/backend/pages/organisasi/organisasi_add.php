<?= form_open('admin/organisasi'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Organisasi</label>
        <input type="text" class="form-control" name="organisasi" autocomplete="off" required placeholder="Cth .Dinas Komunikasi dan Informatikan" >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Singkat</label>
        <input type="text" class="form-control" name="nama_singkat" autocomplete="off" required placeholder="Cth. Diskominfo">
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" autocomplete="off" required placeholder="Cth. diskonifo@example.com">
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">No Telp</label>
        <input type="text" class="form-control" name="no_telp" autocomplete="off" required placeholder="Cth. 0892302">
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>