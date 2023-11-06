<?php $data = $this->db->get_where('m_kategori_indikator',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/kategori/update'); ?>
<input type="hidden" name="id" value="<?= $param2 ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Kategori Indikator</label>
        <input type="text" class="form-control" name="kategori" autocomplete="off" required value="<?= $data['kategori'] ?>">
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
<?= form_close(); ?>