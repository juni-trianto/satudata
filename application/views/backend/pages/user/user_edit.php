<?php $data = $this->db->get_where('users',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/user/update'); ?>
<input type="hidden" name="id" value="<?= $data['id']; ?>">
    <div class="mb-1">
        <label for="employeeName" class="form-label">Provider</label>
        <select name="kode_organisasi" class="form-control  form-select" id="" required>
            <option value="">..::Provider::..</option>
            <?php foreach($this->db->get('m_organisasi',['deleted_at' => null])->result_array() as $provider): ?>
                <option value="<?= $provider['kode_organisasi'] ?>" <?php if($data['kode_organisasi'] == $provider['kode_organisasi']){ echo'selected'; } ?>><?= $provider['organisasi']; ?></option>
            <?php endforeach; ?>
        </select>
            </div>
    <div class="mb-1">
        <label for="employeeName" class="form-label">nama_lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" autocomplete="off" required >
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">No Hp</label>
        <input type="number" class="form-control" value="<?= $data['no_hp'] ?>" name="no_hp" autocomplete="off" required >
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">Email</label>
        <input type="email" class="form-control" value="<?= $data['email'] ?>" name="email" autocomplete="off" required >
    </div>
      <div class="mb-1">
        <label for="employeeName" class="form-label">Username</label>
        <input type="text" class="form-control" value="<?= $data['username'] ?>" name="username" autocomplete="off" required >
    </div>
      <div class="mb-1">
        <label for="employeeName" class="form-label">Password</label>
        <input type="password" class="form-control" value="" name="password" autocomplete="off" >
        <small class="text-danger">*jika password di ubah maka di isi.</small>
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">Active</label>
        <select name="active" class="form-control  form-select" id="" required>
            <option value="">..::Pilih::..</option>
            <option <?php if($data['active'] == 1){ echo'selected'; } ?> value="1">Aktif</option>
            <option <?php if($data['active'] == 99){ echo'selected'; } ?> value="99">Tidak Aktif</option>
        </select>
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
<?= form_close(); ?>