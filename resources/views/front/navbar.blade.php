<!-- Navbar -->

<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="container-fluid">
        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="{{route('bosh_sahifa')}}" class="app-brand-link gap-2">
                <span class="logo">
                    <img src="{{asset('static/assets/img/logo.png')}}" alt="" class="img" width="180">
                </span>
            </a>
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="ti ti-x ti-sm align-middle"></i>
            </a>
        </div>

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                @guest
                    <li class="nav-item me-2 me-xl-0">
                        <a class="nav-link hide-arrow d-flex align-items-center" href="{{route('login')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg> &nbspKirish
                        </a>
                    </li>
                    <li class="nav-item me-2 me-xl-0">
                        <a class="nav-link hide-arrow d-flex align-items-center" href="{{route('register')}}">Ro'yxatdan o'tish</a>
                    </li>

                @else
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="{{asset('static/assets/img/default.png')}}" alt class="h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{route('bosh_sahifa')}}">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="{{asset('static/assets/img/default.png')}}" alt class="h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                                            <small class="text-muted">{{auth()->user()->role->name}}</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('sozlamalar')}}">
                                    <i class="ti ti-settings me-2 ti-sm"></i>
                                    <span class="align-middle">Sozlamalar</span>
                                </a>
                            </li>
                            <a class="dropdown-item"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">Chiqish</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- / Navbar -->
