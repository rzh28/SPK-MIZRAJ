<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" style="background: 3a77a6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" style="background: 3a77a6;">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" style="background: 3a77a6;">
                <!-- User Profile-->
                <li style="background: 3a77a6">
                    <!-- User Profile-->
                    <div class="user-profile dropdown m-t-20">
                        <div class="user-pic">
                            {{-- <img src="{{ asset('assets/adminbite/assets/images/users/1.jpg') }}" alt="users"
                                class="rounded-circle img-fluid" /> --}}
                        </div>

                        <div class="user-content hide-menu m-t-10">
                            <h5 class="m-b-10 user-name font-medium">
                                {{ Str::upper('WELLCOME' . ' ' . Auth::user()->name) }}
                            </h5>
                            <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-settings"></i>
                            </a>
                            <a href="{{ route('logout') }}" title="Logout" class="btn btn-circle btn-sm"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="ti-power-off"></i>
                            </a>
                            <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Account Setting
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End User Profile-->
                </li>

                <!-- User Profile-->
                {{-- <li class="nav-small-cap">
                    <i class="mdi mdi-dots-horizontal"></i>
                    <span class="hide-menu">Halaman Utama</span>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.home') }}"
                        aria-expanded="false">
                        <i class="icon-Home"></i>
                        <span class="hide-menu">HALAMAN UTAMA</span>
                    </a>
                </li>
                @if (Auth::user()->role_id == '1')
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-User"></i> <span class="hide-menu">Data Siswa </span> </a>

                        <ul aria-expanded="false" class="collapse  first-level" style="background: 3a77a6">
                            <li class="sidebar-item">
                                <a href="{{ route('admin.siswa.index') }}" class="sidebar-link">
                                    <i class="icon-Record"></i> <span class="hide-menu"> Siswa </span> </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('admin.siswa.create') }}" class="sidebar-link">
                                    <i class="icon-Record"></i> <span class="hide-menu"> Tambah Siswa</span> </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Gears-2"></i> <span class="hide-menu">TOPSIS </span> </a>

                        <ul aria-expanded="false" class="collapse  first-level" style="background: 3a77a6">
                            {{-- 1 --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.kriteria.index') }}" class="sidebar-link" aria-expanded="false">
                                    <i class="icon-Receipt"></i> <span class="hide-menu">KRITERIA</span> </a>
                            </li>
                            {{-- 2 --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.penilaianAwal') }}" class="sidebar-link">
                                    <i class="icon-Record"></i> <span class="hide-menu"> PENILAIAN SISWA </span> </a>
                            </li>
                        </ul>
                    </li>
                    {{-- 3 --}}
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Gears-2"></i> <span class="hide-menu">HASIL PERHITUNGAN TOPSIS</span> </a>

                        <ul aria-expanded="false" class="collapse secondary-level" style="background: 3a77a6">
                            {{-- 3a --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.normalisasi') }}" class="sidebar-link">
                                    <i class="icon-Gears-1"></i> <span class="hide-menu"> NORMALISASI </span> </a>
                            </li>
                            {{-- 3b --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.bobot') }}" class="sidebar-link">
                                    <i class="icon-Gears-1"></i> <span class="hide-menu"> PEMBOBOTAN </span> </a>
                            </li>
                            {{-- 3c --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.jarak') }}" class="sidebar-link">
                                    <i class="icon-Gears-1"></i> <span class="hide-menu"> JARAK IDEAL </span> </a>
                            </li>
                            {{-- 3d --}}
                            <li class="sidebar-item">
                                <a href="{{ route('admin.preferensi') }}" class="sidebar-link">
                                    <i class="icon-Gears-1"></i> <span class="hide-menu"> PREFRENSI </span> </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-small-cap">
                        <i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Perhitungan Topsis</span> </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Gears-2"></i> <span class="hide-menu">Topsis </span> </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('admin.preferensi') }}" class="sidebar-link">
                                    <i class="icon-Record"></i> <span class="hide-menu"> Hasil Rangking </span> </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
</div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
