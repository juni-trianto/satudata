<?= form_open('admin/user'); ?>
   <div class="mb-1">
        <label for="employeeName" class="form-label">Organisasi</label>
        <select name="kode_organisasi" class="form-control  form-select" id="" required>
            <option value="">..::Pilih::..</option>
            <?php foreach($this->db->get_where('m_organisasi',['deleted_at' => null])->result_array() as $provider): ?>
                <option value="<?= $provider['kode_organisasi'] ?>"><?= $provider['organisasi']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-1">
        <label for="employeeName" class="form-label">nama_lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required placeholder="Nama Lengkap">
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">No Hp</label>
        <input type="number" class="form-control" name="no_hp" autocomplete="off" required placeholder="No Hp">
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" autocomplete="off" required placeholder="Email">
    </div>
      <div class="mb-1">
        <label for="employeeName" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" autocomplete="off" required placeholder="Username">
    </div>
      <div class="mb-1">
        <label for="employeeName" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" autocomplete="off" required placeholder="Password">
    </div>
     <div class="mb-1">
        <label for="employeeName" class="form-label">Active</label>
        <select name="active" class="form-control  form-select" id="" required>
            <option value="">..::Pilih::..</option>
            <option value="1">Aktif</option>
            <option value="99">Tidak Aktif</option>
        </select>
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </div>
<?= form_close(); ?>