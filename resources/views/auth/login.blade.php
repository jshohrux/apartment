<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title>Kirish | JDPU talabalar yotoqxonasi</title>

    <meta name="description" content="JDPU talabalar yotoqxonasi" />

    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"/>

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

    <link rel="stylesheet" href="{{asset('static/assets/vendor/css/pages/cards-advance.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/toastr/toastr.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/animate-css/animate.css')}}}" />

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
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="{{route('bosh_sahifa')}}" class="app-brand-link gap-2">
                    <span class="logo">
                        <img src="{{asset('static/assets/img/logo.png')}}" alt="" class="img" width="180">
                    </span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-1 pt-2">Xush kelibsiz! 👋</h4>
            @if(session()->has('error'))
                <h6 style="color: red">{{session()->get('error')}}</h6>
            @endif
              <form id="formAuthentication" method="POST" action="{{ route('login') }}" class="mb-3">
                @csrf
                <div class="mb-3">
                  <label for="phone-mask" class="form-label">Telefon raqami</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="phone-mask" name="phone" value="+998"/>
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Parol</label>
                    {{-- <a href="auth-forgot-password-basic.html">
                      <small>Parol esdan chiqdimi?</small>
                    </a> --}}
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" />
                    <label class="form-check-label" for="remember">Meni eslab qol</label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Kirish</button>
                </div>
              </form>

              <p class="text-center">
                <span>Tizimda yangimisiz?</span>
                <a href="{{ route('register') }}">
                  <span>Ro'yxatdan o'tish</span>
                </a>
              </p>

              {{-- <div class="divider my-4">
                <div class="divider-text">yoki</div>
              </div>

              <div class="d-flex justify-content-center">
                <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
                  <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
                  <i class="tf-icons fa-brands fa-google fs-5"></i>
                </a>

                <a href="javascript:;" class="btn btn-icon btn-label-twitter">
                  <i class="tf-icons fa-brands fa-twitter fs-5"></i>
                </a>
              </div> --}}
            </div>
          </div>
          <!-- /Register -->
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
            document.getElementById('phone-mask'), {
                mask: '+{998}-00-000-00-00'
            });
    </script>

    <script src="{{asset('static/assets/js/ui-toasts.js')}}"></script>
    <script src="{{asset('static/assets/vendor/libs/toastr/toastr.js')}}"></script>
    <script>
        @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>
  </body>
</html>
