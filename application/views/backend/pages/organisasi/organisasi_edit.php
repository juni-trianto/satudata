<?php $data = $this->db->get_where('m_organisasi',['kode_organisasi' => $param2 ])->row_array(); ?>
<?= form_open('admin/organisasi/update'); ?>
    <input type="hidden" name="kode_organisasi" value="<?= $param2 ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Organisasi</label>
        <input type="text" class="form-control" name="organisasi" autocomplete="off" required value="<?= $data['organisasi'] ?>" >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Nama Singkat</label>
        <input type="text" class="form-control" name="nama_singkat" autocomplete="off" required value="<?= $data['nama_singkat'] ?>">
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" autocomplete="off" required value="<?= $data['email'] ?>">
    </div>
    <div class="mb-2">
        <label for="employeeName" class="form-label">No Telp</label>
        <input type="text" class="form-control" name="no_telp" autocomplete="off" required value="<?= $data['no_telp'] ?>">
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">update</button>
    </div>
<?= form_close(); ?>