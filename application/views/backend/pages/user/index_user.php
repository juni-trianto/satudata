<!-- 

                                                 -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box">                                    
            <div class="page-title-right">
                <div class="d-flex">
                    <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/user/user_add') ?>')" class="btn btn-success ms-2">
                        <i class="mdi mdi-autorenew"></i> Tambah User
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
                    <th>No</th>
                    <th>Prov</th>
                    <th>nama Lengkap</th>
                    <th>No Hp</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
               $no = 1;
               foreach($this->db->select('users.*, m_provider.nama_provider')->join('m_provider', 'm_provider.id=users.provider_id')->get('users')->result_array() as $row):
               ?>
               <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nama_provider'] ?></td>
                <td><?= $row['nama_lengkap'] ?></td>
                <td><?= $row['no_hp'] ?></td>
                <td><?= $row['username'] ?></td>
                <td>
                     <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/user/user_edit/'.$row['id']); ?>')" class="btn btn-primary">
                       Edit
                    </a>
                     <a href="#" data-toggle="modal" onclick="showAjaxModal('<?= site_url('modal/popup/user/user_hak_akses/'.$row['id']); ?>')" class="btn btn-warning ">
                       Hak Akses
                    </a>
                </td>
               </tr>

               <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>