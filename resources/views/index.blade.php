@extends('layouts.base')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    @if(!empty($success))
        <div class="alert alert-success">{{ $success }}</div>
    @endif

    <div class="row">
        <!-- With arrows -->
        <div class="col-md-12 mb-4">
          <h6 class="text-muted mt-3">With arrows</h6>
          <div class="swiper carouselExample" id="swiper-with-arrows" style="height: 700px">
            <div class="swiper-wrapper">
              <div class="swiper-slide" style="background-image: url({{asset('static/assets/img/slide/1.jpg')}});">
                Slide 1
              </div>
              <div class="swiper-slide" style="background-image: url({{asset('static/assets/img/slide/2.jpg')}})">
                Slide 2
              </div>
              <div class="swiper-slide" style="background-image: url({{asset('static/assets/img/elements/5.jpg')}})">
                Slide 3
              </div>
              <div class="swiper-slide" style="background-image: url({{asset('static/assets/img/elements/9.jpg')}})">
                Slide 4
              </div>
              <div class="swiper-slide" style="background-image: url({{asset('static/assets/img/elements/7.jpg')}})">
                Slide 5
              </div>
            </div>
            <div class="swiper-button-next swiper-button-white custom-icon"></div>
            <div class="swiper-button-prev swiper-button-white custom-icon"></div>
          </div>
        </div>

      </div>
</div>
@endsection
