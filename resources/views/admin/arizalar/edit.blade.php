@extends('admin.layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Fakultet yaratish</h4>
        <!-- Multi Column with Form Separator -->
        <div class="card mb-4">
            <h5 class="card-header">Ariza</h5>
            <form class="card-body" action="{{route('ariza_update',$ariza->id)}}" method="POST">
                @csrf
                {{method_field('PUT')}}
              <h6>Umumiy ma'lumotlar</h6>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="multicol-username">Ism familya</label>
                  <input type="text" id="multicol-username" class="form-control" value="{{$ariza->user->name}}" disabled/>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="multicol-username">Jinsi</label>
                    <input type="text" id="multicol-username" class="form-control" value="{{$ariza->gender==1 ? 'Erkak' : 'Ayol'}}" disabled/>
                  </div>
                <div class="col-md-6">
                  <label class="form-label" for="multicol-email">Telefon raqami</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="text"
                      id="multicol-email"
                      class="form-control"
                      value="{{$ariza->user->phone}}"
                      disabled
                      aria-describedby="multicol-email2"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-password-toggle">
                    <label class="form-label" for="multicol-password">Kursi</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        id="multicol-password"
                        class="form-control"
                        value="{{$ariza->course}}-Kurs"
                        disabled
                      ></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-password-toggle">
                    <label class="form-label" for="multicol-confirm-password">Fakultet</label>
                    <div class="input-group input-group-merge">
                      <input
                        type="text"
                        id="multicol-confirm-password"
                        class="form-control"
                        value="{{$ariza->faculty->name}}"
                        disabled
                      />
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                    <div class="form-password-toggle">
                        <label class="form-label" for="multicol-confirm-password">Mutaxasislik</label>
                        <div class="input-group input-group-merge">
                        <input
                            type="text"
                            id="multicol-confirm-password"
                            class="form-control"
                            value="{{$ariza->specialty->name}}"
                            disabled
                        />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-password-toggle">
                        <label class="form-label" for="multicol-confirm-password">Manzil</label>
                        <div class="input-group input-group-merge">
                        <input
                            type="text"
                            id="multicol-confirm-password"
                            class="form-control"
                            value="{{$ariza->city}}"
                            disabled
                        />
                        </div>
                    </div>
                </div>
              </div>

              <hr class="my-4 mx-n4" />
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
                        <select name="apartment" id="apartment" class="select2 form-select" data-allow-clear="true">
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
    <script>
        function myFunction() {
            var x = document.getElementById("status").value;
            // document.getElementById("demo").innerHTML = "You selected: " + x;
            console.log(x);
            if(x==1){
                $("#form").removeClass("d-none");
            }else{
                $("#form").addClass("d-none");
            }
        }
    </script>
@endsection
