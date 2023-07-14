<!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="../../assets/"
    data-template="vertical-menu-template"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Ro'yxatdan o'tish | JDPU talabalar yotoqxonasi</title>

    <meta name="description" content="Ro'yxatdan o'tish JDPU talabalar yotoqxonasi" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" /> --}}

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
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('static/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('static/assets/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('static/assets/js/config.js')}}"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mb-4 mt-2">
                        <a href="{{route('bosh_sahifa')}}" class="app-brand-link gap-2">
                            <span class="logo">
                                <img src="{{asset('static/assets/img/logo.png')}}" alt="" class="img" width="180">
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-1 pt-2">Xush kelibsiz 🚀</h4>
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Ism familya</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text">
                                  <i class="ti ti-user"></i>
                                </span>
                                <input value="{{old('name')}}" type="text" class="form-control" id="name" name="name" placeholder="Ism familyangizni kiriting" />
                            </div>
                            @error('name')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Telefon raqami</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text">
                                  <i class="ti ti-phone"></i>
                                </span>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    value="+998"
                                />
                            </div>
                            @error('phone')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Parol</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text">
                                  <i class="ti ti-lock"></i>
                                </span>
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"
                                />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password')
                            <div class="fv-plugins-message-container invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Parolni takrorlang</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text">
                                  <i class="ti ti-key"></i>
                                </span>
                                <input
                                    type="password"
                                    id="password_confirmation"
                                    class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password_confirmation"
                                />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100" type="submit">Ro'yxatdan o'tish</button>
                    </form>

                    <p class="text-center">
                        <span>Tizimda hisobingiz bormi?</span>
                        <a href="{{ route('login') }}">
                            <span>Kirish</span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
<script src="{{asset('static/assets/js/main.js')}}"></script>
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

<!-- Vendors JS -->
<script src="{{asset('static/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('static/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

<!-- Main JS -->


<!-- Page JS -->
<script src="{{asset('static/assets/js/pages-auth.js')}}"></script>

<script src="https://unpkg.com/imask"></script>
<script>
    var phoneMask = IMask(
        document.getElementById('phone'), {
            mask: '+{998}-00-000-00-00'
        });
</script>
</body>
</html>
