<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/dist/img/logoklhk.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">ADMIN ROPEG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Mahdani Kurniawan</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="/admin/dashboard/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/artikel/" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/category/" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Kategori</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/slider/" class="nav-link">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Banner</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/running/" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>Running Text</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/struktur" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Struktur</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/profil" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>Profil</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Header
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu Header</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Menu 1</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Menu 2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sub Menu 3</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-camera"></i>
                        <p>
                            Gallery
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/galeri/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manajemen Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/photo/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kumpulan Foto</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">DATA</li>
                <li class="nav-item">
                    <a href="./pages/tables/peraturan.html" class="nav-link">
                        <i class="nav-icon fas fa-balance-scale"></i>
                        <p>Manajemen Peraturan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Manajemen File</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Statistik Pegawai</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./pages/tables/user.html" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Manajemen Admin</p>
                    </a>
                </li>
            </ul>
            <!-- end of sidebar -->
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
