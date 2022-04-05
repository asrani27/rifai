<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ Request::is('superadmin') ? 'active' : '' }}" href="/superadmin"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/listpengaduan') ? 'active' : '' }}"" href="
                dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">List
                    Pengaduan</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/pengadu') ? 'active' : '' }}"" href=" dashboard.html"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Pengadu</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/pengawas') ? 'active' : '' }}"" href="
                dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Pengawas</span></a>
        </li>
        <li>
            <a class="app-menu__item {{ Request::is('superadmin/penyidik') ? 'active' : '' }}"" href="
                dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">Penyidik</span></a>
        </li>
        <li><a class="app-menu__item" href="/logout"><i class="app-menu__icon fa fa-sign-out"></i><span
                    class="app-menu__label">Logout</span></a></li>
    </ul>
</aside>