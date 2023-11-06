<?php $data = $this->db->get_where('m_indikator',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/indikator/indikator_update'); ?>
 <input type="hidden" name="id" value="<?= $param2 ?>">
 <input type="hidden" name="kode_organisasi" value="<?= $data['kode_organisasi'] ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Kategori</label>
        <select name="kategori_indikator_id" class="form-select form-control" required>
            <option value="">..::Pilih Kategori::..</option>
            <?php foreach($this->db->select('id,kategori')->get_where('m_kategori_indikator',['deleted_at' => null ])->result_array() as $kategori): ?>
                <option value="<?= $kategori['id']; ?>" <?php if($kategori['id'] == $data['kategori_indikator_id']){ echo'selected'; } ?>><?= $kategori['kategori']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Urusan</label>
        <select name="urusan_id" class="form-select form-control" required>
            <option value="">..::Pilih Kategori::..</option>
            <?php foreach($this->db->select('id,urusan')->get_where('m_urusan',['deleted_at' => null ])->result_array() as $urusan): ?>
                <option value="<?= $urusan['id']; ?>" <?php if($urusan['id'] == $data['urusan_id']){ echo'selected'; } ?>><?= $urusan['urusan']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Indikator</label>
        <input type="text" class="form-control" name="indikator" value="<?= $data['indikator'] ?>" autocomplete="off" required >
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Satuan</label>
        <input type="text" class="form-control" name="satuan" value="<?= $data['satuan'] ?>" autocomplete="off" required >
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Kode Urusan</label>
        <input type="text" class="form-control" name="kode_urusan" value="<?= $data['kode_urusan'] ?>" autocomplete="off" required >
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
<?= form_close(); ?>