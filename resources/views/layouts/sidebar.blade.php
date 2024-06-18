<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#" target="_blank">Pesantren Darunnajah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#" target="_blank">DRN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Starter</li>
            <li class="{{ (request()->routeIs('home*')) ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-home"></i><span>Home</span>
                </a>
            </li>
            <li class="{{ (request()->routeIs('santri*')) ? 'active' : '' }}">
                <a href="{{ route('santri.index') }}" class="nav-link">
                    <i class="fas fa-users"></i><span>Data Santri</span>
                </a>
            </li>
            <li class="menu-header">User</li>
            <li class="{{ (request()->routeIs('user*')) ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="fas fa-user-cog"></i><span>Data Pengguna</span>
                </a>
            </li>
            <li class="menu-header">Hafalan Surat   </li>
            <li class="{{ (request()->routeIs('hafalan*')) ? 'active' : '' }}">
                <a href="{{ route('hafalan.index') }}" class="nav-link">
                    <i class="fas fa-file-invoice"></i><span>Tambah Hafalan</span>
                </a>
            </li>
            <li class="{{ (request()->routeIs('riwayat*')) ? 'active' : '' }}">
                <a href="{{ route('riwayat_hafalan.index') }}" class="nav-link">
                    <i class="far fa-file-alt"></i><span>Syahriah</span>
                </a>
            </li>
            <li class="menu-header">Logs</li>
            <li class="{{ (request()->routeIs('log-activities')) ? 'active' : '' }}">
                <a href="{{ route('log-activities') }}" class="nav-link">
                    <i class="fas fa-history"></i><span>Log Aktivitas</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
