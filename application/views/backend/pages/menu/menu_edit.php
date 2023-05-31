<?php $data = $this->db->get_where('m_menu',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/menu/update'); ?>
<input type="hidden" name="id" value="<?= $param2 ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Menu</label>
        <input type="text" class="form-control" name="menu" autocomplete="off" value="<?= $data['menu']; ?>" required placeholder="Cth . Menu">
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Link</label>
        <input type="text" class="form-control" name="link" autocomplete="off" value="<?= $data['link']; ?>" required placeholder="Cth. admin/dashboard">
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Controller</label>
        <input type="text" class="form-control" name="controller" autocomplete="off" value="<?= $data['controller']; ?>" required placeholder="Cth. dashboard">
    </div>
      <div class="mb-2">
        <label for="employeeName" class="form-label">Icon</label>
        <textarea name="icon" id="" class="form-control" required><?= $data['icon']; ?></textarea>
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Jenis</label>
        <select name="jenis" class="form-control  form-select" id="" required>
            <option value="">..::Pilih Jenis Menu::..</option>
            <option <?php if($data['jenis'] == 'Master'){ echo'selected'; } ?> value="Master">Master</option>
            <option <?php if($data['jenis'] == 'Laporan'){ echo'selected'; } ?> value="Laporan">Laporan</option>
            <option <?php if($data['jenis'] == 'Transaksi'){ echo'selected'; } ?> value="Transaksi">Transaksi</option>
        </select>
    </div>
 
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">update</button>
    </div>
<?= form_close(); ?>