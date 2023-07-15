@extends('admin.layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3"><span class="text-muted fw-light">Bosh sahifa/</span> Fakultet yaratish</h4>
        <!-- Multi Column with Form Separator -->
        <div class="card">
            <div class="col-xl-12 col-lg-5 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-5">
                                <div class="flex-shrink-0 mt-3 mx-0 mx-auto">
                                    <img
                                        src="{{url(Storage::url($ariza->photo))}}"
                                        alt="user image"
                                        class="d-block h-auto rounded img-fluid"
                                    />
                                </div>
                                <div class="mt-2">Rasm</div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-5">
                                <small class="card-text text-uppercase">Talaba xaqida</small>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-user"></i><span class="fw-bold mx-2">FIO:</span> <span>{{$ariza->user->name}}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-check"></i><span class="fw-bold mx-2">Status:</span>
                                        @if($ariza->status==1)
                                            <span class="badge bg-label-success ms-1">Qabul qilindi</span>
                                        @elseif($ariza->status==0)
                                            <span class="badge bg-label-warning ms-1">Ko'rib chiqilmoqda</span>
                                        @else
                                            <span class="badge bg-label-success ms-1">Rad etildi</span>
                                        @endif
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-crown"></i><span class="fw-bold mx-2">Role:</span> <span>{{$ariza->user->role->name}}</span>
                                    </li>

                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-map-pin"></i><span class="fw-bold mx-2">Shahar:</span>
                                        <span>{{$ariza->region->name}}</span>
                                    </li>

                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-flag"></i><span class="fw-bold mx-2">Tuman:</span> <span>ZAfarobod</span>
                                    </li>

                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-map-pin"></i><span class="fw-bold mx-2">Manzil:</span> <span>{{$ariza->city}}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-calendar"></i><span class="fw-bold mx-2">Tug'ilgan sana:</span>
                                        <span>{{$ariza->birthday}}</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-5">
                                <small class="card-text text-uppercase">ALOQA</small>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-phone-call"></i><span class="fw-bold mx-2">Telefon:</span>
                                        <span>{{$ariza->phone}}</span>
                                    </li>
                                </ul>
                                <small class="card-text text-uppercase">O'qish</small>
                                <ul class="list-unstyled mb-4 mt-3">
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-file-description"></i><span class="fw-bold mx-2">Fakultet:</span>
                                        <span>{{$ariza->faculty->name}}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-file-description"></i><span class="fw-bold mx-2">Mutaxasislik:</span>
                                        <span>{{$ariza->specialty->name}}</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-file-description"></i><span class="fw-bold mx-2">Kursi:</span>
                                        <span>{{$ariza->course}}-Kurs</span>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <i class="ti ti-file"></i><span class="fw-bold mx-2">Asoslovchi hujjat:</span>
                                        <span>
                                            <a href="{{Storage::url($ariza->file)}}">Ko'rish</a>
                                        </span>
                                    </li>
                                    {{-- <li class="d-flex align-items-center mb-3">
                                      <i class="ti ti-file-description"></i><span class="fw-bold mx-2">Qaysi tilni biladi:</span>
                                      @foreach($user->languages as $language)
                                      <span class="badge bg-label-info ms-1">{{$language->name}}</span>
                                      @endforeach
                                    </li> --}}
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="card-body" action="{{route('ariza_update',$ariza->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
              <h6>Ariza</h6>
              <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="status">Ariza holatini belgilang</label>
                    <select name="status" id="status" class="select2 form-select" onchange="myFunction()">
                        <option value="1">Qabul qilish</option>
                        <option value="-1">Rad qilish</option>
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback d-block">
                            {{$errors->first('status')}}
                        </div>
                    @endif
                </div>
                <div class="row g-3 ms-0 me-0" id="form" style="padding-left: 0px; padding-right: 0px">
                    <div class="col-md-6">
                        <label class="form-label" for="status">Yotoqxonani tanlang</label>
                        <select name="apartment" id="apartment" class="select2 form-select" onchange="selectApartment(this)">
                            <option value="">Yotoqxonani tanlang</option>
                            <option value="1">1-Yotoqxona</option>
                            <option value="2">2-Yotoqxona</option>
                        </select>
                        @if($errors->has('apartment'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('apartment')}}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="floor">Qavatni tanlang</label>
                        <select name="floor" id="floor" class="select2 form-select" data-allow-clear="true">
                            <option value="">Qavatni tanlang</option>
                            <option value="1">1-Qavat</option>
                            <option value="2">2-Qavat</option>
                            <option value="3">3-Qavat</option>
                            <option value="4">4-Qavat</option>
                        </select>
                        @if($errors->has('floor'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('floor')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                  <label class="form-label" for="multicol-phone">Izoh</label>
                  <textarea name="description" class="form-control"></textarea>
                </div>
              </div>
              <div class="pt-4">
                <button type="submit" class="btn btn-success me-sm-3 me-1">Tasdiqlash</button>
              </div>
            </form>
          </div>
    </div>
      <!-- / Content -->
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript" language="javascript"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("status").value;
            console.log(x);
            if(x==1){
                $("#form").removeClass("d-none");
            }else{
                $("#form").addClass("d-none");
            }
        }
    </script>
    <script>
        function selectApartment(selectObject) {
            var id = selectObject.value;
            console.log(id)
            if (id) {
                $.ajax({
                    type: "get",
                    url: "/admin/get-places",
                    data: { id: id },
                    cache: false,
                    success: function (data) {
                        select = document.getElementById("floor");
                        select.innerHTML = data;
                        select.disabled=false;
                    },
                    error: function (data) {},
                });
            }
        }
    </script>
@endsection
