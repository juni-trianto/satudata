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

<div class="row">
    <div class="col-md-5">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_3Dymt9.json"  background="transparent"  speed="1"  style="width: 400px; height: 500px;"  loop  autoplay></lottie-player>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <form class="row"> 
                  <div class="mb-2 col-md-12">
                        <label for="exampleInputEmail1" class="form-label">Provider</label>
                        <select name="provider_id" class="form-control" required >
                            <option value="">..::Pilih Provider::..</option>
                        </select>
                    </div>
                    <div class="mb-2 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                        <select name="kode_kecamatan" class="form-control" required >
                            <option value="">..::Pilih Kecamatan::..</option>
                        </select>
                    </div>
                    <div class="mb-2 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Desa</label>
                        <select name="kode_desa" class="form-control" required >
                            <option value="">..::Pilih desa::..</option>
                        </select>
                    </div>
                      <div class="mb-2 col-md-12">
                        <label for="exampleInputEmail1" class="form-label">Alamat Lengkap</label>
                        <textarea name="alamat_lengkap" class="form-control" required></textarea>
                    </div>
                    <div class="mb-2 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Long</label>
                        <input type="text" class="form-control" required autocomplete="off" name="long">
                    </div>
                     <div class="mb-2 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Lat</label>
                        <input type="text" class="form-control" required autocomplete="off" name="lat">
                    </div>
                      <div class="mb-2 col-md-12">
                        <label for="exampleInputPassword1" class="form-label">Nilai RSRP</label>
                        <input type="text" class="form-control" required autocomplete="off" name="nilai_rsrp">
                           <small id="emailHelp" class="form-text text-danger">Standar Parameter Blankspot pada nilai RSRP.</small>
                    </div>
                       <div class="mb-2 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Nilai Download</label>
                        <input type="text" class="form-control" placeholder="cth. 3.03 mbps" required autocomplete="off" name="download">
                    </div>
                     <div class="mb-2 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Nilai Upload</label>
                        <input type="text" class="form-control" placeholder="cth. 2.73 mbps" required autocomplete="off" name="upload">
                    </div>
                     <div class="mb-2 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Pengecekan</label>
                        <input type="date" class="form-control" required autocomplete="off" name="tanggal" value="<?= date('Y-m-d') ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>