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
        <div class="card text-dark">
            <div class="card-body">
            <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100 text-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>latitude Desa</th>
                        <th>Latitude Desa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($this->db->join('m_kecamatan','m_kecamatan.kode_kecamatan=m_desa.kode_kecamatan')->get('m_desa')->result_array() as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_kecamatan'] ?></td>
                    <td><?= $row['nama_desa'] ?></td>
                    <td><?= $row['desa_long'] ?></td>
                    <td><?= $row['desa_lat'] ?></td>
                </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
       </div>
    </div>
</div>