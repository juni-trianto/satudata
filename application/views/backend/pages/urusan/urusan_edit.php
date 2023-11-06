<?php $data = $this->db->get_where('m_urusan',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/urusan/update'); ?>
<input type="hidden" name="id" value="<?= $param2 ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Urusan</label>
        <input type="text" class="form-control" name="urusan" autocomplete="off" required value="<?= $data['urusan'] ?>">
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
<?= form_close(); ?>