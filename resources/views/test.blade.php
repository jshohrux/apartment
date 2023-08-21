@extends('front.app')

@section('content')
    {{-- <div class="col-md-12 mb-4">
        <div class="swiper" id="swiper-with-arrows" style="height: 700px">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center img-slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)),
                    url({{asset('static/assets/img/elements/1.jpg')}})">
                    <div class="container" style="max-width: none;">
                        <p class="font-medium-10 text-uppercase"> TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI ! </p>
                    </div>
                </div>
                <div class="swiper-slide d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)),
                    url({{asset('static/assets/img/elements/4.jpg')}});">
                    <div class="container" >
                        <p class="font-medium-10 text-uppercase"> TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI ! </p>
                    </div>
                </div>
                <div class="swiper-slide d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)),
                        url({{asset('static/assets/img/elements/3.jpg')}});">
                    <div class="container">
                        <p class="font-medium-10 text-uppercase"> TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI ! </p>
                    </div>
                </div>
                <div class="swiper-slide d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)),url({{asset('static/assets/img/elements/2.jpg')}});">
                    <div class="container">
                        <p class="font-medium-10 text-uppercase"> TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI ! </p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-white custom-icon"></div>
            <div class="swiper-button-prev swiper-button-white custom-icon"></div>
        </div>
    </div> --}}

    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
          <!-- Website Analytics -->
          <div class="col-lg-6 mb-4">
            <div class="col-md">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('static/assets/img/elements/1_1.jpg')}}" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h4>TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI !</h4>
                        {{-- <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p> --}}
                    </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('static/assets/img/elements/2_1.jpg')}}" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h4>TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI !</h4>
                        </div>
                    </div> --}}
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('static/assets/img/elements/3_1.jpg')}}" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h4>TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI !</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('static/assets/img/elements/4_1.jpg')}}" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h4>TALABALAR TURAR JOYI TALABALARNI BIRLASHTIRADI !</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
                </div>
            </div>
          </div>
          <!--/ Website Analytics -->

          <!-- Sales Overview -->
          <div class="col-lg-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <h4>Universitet talabalar turar joyiga birinchi navbatda quyidagi mezonlar asosida joylashtiriladi.</h4>
                    <ul style="list-style: none">
                        <li>- Kam ta’minlangan oilafarzandlari</li>
                        <li>- Boquvchisini yo‘qotgan ko‘p bolali oila farzandlari</li>
                        <li>- I va II guruh nogironligi bo‘lgan talaba</li>
                        <li>- To‘liq davlat ta’minotida bo‘lgan (chin yetim)</li>
                        <li>- Oilasida 2 va undan ortiq to‘lov-kontrakt asosida ta’lim oluvchi talaba</li>
                        <li>- “Temir daftar”ga tushgan oila farzandi</li>
                        <li>- Ota-onasining doimiy ish joyi mavjud bo‘lmagan talaba</li>
                        <li>- Oilasida I va II guruh nogironligi yoki surunkali kasallik bilan davolanadigani mavjud bo‘lgan talaba

                    </ul>
                    <h4>Talabalar turar joylarida istiqomat qilish uchun kimlarga imtiyoz beriladi ?</h4>
                    <ul style="list-style: none">
                        <li>- Talabalar turar joylarida istiqomat qilish uchun kimlarga imtiyoz beriladi ?</li>
                        <li>- II guruh nogironligi bo‘lgan talabalar uchun 50 foiz chegirma mavjud.</li>
                        <li>- Chin yetim va I guruh nogironligi mavjud bo'lgan talabalarga bepul</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
          <!--/ Sales Overview -->
        </div>

        <div class="row mb-5">
            <div class="col-md-6 col-xl-3">
              <div class="card mb-3">
                <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/1.jpg')}}" alt="Card image cap" />
                <div class="card-body">
                  <h5 class="card-title text-center">Talabalar yotoqxonasi</h5>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/2.jpg')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Talabalar uchun kutubxona</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/3.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Workout maydonchasi</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/4.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Talabalar oshxonasi</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/5.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Sport maydonchasi</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/6.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Talabalar dam olish xonasi</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/7.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Kir yuvish xonasi</h5>
                  </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card mb-3">
                  <img class="card-img-top" src="{{asset('static/assets/img/elements/yotoqxona/8.png')}}" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-center">Kirish joyi</h5>
                  </div>
                </div>
            </div>
        </div>

    </div>
      <!--/ Content -->
@endsection
