<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span>POS </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Apps</li>


                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-shield-cross"></i>
                        <span> Pasien </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route ('data.pasien')}}">Data Pasien</a>
                            </li>
                            <li>
                                <a href="#">Tambah Pasien</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-stethoscope"></i>
                        <span> Dokter </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route ('data.dokter')}}">Dokter</a>
                            </li>
                            <li>
                                <a href="#">Add Customer</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="mdi mdi-factory"></i>
                        <span> Supplier </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Pemasok</a>
                            </li>
                            <li>
                                <a href="#">Add Pemasok</a>
                            </li>



                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#salary" data-bs-toggle="collapse">
                        <i class="mdi mdi-currency-usd-circle"></i>
                        <span> Gaji Karyawan </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="salary">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Tambah Slip Gaji</a>
                            </li>
                            <li>
                                <a href="#">Data Slip Gaji</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#kategori" data-bs-toggle="collapse">
                        <i class="mdi mdi-file-document"></i>
                        <span> Kategori </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="kategori">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Kategori Barang</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#produk" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart"></i>
                        <span> Produk </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="produk">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">All Produk</a>
                            </li>
                            <li>
                                <a href="#}">Tambah Produk</a>
                            </li>
                            <li>
                                <a href="">Import Produk</a>
                            </li>
                        </ul>

                        <li>
                            <a href="#order" data-bs-toggle="collapse">
                                <i class="mdi mdi-clipboard-list"></i>
                                <span> Order </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="order">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#">Pending Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Complete Order</a>
                                    </li>
                                </ul>

                                <li>
                                    <a href="#stock" data-bs-toggle="collapse">
                                        <i class="mdi mdi-clipboard-list"></i>
                                        <span> Stock Manage </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="stock">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="#">Stock</a>
                                            </li>
                                        </ul>
                                        <li>
                                            <a href="#roles" data-bs-toggle="collapse">
                                                <i class="mdi mdi-clipboard-list"></i>
                                                <span> Roles</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="roles">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="#">All Permission</a>
                                                    </li>
                                                </ul>



                    </div>
                </li>


                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <span> Expense </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#">Add Expense</a>
                            </li>
                            <li>
                                <a href="#">Today Expense</a>
                            </li>
                            <li>
                                <a href="#">Monthy Expense</a>
                            </li>
                            <li>
                                <a href="#">Year Expense</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-sitemap.html">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                </li>



                </li>

                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
