   <!-- ========== Left Sidebar Start ========== -->
            <diva class="leftside-menu">

                <!-- Logo Light -->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="<?= $this->setting->get_name('site_logo'); ?>" alt="logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= $this->setting->get_name('site_logo'); ?>" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Logo Dark -->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="<?= $this->setting->get_name('site_logo'); ?>" alt="dark logo" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="<?= $this->setting->get_name('site_logo'); ?>" alt="small logo" height="22">
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </button>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="pages-profile.html">
                            <img src="<?= $this->setting->get_name('site_logo'); ?>" alt="user-image" height="42"
                                class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">Dominic Keller</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Dashboard</li>

                        <li class="side-nav-item">
                            <a href="<?= site_url('admin/dashboard'); ?>" aria-expanded="false"
                                aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">5</span>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Master</li>


                        <?php foreach($this->menu->get_menu($this->input->cookie('user_id',true)) as $menu): ?>
                         <li class="side-nav-item <?php if($menu['controller'] == $this->uri->segment(2)){ echo 'bg-info rounded text-white'; } ?> ">
                            <a href="<?= site_url($menu['link']); ?>"  class="side-nav-link <?php if($menu['controller'] == $this->uri->segment(2)){ echo 'bg-info rounded text-white'; } ?>">
                                <?= $menu['icon']; ?>
                                <span> <?= $menu['menu']; ?> </span>
                            </a>
                        </li>
                        <?php endforeach; ?>


                    </ul>
                    <!--- End Sidemenu -->

                 

                    <div class="clearfix"></div>
                </div>
            </diva>
            <!-- ========== Left Sidebar End ========== -->