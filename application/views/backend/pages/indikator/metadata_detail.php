<?php $data = $this->db->select('z.*, a.kategori, b.urusan, c.organisasi,c.email, c.no_telp, d.indikator')
                        ->join('m_kategori_indikator a','a.id=z.kategori_indikator_id')
                        ->join('m_urusan b','b.id=z.urusan_id')
                        ->join('m_organisasi c','c.kode_organisasi=z.kode_organisasi')
                        ->join('m_indikator d','d.id=z.indikator_id')
                        ->get_where('m_metadata z',['z.indikator_id' => $param2 ])->row_array(); ?>

<table class="table mt-4 table-sm">
  <thead>
    <tr>
            <th colspan="2" class="text-center">

               # <?= $data['indikator']; ?>
            </th>
        </tr>
        <tr>
            <th colspan="2" class="text-center">
              METADATA 
            </th>
        </tr>
  </thead>
    <tbody>
    <tr>
        <td>
            Dataset Dibuat :
        </td>
        <td>
            <?= $data['dataset_dibuat']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Dataset Diperbaharui :
        </td>
        <td>
            <?= $data['dataset_diperbarui']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Kategori :
        </td>
        <td>
            <?= $data['kategori']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Urusan :
        </td>
        <td>
            <?= $data['urusan']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Produsen :
        </td>
        <td>
            <?= $data['organisasi']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Kontak Produsen :
        </td>
        <td>
            <?= $data['no_telp']; ?>
        </td>
    </tr>
    <tr>
        <td>
        Email Produsen :
        </td>
        <td>
            <?= $data['email']; ?>
        </td>
    </tr>
    </tbody>
</table>