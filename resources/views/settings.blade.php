@extends('layouts.base')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa /</span> sozlamalar</h4>

        <div class="row">
            <div class="col-md-12">
                <!-- Change Password -->
                <div class="card mb-4">
                    <h5 class="card-header">Ma'lumotlarni o'zgartirish</h5>
                    <div class="card-body">
                        <form id="formAccountSettings" method="POST" action="{{route('general',$user->id)}}">
                            {{method_field('PUT')}}
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">Ism familyangizni kiriting</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            class="form-control"
                                            type="text"
                                            id="name"
                                            name="name"
                                            value="{{$user->name}}"
                                        />
                                        @if($errors->has('name'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('name')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">Telefon raqamizni kiriting</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            class="form-control"
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            value="{{$user->phone}}"
                                        />
                                        @if($errors->has('phone'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('phone')}}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <p>Agar parolni o'zgartirmoqchi bo'lmasangiz shunchaki bo'sh qoldiring</p>
                            @if(isset($error))
                                <div class="col-sm-12">
                                    <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                        $error
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="currentPassword">Parolni kiriting</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            class="form-control"
                                            type="password"
                                            name="currentPassword"
                                            id="currentPassword"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="newPassword">Yangi parolni kiriting</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            class="form-control"
                                            type="password"
                                            id="newPassword"
                                            name="newPassword"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @if($errors->has('newPassword'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('newPassword')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6 form-password-toggle">
                                    <label class="form-label" for="confirmPassword">Yangi parolni takrorlang</label>
                                    <div class="input-group input-group-merge">
                                        <input
                                            class="form-control"
                                            type="password"
                                            name="confirmPassword"
                                            id="confirmPassword"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        />
                                        <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                        @if($errors->has('confirmPassword'))
                                            <div class="invalid-feedback d-block">
                                                {{$errors->first('confirmPassword')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <h6>Parol talablari:</h6>
                                    <ul class="ps-3 mb-0">
                                        <li class="mb-1">Eng kamida 6 ta belgi</li>
                                        <li class="mb-1">katta va kichik lotin harflari</li>
                                        <li>Raqamlar va maxsus belgilar</li>
                                    </ul>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary me-2">O'zgarishlarni saqlash</button>
                                    <button type="reset" class="btn btn-label-secondary">Bekor qilish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--/ Change Password -->
            </div>
        </div>
    </div>
    <!--/ Content -->
@endsection
@section('script')
    <script src="https://unpkg.com/imask"></script>
    <script>
        var phoneMask = IMask(
            document.getElementById('phone'), {
                mask: '+{998}-00-000-00-00'
            });
    </script>
@endsection
