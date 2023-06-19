<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active"><?= $page_title; ?></li>
                    </ol>
                </div>
                <h4 class="page-title"><?= $page_title; ?></h4>
            </div>
        </div>
     </div>
     <!-- 

                                                 -->

<div class="row">
    <div class="col-12">
        <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/rsrp/rsrp_add') ?>')" class="btn btn-success mb-2">
                        <i class="mdi mdi-autorenew"></i> Tambah Data
         </a>
        
        <div class="card">
            <div class="card-body">
            <table id="basic-datatable" class="table dt-responsive nowrap w-100 text-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Start</th>
                        <th>Finish</th>
                        <th>Color</th>
                        <th>Information</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($this->db->get_where('m_rsrp',['deleted_at' => null])->result_array() as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['start'] ?></td>
                    <td><?= $row['finish'] ?></td>
                    <td><?= $row['color'] ?></td>
                    <td><?= $row['information'] ?></td>
                    <td>
                        <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/rsrp/rsrp_edit/'.$row['id']); ?>')" class="btn btn-primary ms-2">
                        Edit
                        </a>
                        <a href="<?= site_url('admin/rsrp/delete/'.$row['id']); ?>" class="btn btn-danger" onclick="return confirm('Delete Menu!')">Delete</a>
                    </td>
                </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
       </div>
    </div>
</div>