
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                   <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div>
            <h4 class="page-title"><?= $page_title; ?></h4>
        </div>
     </div>
</div>

<div class="row">
    <div class="col-sm-3 mb-2 mb-sm-0">
        <div class="nav flex-column nav-pills"  aria-orientation="vertical">
            <a class="nav-link  <?php if($page_sub_name == 'setting'){ echo' active show'; } ?>" href="<?= site_url('admin/setting'); ?>" >
                <i class="mdi mdi-home-variant d-md-none d-block"></i>
                <span class="d-none d-md-block">Setting</span>
            </a>
            <a class="nav-link <?php if($page_sub_name == 'gallery'){ echo' active show'; } ?>" href="<?= site_url('admin/setting/gallery'); ?>">
                <i class="mdi mdi-account-circle d-md-none d-block"></i>
                <span class="d-none d-md-block">Gallery</span>
            </a>
        </div>
    </div> <!-- end col-->

    <div class="col-sm-9">
     <?= include $page_sub_name.'.php' ?>
    </div> <!-- end col-->
</div>
<!-- end row-->

                                                


