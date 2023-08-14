@extends('admin.layouts.base')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Arizalar ro'yxati</h4>
        <div class="card">
            <h5 class="card-header">Arizalar</h5>
            <div class="card-body">
                <form action="{{route('accepted')}}" method="GET">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label" for="region">Viloyatni tanlang</label>
                            <select name="region" id="region" class="select2 form-select" onchange="selectRegion(this)">
                                <option value="">Tanlang</option>
                                @foreach ($regions as $region)
                                    <option value="{{$region->id}}" {{$region->id==request('region') ? 'selected' : ''}}>{{$region->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('region'))
                                <div class="invalid-feedback d-block">
                                    {{$errors->first('region')}}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="region">Faklutetni tanlang</label>
                            <select name="faculty" id="faculty" class="select2 form-select" onchange="selectRegion(this)">
                                <option value="">Tanlang</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{$faculty->id}}" {{$faculty->id==request('faculty') ? 'selected' : ''}}>{{$faculty->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('faculty'))
                                <div class="invalid-feedback d-block">
                                    {{$errors->first('faculty')}}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label class="form-label" for="region">Jinsni tanlang</label>
                            <select name="gender" id="gender" class="select2 form-select" onchange="selectRegion(this)">
                                <option value="">Tanlang</option>
                                <option value="1" {{1==request('gender') ? 'selected' : ''}}>Erkak</option>
                                <option value="2" {{2==request('gender') ? 'selected' : ''}}>Ayol</option>
                            </select>
                            @if($errors->has('faculty'))
                                <div class="invalid-feedback d-block">
                                    {{$errors->first('faculty')}}
                                </div>
                            @endif
                        </div>

                        <div class="col-md-3 mt-4">
                            <button type="submit" class="btn btn-success">Qidirish</button>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Jami arizalar soni : {{$count}}
                    </caption>
                    <thead class="table">
                    <tr>
                        <th>#</th>
                        <th>Ism familya</th>
                        <th>Telefon raqami</th>
                        <th>Kursi</th>
                        <th>Fakulteti</th>
                        <th>Mutaxasislik</th>
                        <th>Jins</th>
                        <th>Status</th>
                        <th>Izoh</th>
                        <th>Yotoqxona</th>
                        <th>Qavat</th>
                        <th>Amallar</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($arizalar as $key=>$ariza)
                        <tr>
                            <td>
                                {{++$key}}
                            </td>
                            <td>
                                <strong>
                                    {{$ariza->fullname}}
                                </strong>
                            </td>
                            <td>
                                {{$ariza->phone}}
                            </td>
                            <td>
                                {{$ariza->course}}-Kurs
                            </td>
                            <td>
                                {{$ariza->faculty->name}}
                            </td>
                            <td>
                                {{$ariza->specialty->name}}
                            </td>
                            <td>
                                {{$ariza->gender==1 ? 'Erkak' : 'Ayol'}}
                            </td>
                            <td>
                                @if($ariza->status==0)
                                    <span class="badge bg-label-primary me-1">Ko'rib chiqilmoqda</span>
                                @elseif($ariza->status==1)
                                    <span class="badge bg-label-success me-1">Qabul qilindi</span>
                                @else
                                    <span class="badge bg-label-danger me-1">Rad etildi</span>
                                @endif
                            </td>
                            <td>
                                {{$ariza->description}}
                            </td>
                            <td style="word-wrap: break-word;">
                                {{$ariza->apartment->name}}
                            </td>
                            <td>
                                {{$ariza->place ? $ariza->place->name : ''}}-Qavat
                            </td>
                            <td>
                                <a href="{{route('ariza_edit',$ariza->id)}}"><i class="ti ti-pencil me-1"></i></a>
                                <a href="#"  onclick="delete_function(this, {{ $ariza->id }})"> <i class="ti ti-trash me-1"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
@section('script')
    <script src="{{asset('static/assets/js/app-invoice-list.js')}}"></script>
     <script src="{{asset('static/assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
     <script src="{{asset('static/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
     <script src="{{asset('static/assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
     <script src="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
     <script src="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>
    <script src="{{asset('static/assets/js/extended-ui-sweetalert2.js')}}"></script>
    <script src="{{asset('static/assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
    <script>
        function delete_function(btn, id) {
            Swal.fire({
                text: 'Rostan ham o\'chirmoqchimisiz',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ha',
                cancelButtonText: 'Bekor qlish',
                customClass: {
                    confirmButton: 'btn btn-primary',
                    cancelButton: 'btn btn-outline-danger ms-2'
                },
                buttonsStyling: false,
                preConfirm: (login) => {
                    return fetch(`delete/` + id, {
                        method: "POST", headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText)
                            }
                            return response.json()
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            )
                        })
                },
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                        icon: 'success',
                        title: 'O\'chirildi!',
                        text: 'muvofaqqiyatli o\'chirildi',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        },
                        preConfirm: (login) => {
                            location.reload();
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Bekor qlindi',
                        text: 'O\'chirish amali bekor qlindi!!',
                        icon: 'error',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        }
                    });
                }
            });
        }
    </script>
@endsection
