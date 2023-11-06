<div class="row">
    <div class="col-12">
    <div class="card">
                                    <div class="card-body">

                                        <!-- Invoice Logo-->
                                        <div class="clearfix">
                                            <div class="float-start mb-3">
                                                <img src="<?= $this->setting->get_name('site_logo_2'); ?>" alt="dark logo" height="22">
                                            </div>
                                            <div class="float-end">
                                                <h4 class="m-0 d-print-none">
                                                <a  href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/organisasi/indikator_add/'.$database['kode_organisasi']) ?>')"  class="btn btn-primary"><i class="mdi mdi-database"></i> Tambah Indikator</a>
                                                </h4>
                                            </div>
                                        </div>

                                        <!-- Invoice Detail-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-3">
                                                    <h1><b><?= $database['nama_singkat'] ?></b></h1>
                                                    <h4 class="text-muted font-13"><?= $database['organisasi'] ?></h4>
                                                </div>
            
                                            </div><!-- end col -->
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="mt-3 float-sm-end">
                                                    <p class="font-13"><strong>Email: </strong> &nbsp;&nbsp;&nbsp; <?= $database['email']; ?></p>
                                                    <p class="font-13"><strong>No Telp: </strong> <span class="float-end"><?= $database['no_telp']; ?></span></p>
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <!-- end row -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mt-4 table-sm">
                                                        <thead>
                                                        <tr><th>#</th>
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
                                                                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/organisasi/metadata_detail/'.$row_indikator['id']); ?>')" class="btn btn-sm btn-success">
                                                                    Metadata
                                                                    </a>
                                                                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/organisasi/indkator_edit/'.$row_indikator['id']); ?>')" class="btn btn-sm btn-primary">
                                                                    Edit
                                                                    </a>
                                                                    <a href="<?= site_url('admin/organisasi/indikator_delete/'.$row_indikator['uuid']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete Data!')">Delete</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="clearfix pt-3">
                                                    <h6 class="text-muted">Notes:</h6>
                                                    <small>
                                                        All accounts are to be paid within 7 days from receipt of
                                                        invoice. To be paid by cheque or credit card or direct payment
                                                        online. If account is not paid within 7 days the credits details
                                                        supplied as confirmation of work undertaken will be charged the
                                                        agreed quoted fee noted above.
                                                    </small>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
    
                                        <div class="d-print-none mt-4">
                                            <div class="text-end">
                                                <a href="<?= site_url('admin/organisasi') ?>" class="btn btn-info">Back</a>
                                            </div>
                                        </div>   
                                        <!-- end buttons -->

                                    </div> <!-- end card-body-->
                                </div>
    </div>
</div>