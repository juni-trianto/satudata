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
            <table id="basic-datatable" class="table dt-responsive nowrap w-100 text-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Long</th>
                        <th>Lat</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($this->db->get('m_kecamatan')->result_array() as $row):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['nama_kecamatan'] ?></td>
                    <td><?= $row['long'] ?></td>
                    <td><?= $row['lat'] ?></td>
                </tr>

                <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
       </div>
    </div>
</div>