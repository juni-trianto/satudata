<div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-flex">
                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/indikator/indikator_add/'.$organisasi['kode_organisasi']) ?>')" class="btn btn-success ms-2">
                        <i class="mdi mdi-autorenew"></i> Tambah Indikator
                    </a>
                </div>
            </div>
            <h4 class="page-title"><?= $page_title; ?></h4>
        </div>
        
    <div class="card">
        <div class="card-body">
            <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100 text-dark">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Urusan</th>
                    <th>Indikator</th>
                    <th>Satuan</th>
                    <th>Kode Urusan</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no  = 1;
                foreach($indikator->result_array() as $row_indikator):
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row_indikator['kategori']; ?></td>
                <td><?= $row_indikator['urusan']; ?></td>
                <td><?= $row_indikator['indikator']; ?></td>
                <td><?= $row_indikator['satuan']; ?></td>
                <td><?= $row_indikator['kode_urusan']; ?></td>
                <td>
                                                                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/indikator/metadata_detail/'.$row_indikator['id']); ?>')" class="btn btn-sm btn-success">
                                                                    Metadata
                                                                    </a>
                                                                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/indikator/indkator_edit/'.$row_indikator['id']); ?>')" class="btn btn-sm btn-primary">
                                                                    Edit
                                                                    </a>
                                                                    <a href="<?= site_url('admin/indikator/indikator_delete/'.$row_indikator['uuid']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete Data!')">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>