<a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/setting/gallery_add') ?>')" class="mb-3 btn btn-success">
    + Tambah gallery
</a>
<div class="card">
     <div class="card-body">
         <table id="basic-datatable" class="table dt-responsive nowrap w-100 text-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>Gallery</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($this->db->get('gallery')->result_array() as $row):
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><img src="<?= base_url('assets/gallery/'.$row['gallery']); ; ?>" width="200px" alt=""></td>
                <td><a href="<?= base_url('assets/gallery/'.$row['gallery']); ; ?>" target="_blank">Link</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     </div>
</div>