 <div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-flex">
                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/organisasi/organisasi_add') ?>')" class="btn btn-success ms-2">
                        <i class="mdi mdi-autorenew"></i> Tambah Organisasi
                    </a>
                </div>
            </div>
            <h4 class="page-title"><?= $page_title; ?></h4>
        </div>
        
    <div class="card">
        <div class="card-body">
            <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100 text-dark">
            <thead >
                <tr class="text-center">
                    <th>No</th>
                    <th>Organisasi</th>
                    <th>Nama Singkat</th>
                    <th>Email</th>
                    <th>No Telp</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($this->db->get_where('m_organisasi',['deleted_at' => null])->result_array() as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['organisasi']; ?></td>
                    <td><?= $row['nama_singkat']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['no_telp']; ?></td>
                    <td>
                    <a href="<?= site_url('admin/organisasi/indikator/'.$row['kode_organisasi']) ?>" class="btn btn-warning">Indikator</a>
                      <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/organisasi/organisasi_edit/'.$row['kode_organisasi']); ?>')" class="btn btn-primary">
                       Edit
                    </a>
                    <a href="<?= site_url('admin/organisasi/delete/'.$row['uuid']); ?>" class="btn btn-danger" onclick="return confirm('Delete Data!')">Delete</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>