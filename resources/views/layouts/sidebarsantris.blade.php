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
            <li class="{{ (request()->routeIs('homes*')) ? 'active' : '' }}">
                <a href="{{ route('santris.home') }}" class="nav-link">
                    <i class="fas fa-home"></i><span>Home</span>
                </a>
            </li>
            <li class="{{ (request()->routeIs('santris*')) ? 'active' : '' }}">
                <a href="{{ route('santris.index') }}" class="nav-link">
                    <i class="fas fa-users"></i><span>Input Data</span>
                </a>
            </li>
            <li class="{{ (request()->routeIs('hafalans*')) ? 'active' : '' }}">
                <a href="{{ route('hafalans.index') }}" class="nav-link">
                    <i class="fas fa-user-cog"></i><span>Hafalan Surat</span>
                </a>
            </li>
            <li class="{{ (request()->routeIs('santri*')) ? 'active' : '' }}">
                <a href="{{ route('santris.index') }}" class="nav-link">
                    <i class="fas fa-file-invoice"></i><span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
</div>