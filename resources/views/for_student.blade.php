<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="horizontal-menu-template-no-customizer"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('static/assets/img/favicon/favicon.ico')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/core.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/theme-default.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/swiper/swiper.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/cards-advance.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/ui-carousel.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('static/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('static/assets/js/config.js')}}"></script>

    <style>
        .hero{
            padding: 350px 0;
            text-align: center;
            height: auto;
            background-size: cover;
        }
    </style>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">
                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                    <a href="index.html" class="app-brand-link gap-2">
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
                        <!-- Language -->
                        {{-- <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="fi fi-uz fis rounded-circle me-1 fs-3"></i>
                          </a>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-language="en">
                                <i class="fi fi-uz fis rounded-circle me-1 fs-3"></i>
                                <span class="align-middle">O'zbek tili</span>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-language="fr">
                                <i class="fi fi-fr fis rounded-circle me-1 fs-3"></i>
                                <span class="align-middle">French</span>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-language="de">
                                <i class="fi fi-de fis rounded-circle me-1 fs-3"></i>
                                <span class="align-middle">German</span>
                              </a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="javascript:void(0);" data-language="pt">
                                <i class="fi fi-pt fis rounded-circle me-1 fs-3"></i>
                                <span class="align-middle">Portuguese</span>
                              </a>
                            </li>
                          </ul>
                        </li> --}}
                        <!--/ Language -->


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
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('static/assets/img/default.png')}}" alt class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
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
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">Mening profilim</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
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
                            <!--/ User -->
                        @endguest
                    </ul>
                </div>


            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                    <div class="container-fluid d-flex h-100">
                        <ul class="menu-inner">
                            <!-- Dashboards -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link">
                                    <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                    <div>Bosh sahifa</div>
                                </a>
                            </li>

                            <!-- Layouts -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link">
                                    <i class="menu-icon tf-icons ti ti-file"></i>
                                    <div>Meyoriy hujjatlar</div>
                                </a>
                            </li>

                            <!-- Apps -->
                            <li class="menu-item active">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
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
                <!-- / Menu -->

                <!-- Content -->
                <div class="container-fluid flex-grow-1 container-p-y">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card h-100">
                                <div class="card-header">
                                    <div class="card-title mb-0 text-center">
                                        <h4 class="mb-0">TALABALAR TURAR JOYI NIZOMI</h4>
                                    </div>
                                </div>
                                <div class="card-body text-justify">
                                    <h5>I. Umumiy qoidalar</h5>
                                    <p style="text-align: justify">
                                        Ushbu «Nizom» 2005 yil 9 apreldagi «Milliy istiqlol g’oyasi: asosiy tushuncha va tamoyillari Fani bo’yicha» maxsus metodologik komissiya qarori hamda Oliy va o’rta maxsus ta’lim vazirligining 2005 yil 18-maydagi 107-sonli «Oliy va o’rta maxsus, kasb-hunar ta’limi muassasalarida milliy istiqlol g’oyasini talabalar ongiga singdirishda ta’lim jarayoni, ma’naviy-ma’rifiy faoliyat va ta’limdan tashqari ishlarni yanada takomillashtirish chora-tadbirlari to’g’risida»gi buyrug’i asosida ishlab chiqildi.
                                        Institutga uzoq shahar va viloyatdan kelib, ta’lim olayotgan talabalar va tadqiqot ishlari olib borayotgan aspirantlarni vaqtincha yashash joyi bilan ta’minlash maqsadida «Talabalar turar joyi» tashkil etiladi.
                                        Talabalar turar joyi boshqaruvi – mazkur Nizom asosida institut raxbariyati tomonidan shakllantiriladi hamda o’z faoliyati yo’nalishiga, ish rejasi va dasturi, muhriga, shtat birligiga ega bo’lib, Talabalar turar joyining ma’muriy, xo’jalik, ma’naviy-axloqiy tarbiya ishlarini boshqaradi. Talabalar turar joyida talabalarning yashashi, o’z ustida mustaqil ishlashi, dam olishi hamda sport, san’at va boshqa to’garaklarga qatnashishi uchun sharoitlar yaratiladi. Talabalar turar joyining moddiy – texnik ta’minoti, uni kapital va joriy ta’mirlash, binodagi qattiq va yumshoq krovat, mebel’, xona jihozlari (ko’rpa-to’shak, yopinchiqlar, sochiqlar va boshqalar), texnika vositalarini saqlash, ta’mirlash, hududni obodonlashtirish, tozaligini ta’minlash, kommunal-xo’jalik xizmatlari (issiq va sovuq suv ta’minoti, kanalizasiya, issiq suv trubalarini ta’mirlash) va boshqa shart-sharoitlar institut ma’muriyati tomonidan ta’minlanadi.
                                        Talaba joy olish uchun fakultet dekani yoki ma’naviy-ma’rifiy ishlar prorektori nomiga ariza yozadi va unga pasport nusxasini ilova qiladi. Mazkur ariza o’rnatilgan tartibda ko’rib chiqilgach, Talabalar turar joyiga joylashish ma’naviy-ma’rifiy ishlar prorektori va kasaba uyushmasi ruxsati bilan berilgan order asosida amalga oshiriladi.Talabalar turar joyida istiqomat qiluvchi talaba va aspirantlar O’zbekiston Respublikasi Ichki ishlar vazirligi tomonidan ta’sis etilgan qoidalar asosida vaqtincha ro’yxatga olinadilar. Ro’yxatga olish ishlari Boshqaruv raisi (mudir) va pasportist(ka) tomonidan tashkil etiladi. Tarbiyaviy-madaniy, sport-sog’lomlashtirish ishlari va Talabalar turar joyida yashovchilarga maishiy xizmat ko’rsatishni tashkil etish borasidagi umumiy rahbarlik institut rektoriga yuklatiladi. Talabalar turar joyiga institut ishchi-xizmatchilari, begonalar, talaba va aspirantlarning oila a’zolarini joylashtirish qat’iyan man qilinadi. Talabalar turar joylarida yashash uchun to’lov miqdori institut rektori buyrug’i bilan belgilanadi.

                                    </p>
                                    <h5>II. Talabalar turar joyida yashovchilarning xuquq va majburiyatlari</h5>
                                    <b>Talabalar turar joyida yashovchilarning huquqlari quyidagilardan iborat:</b>
                                    <ul>
                                        <li>o’ziga ajratilgan xonada o’rnatilgan ichki tartib-qoidalarga rioya qilgan holda yashash;</li>
                                        <li>talabalar turar joyi binolaridagi madaniy-maishiy jihozlardan foydalanish;</li>
                                        <li>foydalanish uchun yaroqsiz holga kelgan jihoz, mebel va boshqa mulklarni ta’mirlash, yangilash hamda maishiy xizmatlardan foydalanishda yuzaga kelgan kamchiliklarni bartaraf etishni so’rab rahbariyatga murojaat qilish;</li>
                                        <li>talabalar turar joyida o’tkaziladigan ommaviy-madaniy, sport va tarbiyaviy tadbirlarda ishtirok etish;</li>
                                        <li>yaratilgan shart-sharoitlar bo’yicha institut ma’muriyatiga takliflar bilan chiqish;</li>
                                        <li>talabalar kengashining a’zolarini saylash va unga saylanish;</li>
                                        <li>talabalar kengashi orqali Talabalar turar joyining maishiy ta’minotini takomillashtirish, tarbiyaviy ishlarni va madaniy hordiqni tashkil etish, yashash xonalarini jihozlash bo’yicha masalalarni hal etishda ishtirok etish.</li>
                                    </ul>
                                    <b>Talabalar turar joyida yashovchilarga quyidagi majburiyatlar yuklanadi:</b>
                                    <ul>
                                        <li>ichki tartib qoidalarga qat’iy amal qilish;</li>
                                        <li>ma’muriyat bilan tuzilgan o’zaro mas’uliyat to’g’risidagi shartnoma qoidalariga rioya qilish;</li>
                                        <li>navbatchilik jadvaliga binoan xonalarda, qavat va kirish joylarida navbatchilik qilish, dam olish joylarida namunali tozalikni ta’minlash;</li>
                                        <li>elektr asboblaridan unumli foydalanish va texnika xavfsizlik qoidalariga rioya qilish;</li>
                                        <li>yashab turgan xona va umumiy foydalanish joylarini har doim saranjom tutish;</li>
                                        <li>xonadoshlar hamda Talabalar turar joyida yashayotgan talabalar bilan samimiy va ahil munosabatda bo’lish;</li>
                                        <li>talabalar turar joyi va xonadagi mavjud hamma jixozlarni (shifoner, krovat, tumbochka, stol, stul va hakozolar) namunaviy darajada tutish;</li>
                                        <li>umumiy foydalanish joylariga o’rnatilgan yoritkichlar, elektr plitalarini ehtiyot qilish, yuvinish xonasi, oshxona xamda ma’naviyat va ma’rifat xonalari jixozlaridan tug’ri foydalanish;</li>
                                        <li>elektr va gaz plitalaridan tejab foydalanish, qo’lbola elektr isitkich asboblaridan foydalanmaslik;</li>
                                        <li>jadval bo’yicha navbatchilik qilish, belgilangan muddatda qavatni hamda umumiy foydalanish joylarini (hojatxona, yuvinish xonalari, ovqat pishirish xonasi va boshqa) tozalash, maishiy chiqindilarni maxsus belgilangan joylarga o’z vaqtida chiqarib tashlash;</li>
                                        <li>talabalar turar joyida o’tkaziladigan hashar, ko’kalamzorlashtirish va obodonlashtirish ishlarida muntazam, faol qatnashish;</li>
                                        <li>talabalar turar joyidan uzoq muddatga ketishdan oldin (yozgi va qishki ta’tilga, dam olishga, amaliyotga) xonadagi jixozlarni va xona kalitini Talabalar turar joyi boshqaruvi raisi (mudir)ga topshirish;</li>
                                        <li>bitiruv malakaviy ishlarini tugallagandan so’ng yoki institutdan chetlatish to’g’risida buyruq chiqarilgan taqdirda xona va undagi jixozlarni bir hafta muddat ichida Talabalar turar joyi boshqaruvchisi raisiga topshirish.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div
                            class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column"
                        >
                            <div>
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-semibold">Pixinvent</a>
                            </div>
                            <div>
                                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                                >License</a
                                >
                                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                                >More Themes</a
                                >

                                <a
                                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation/"
                                    target="_blank"
                                    class="footer-link me-4"
                                >Documentation</a
                                >

                                <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                                >Support</a
                                >
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{asset('static/assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('static/assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="{{asset('static/assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('static/assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->
<script src="{{asset('static/assets/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('static/assets/js/ui-carousel.js')}}"></script>
<!-- Vendors JS -->
<script src="{{asset('static/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/swiper/swiper.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('static/assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('static/assets/js/dashboards-analytics.js')}}"></script>
</body>
</html>
