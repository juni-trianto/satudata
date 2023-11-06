<div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-flex">
                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/kategori/kategori_add') ?>')" class="btn btn-success ms-2">
                        <i class="mdi mdi-autorenew"></i> Tambah Urusan
                    </a>
                </div>
            </div>
            <h4 class="page-title"><?= $page_title; ?></h4>
        </div>
        
    <div class="card">
        <div class="card-body">
            <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100 text-dark">
            <thead >
                <tr >
                    <th>No</th>
                    <th>Urusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($this->db->get_where('m_kategori_indikator',['deleted_at' => null])->result_array() as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td>
                      <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/kategori/kategori_edit/'.$row['id']); ?>')" class="btn btn-primary">
                       Edit
                    </a>
                    <a href="<?= site_url('admin/kategori/delete/'.$row['uuid']); ?>" class="btn btn-danger" onclick="return confirm('Delete Data!')">Delete</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>