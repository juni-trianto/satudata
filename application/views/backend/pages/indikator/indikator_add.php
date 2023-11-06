<?= form_open('admin/indikator'); ?>
 <input type="hidden" name="kode_organisasi" value="<?= $param2 ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Kategori</label>
        <select name="kategori_indikator_id" class="form-select form-control" required>
            <option value="">..::Pilih Kategori::..</option>
            <?php foreach($this->db->select('id,kategori')->get_where('m_kategori_indikator',['deleted_at' => null ])->result_array() as $kategori): ?>
                <option value="<?= $kategori['id']; ?>"><?= $kategori['kategori']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Urusan</label>
        <select name="urusan_id" class="form-select form-control" required>
            <option value="">..::Pilih Kategori::..</option>
            <?php foreach($this->db->select('id,urusan')->get_where('m_urusan',['deleted_at' => null ])->result_array() as $urusan): ?>
                <option value="<?= $urusan['id']; ?>"><?= $urusan['urusan']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Indikator</label>
        <input type="text" class="form-control" name="indikator" autocomplete="off" required >
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Satuan</label>
        <input type="text" class="form-control" name="satuan" autocomplete="off" required >
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Kode Urusan</label>
        <input type="text" class="form-control" name="kode_urusan" autocomplete="off" required >
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>