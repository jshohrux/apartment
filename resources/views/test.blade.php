@extends('front.app')
@section('content')
    <div class="col-md-12 mb-4">
        {{-- <h6 class="text-muted mt-3">With arrows</h6> --}}
        {{-- swipper --}}
        <div class="swiper" id="swiper-with-arrows" style="height: 700px">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.7)),
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
                {{--                     <div class="swiper-slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5)), url({{asset('static/assets/img/elements/7.jpg')}})">--}}
                {{--                      Slide 5--}}
                {{--                    </div>--}}
            </div>
            <div class="swiper-button-next swiper-button-white custom-icon"></div>
            <div class="swiper-button-prev swiper-button-white custom-icon"></div>
        </div>
        {{-- swipper --}}

        {{--               <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">--}}
        {{--                    <ol class="carousel-indicators">--}}
        {{--                        <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"></li>--}}
        {{--                        <li data-bs-target="#carouselExample" data-bs-slide-to="1" class=""></li>--}}
        {{--                        <li data-bs-target="#carouselExample" data-bs-slide-to="2" class=""></li>--}}
        {{--                    </ol>--}}
        {{--                    <div class="carousel-inner">--}}
        {{--                        <div class="carousel-item active d-flex align-items-center">--}}
        {{--                        <img class="img-fluid d-block w-100" src="static/assets/img/slide/1.jpg" alt="First slide">--}}
        {{--                        <div class="carousel-caption d-none d-md-block">--}}
        {{--                            <h4>First slide</h4>--}}
        {{--                            <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>--}}
        {{--                        </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="carousel-item">--}}
        {{--                        <img style="margin-top: -150px" class="img-fluid d-block w-100" src="static/assets/img/slide/2.jpg" alt="Second slide">--}}
        {{--                        <div class="carousel-caption d-none d-md-block">--}}
        {{--                            <h4>Second slide</h4>--}}
        {{--                            <p>In numquam omittam sea.</p>--}}
        {{--                        </div>--}}
        {{--                        </div>--}}
        {{--                        <div class="carousel-item">--}}
        {{--                        <img class="img-fluid d-block w-100" src="static/assets/img/slide/1.jpg" alt="Third slide">--}}
        {{--                        <div class="carousel-caption d-none d-md-block">--}}
        {{--                            <h4>Third slide</h4>--}}
        {{--                            <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>--}}
        {{--                        </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">--}}
        {{--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
        {{--                        <span class="visually-hidden">Previous</span>--}}
        {{--                    </a>--}}
        {{--                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">--}}
        {{--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
        {{--                        <span class="visually-hidden">Next</span>--}}
        {{--                    </a>--}}
        {{--               </div>--}}

    </div>
@endsection
