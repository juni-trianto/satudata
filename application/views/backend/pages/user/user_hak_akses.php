<?php $data = $this->db->get_where('user_menu',['user_id' => $param2]); ?>

<?= form_open('admin/user/menu'); ?>
<input type="hidden" name="id" value="<?= $param2 ?>">
    <h3>Master</h3>

    <div class="row">
    <?php foreach($this->db->get_where('m_menu', ['deleted_at' => null, 'jenis' => 'Master'])->result_array() as $row_menu): ?>
    <div class="col-md-6">
        <div class="form-check form-check-secondary mb-3">
            <input class="form-check-input" value="<?= $row_menu['id'] ?>" name="menu_id[]" type="checkbox" id="formCheck7" <?php foreach($data->result_array() as $user_menu){ if($user_menu['menu_id'] == $row_menu['id']){ echo'checked'; } } ?>>
            <label class="form-check-label" for="formCheck7">
                <?= $row_menu['menu'] ?>
            </label>
        </div>
    </div>
  <?php endforeach; ?>
    </div>

    <h3>Laporan</h3>

      <div class="row">
    <?php foreach($this->db->get_where('m_menu', ['deleted_at' => null, 'jenis' => 'Laporan'])->result_array() as $row_menu): ?>
    <div class="col-md-6">
        <div class="form-check form-check-secondary mb-3">
            <input class="form-check-input" value="<?= $row_menu['id'] ?>" name="menu_id[]" type="checkbox" id="formCheck7" <?php foreach($data->result_array() as $user_menu){ if($user_menu['menu_id'] == $row_menu['id']){ echo'checked'; } } ?>>
            <label class="form-check-label" for="formCheck7">
                <?= $row_menu['menu'] ?>
            </label>
        </div>
    </div>
  <?php endforeach; ?>
    </div>
    <h3>Transaksi</h3>
     <div class="row">
    <?php foreach($this->db->get_where('m_menu', ['deleted_at' => null, 'jenis' => 'Transaksi'])->result_array() as $row_menu): ?>
    <div class="col-md-6">
        <div class="form-check form-check-secondary mb-3">
            <input class="form-check-input" value="<?= $row_menu['id'] ?>" name="menu_id[]" type="checkbox" id="formCheck7" <?php foreach($data->result_array() as $user_menu){ if($user_menu['menu_id'] == $row_menu['id']){ echo'checked'; } } ?>>
            <label class="form-check-label" for="formCheck7">
                <?= $row_menu['menu'] ?>
            </label>
        </div>
    </div>
  <?php endforeach; ?>
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary"> + Simpan</button>
    </div>
<?= form_close(); ?>