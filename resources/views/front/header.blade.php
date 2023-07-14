<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-fluid d-flex h-100">
        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item {{ request()->is('/') ? 'active' : ''}}">
                <a href="{{route('bosh_sahifa')}}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                    <div>Bosh sahifa</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item {{ request()->is('meyoriy-hujjatlar*') ? 'active' : ''}}">
                <a href="{{route('documents')}}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-file"></i>
                    <div>Meyoriy hujjatlar</div>
                </a>
            </li>

            <!-- Apps -->
            <li class="menu-item {{ request()->is('talabalarga*') ? 'active' : ''}}">
                <a href="{{route('talabalarga')}}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div>Talabalarga</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="{{route('ariza_yuborish')}}" class="menu-link menu">
                    <i class="menu-icon tf-icons ti ti-send"></i>
                    <div>Ariza yuborish</div>
                </a>
            </li>
        </ul>
    </div>
</aside>
