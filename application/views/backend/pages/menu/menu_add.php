<?= form_open('admin/menu'); ?>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Menu</label>
        <input type="text" class="form-control" name="menu" autocomplete="off" required placeholder="Cth . Menu">
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Link</label>
        <input type="text" class="form-control" name="link" autocomplete="off" required placeholder="Cth. admin/dashboard">
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Controller</label>
        <input type="text" class="form-control" name="controller" autocomplete="off" required placeholder="Cth. dashboard">
    </div>
      <div class="mb-2">
        <label for="employeeName" class="form-label">Icon</label>
        <textarea name="icon" id="" class="form-control" required></textarea>
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Jenis</label>
        <select name="jenis" class="form-control  form-select" id="" required>
            <option value="">..::Pilih Jenis Menu::..</option>
            <option value="Master">Master</option>
            <option value="Laporan">Laporan</option>
            <option value="Transaksi">Transaksi</option>
        </select>
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>