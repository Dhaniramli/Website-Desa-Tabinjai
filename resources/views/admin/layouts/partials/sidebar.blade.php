<ul class="navbar-nav sidebar bg-custom sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">Desa Tabinjai</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin/visi*') || Request::is('admin/mission*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
            aria-controls="collapseOne">
            <i class="fa fa-window-restore"></i>
            <span>Visi & Misi</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/visi*') ? 'active' : ''}}" href="/admin/visi">Visi</a>
                <a class="collapse-item {{ Request::is('admin/mission*') ? 'active' : ''}}"
                    href="/admin/mission">Misi</a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::is('admin/berita*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/berita">
            <i class="fa fa-th"></i>
            <span>Berita</span></a>
    </li>

    <li class="nav-item {{ Request::is('admin/sejarah*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/sejarah">
            <i class="fa fa-history"></i>
            <span>Sejarah</span></a>
    </li>

    <li
        class="nav-item {{ Request::is('admin/pejabat-administrasi*') || Request::is('admin/badan-permusyawaratan*') || Request::is('admin/dusun*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa fa-users"></i>
            <span>Data Pejabat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/pejabat-administrasi*') ? 'active' : ''}}"
                    href="/admin/pejabat-administrasi">Pejabat Administrasi</a>
                <a class="collapse-item {{ Request::is('admin/badan-permusyawaratan*') ? 'active' : ''}}"
                    href="/admin/badan-permusyawaratan">BPD</a>
                <a class="collapse-item {{ Request::is('admin/dusun*') ? 'active' : ''}}" href="/admin/dusun">Pejabat
                    Dusun</a>
            </div>
        </div>
    </li>

    <li
        class="nav-item {{ Request::is('admin/jenis-kelamin*') || Request::is('admin/pendidikan*') || Request::is('admin/umur*') || Request::is('admin/pekerjaan*') || Request::is('admin/penghasilan*') || Request::is('admin/jumlah-penduduk*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
            aria-controls="collapseThree">
            <i class="fa fa-users"></i>
            <span>Data Penduduk</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('admin/jumlah-penduduk*') ? 'active' : ''}}" href="/admin/jumlah-penduduk">Jumlah Penduduk</a>
                <a class="collapse-item {{ Request::is('admin/jenis-kelamin*') ? 'active' : ''}}" href="/admin/jenis-kelamin">Menurut Jenis Kelamin</a>
                <a class="collapse-item {{ Request::is('admin/umur*') ? 'active' : ''}}" href="/admin/umur">Menurut Umur</a>
                <a class="collapse-item {{ Request::is('admin/pendidikan*') ? 'active' : ''}}" href="/admin/pendidikan">Menurut Pendidikan</a>
                <a class="collapse-item {{ Request::is('admin/pekerjaan*') ? 'active' : ''}}" href="/admin/pekerjaan">Menurut Pekerjaan</a>
                <a class="collapse-item {{ Request::is('admin/penghasilan*') ? 'active' : ''}}" href="/admin/penghasilan">Menurut Penghasilan</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
