<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
            <p class="app-sidebar__user-designation">Level : {{Auth::user()->roles->first()->name}}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Request::is('superadmin') ? 'active' : '' }}" href="/superadmin"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/listpengaduan') ? 'active' : '' }}"" href="
                /superadmin/listpengaduan"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Daftar
                    Pengaduan</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/penanganan') ? 'active' : '' }}"" href="
                /superadmin/penanganan"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Penanganan</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/jenispengaduan') ? 'active' : '' }}"" href="
                /superadmin/jenispengaduan"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Jenis
                    Pengaduan</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/pengadu') ? 'active' : '' }}"" href="
                /superadmin/pengadu"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Pengadu</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/pengawas') ? 'active' : '' }}"" href="
                /superadmin/pengawas"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Pengawas</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/penyidik') ? 'active' : '' }}"" href="
                /superadmin/penyidik"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Penyidik</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/perusahaan') ? 'active' : '' }}"" href="
                /superadmin/perusahaan"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Perusahaan</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/laporan') ? 'active' : '' }}"" href="
                /superadmin/laporan"><i class="app-menu__icon fa fa-list"></i><span
                    class="app-menu__label">Laporan</span></a>
        </li>
        <li><a class="app-menu__item" href="/logout"><i class="app-menu__icon fa fa-sign-out"></i><span
                    class="app-menu__label">Logout</span></a></li>
    </ul>
</aside>