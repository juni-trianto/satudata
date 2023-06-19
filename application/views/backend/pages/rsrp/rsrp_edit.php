<?php $data = $this->db->get_where('m_rsrp',['id' => $param2 ])->row_array(); ?>
<?= form_open('admin/rsrp/update'); ?>
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="mb-2">
        <label for="employeeName" class="form-label">Start</label>
        <input type="number" class="form-control" name="start" value="<?= $data['start'] ?>" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Finish</label>
        <input type="number" class="form-control" value="<?= $data['finish'] ?>" name="finish" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Color</label>
        <input type="text" class="form-control" value="<?= $data['color'] ?>" name="color" autocomplete="off" required >
    </div>
     <div class="mb-2">
        <label for="employeeName" class="form-label">Color</label>
        <input type="text" class="form-control" value="<?= $data['information'] ?>" name="information" autocomplete="off" required >
    </div>
    <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
<?= form_close(); ?>