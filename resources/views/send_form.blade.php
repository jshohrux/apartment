@extends('layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Ariza yuborish</h4>

        @if(!empty($success))
            <div class="alert alert-success">{{ $success }}</div>
        @else
        <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
            <h5 class="card-header">Formani to'ldiring</h5>
            <form class="card-body" action="{{route('ariza_saqlash')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img
                        src="{{asset('static/assets/img/avatars/14.png')}}"
                        alt="user-avatar"
                        class="d-block rounded w-px-100 h-px-100"
                        id="uploadedAvatar"
                    />
                    <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                            <span class="d-none d-sm-block">Rasm yuklash</span>
                            <i class="ti ti-upload d-block d-sm-none"></i>
                            <input
                                name="photo"
                                type="file"
                                id="upload"
                                class="account-file-input"
                                hidden
                            />
                        </label>
                        <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Olib tashlash</span>
                        </button>

                        <div class="text-muted">Rasmingizni yuklang</div>
                        @if($errors->has('photo'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('photo')}}
                            </div>
                        @endif
                    </div>
                    </div>
                </div>
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label" for="faculty">Ism familyangizni to'liq yozing</label>
                        <input name="fullname" type="text" class="form-control" value="{{old('fullname')}}">
                        @if($errors->has('fullname'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('fullname')}}
                            </div>
                        @endif
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="birthday">Tug'ilgan sana</label>
                        <input name="birthday" type="date" class="form-control" value="{{old('birthday')}}" id="birthday">
                        @if($errors->has('birthday'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('birthday')}}
                            </div>
                        @endif
                    </div>


                    <div class="col-md-6">
                        <label class="form-label" for="faculty">Passport seriya va raqami</label>
                        <input name="passport" id="passport" type="text" class="form-control" placeholder="AB1234567" style="text-transform:uppercase" value="{{old('passport')}}">
                        @if($errors->has('passport'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('passport')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="faculty">Fakultetni tanlang</label>
                        <select name="faculty" id="faculty" class="select2 form-select" onchange="selectSpeciality(this)">
                            <option value="none" selected disabled hidden>Tanlang</option>
                            @foreach ($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('faculty'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('faculty')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="speciality">Yo'nalishingizni tanlang</label>
                        <select name="speciality" id="speciality" class="select2 form-select" >
                            {{-- @foreach ($speciality as $speciality)
                                <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                            @endforeach --}}
                        </select>

                        @if($errors->has('speciality'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('speciality')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="course">Kursni tanlang</label>
                        <select name="course" id="course" class="select2 form-select" data-allow-clear="true">
                            <option value="1">1-Kurs</option>
                            <option value="2">2-Kurs</option>
                            <option value="3">3-Kurs</option>
                            <option value="4">4-Kurs</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="gender">Jinsni tanlang</label>
                        <select name="gender" id="gender" class="select2 form-select" data-allow-clear="true">
                            <option value="1">Erkak</option>
                            <option value="2">Ayol</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="phone">Telefon raqami</label>
                        <input name="phone" id="phone" type="text" class="form-control" value="+998" style="text-transform:uppercase">
                        @if($errors->has('phone'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('phone')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="region">Viloyatni tanlang</label>
                        <select name="region" id="region" class="select2 form-select" onchange="selectRegion(this)">
                            <option value="none" selected disabled hidden>Tanlang</option>
                            @foreach ($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach
                        </select>

                        @if($errors->has('region'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('region')}}
                            </div>
                        @endif

                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="district">Tumanni tanlang</label>
                        <select name="district" id="district" class="select2 form-select">
                            {{-- @foreach ($districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach --}}
                        </select>
                        @if($errors->has('district'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('district')}}
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="address">manzil</label>
                        <textarea id="address" class="form-control" name="address" id="">{{ old('address')}}</textarea>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="file">Talabalar turar joyiga joylashish uchun talabaning  asoslovchi hujjati (pdf, jpg)</label>
                        <input name="file" id="file" type="file" class="form-control">
                    </div>
                </div>
                <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Yuborish</button>
                <button type="reset" class="btn btn-label-secondary">Bekor qilish</button>
                </div>
            </form>
            </div>
        @endif

      </div>
      <!-- / Content -->
@endsection
@section('script')
{{-- <script src="{{asset('static/assets/js/pages-account-settings-account.js')}}"></script> --}}
<script src="{{asset('static/assets/vendor/libs/select2/select2.js')}}"></script>
<script src="https://unpkg.com/imask"></script>
<script>
    var phoneMask = IMask(
        document.getElementById('passport'), {
        mask: '[aa]0000000'
    });

    var phoneMask = IMask(
        document.getElementById('phone'), {
        mask: '+{998}-00-000-00-00'
    });

    let accountUserImage = document.getElementById('uploadedAvatar');
    const fileInput = document.querySelector('.account-file-input'),
    resetFileInput = document.querySelector('.account-image-reset');

    if (accountUserImage) {
      const resetImage = accountUserImage.src;
      fileInput.onchange = () => {
        if (fileInput.files[0]) {
          accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
        }
      };
      resetFileInput.onclick = () => {
        fileInput.value = '';
        accountUserImage.src = resetImage;
      };
    }
</script>
@endsection
