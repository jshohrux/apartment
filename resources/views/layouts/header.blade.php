<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('bosh_sahifa')}}" class="app-brand-link">
            <span class="">
                <img src="{{asset('static/assets/img/logo.png')}}" alt="" class="img" width="180">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item {{ request()->is('home*') ? 'active' : ''}}">
            <a href="{{route('home')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                <div>Bosh sahifa</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('ariza-yuborish*') ? 'active' : ''}}">
            <a href="{{route('ariza_yuborish')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Ariza yuborish">Ariza yuborish</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('mening-arizalarim*') ? 'active' : ''}}">
            <a href="{{route('my')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-mail"></i>
                <div data-i18n="Mening arizalarim">Mening arizalarim</div>
            </a>
        </li>

    </ul>
</aside>
