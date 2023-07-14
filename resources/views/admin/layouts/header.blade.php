<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('admin.dashboard')}}" class="app-brand-link">
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
        <!-- Dashboards -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Ma'lumotlar</span>
        </li>
        <li class="menu-item {{ request()->is('admin/dashboard*') ? 'active' : ''}}">
            <a href="{{route('admin.dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Bosh sahifa">Bosh sahifa</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/students*') ? 'active' : ''}}">
            <a href="{{route('students')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                <div data-i18n="Talabalar">Talabalar</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/apartment*') ? 'active' : ''}}">
            <a href="{{route('apartment')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Yotoqxona">Yotoqxona</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/faculty*') ? 'active' : ''}}">
            <a href="{{route('faculty')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Fakultetlar">Fakultetlar</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/speciality*') ? 'active' : ''}}">
            <a href="{{route('speciality')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-layout-kanban"></i>
                <div data-i18n="Mutaxasisliklar">Mutaxasisliklar</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/regions*') ? 'active' : ''}}">
            <a href="{{route('regions')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div>Viloyatlar</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/districts*') ? 'active' : ''}}">
            <a href="{{route('districts')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div>Tumanlar</div>
            </a>
        </li>

        <li class="menu-item {{ request()->is('admin/meyoriy-hujjatlar*') ? 'active' : ''}}">
            <a href="{{route('documents_all')}}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div>Me'yoriy hujjatlar</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Arizalar</span>
        </li>

        <li class="menu-item {{ request()->is('admin/arizalar/new*') ? 'active' : ''}}">
            <a href="{{route('new')}}" class="menu-link">
              <div>Yangi arizalar</div>
              <div class="badge bg-label-primary rounded-pill ms-auto" id="count"></div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('admin/arizalar/accepted*') ? 'active' : ''}}">
            <a href="{{route('accepted')}}" class="menu-link">
              <div>Tasdiqlangan arizalar</div>
            </a>
          </li>
          <li class="menu-item {{ request()->is('admin/arizalar/rejected*') ? 'active' : ''}}">
            <a href="{{route('rejected')}}" class="menu-link">
              <div>Rad etilgan arizalar</div>
            </a>
          </li>
    </ul>
</aside>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $.ajax({
            type: "get",
            url: "/admin/arizalar/yangi-arizalar",
            cache: false,
            success: function (data) {
                let count = document.getElementById("count");
                count.innerHTML = data.new;
            },
            error: function (data) {},
        });
    });
</script>
