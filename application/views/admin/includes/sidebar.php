<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                    <img src="<?= base_url() ?>/assets/admin/images/logos/dark-logo.svg" width="180" alt="" />
                </a>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin') ?> " aria-expanded="false">
                            <span>
                                <i class="ti ti-layout-dashboard"></i>
                            </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Produk</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/product') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-eye"></i>
                            </span>
                            <span class="hide-menu">Lihat Produk</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/tambah-produk') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-plus"></i>
                            </span>
                            <span class="hide-menu">Tambah Produk</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/client') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-building"></i>
                            </span>
                            <span class="hide-menu">Proyek</span>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Pengaturan</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/foto_depan')?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-photo"></i>
                            </span>
                            <span class="hide-menu">Gambar Depan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/whatsapp') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-brand-whatsapp"></i>
                            </span>
                            <span class="hide-menu">Whatsapp Pemesanan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/tentang') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-users"></i>
                            </span>
                            <span class="hide-menu">Tentang</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url('admin/alamat') ?>" aria-expanded="false">
                            <span>
                                <i class="ti ti-location"></i>
                            </span>
                            <span class="hide-menu">Alamat</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->