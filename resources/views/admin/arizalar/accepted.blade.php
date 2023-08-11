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
                        <th>Ism familya</th>
                        <th>Telefon raqami</th>
                        <th>Kursi</th>
                        <th>Fakulteti</th>
                        <th>Mutaxasislik</th>
                        <th>Jins</th>
                        <th>Status</th>
                        <th>Yotoqxona</th>
                        <th>Qavat</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($arizalar as $ariza)
                        <tr>
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
                            {{$ariza->apartment->name}}
                        </td>
                        <td>
                            {{$ariza->place ? $ariza->place->name : ''}}-Qavat
                        </td>
                        <td>
                            <a href="{{route('ariza_edit',$ariza->id)}}"><i class="ti ti-pencil me-1"></i></a>
                            <a href="$"> <i class="ti ti-trash me-1"></i></a>
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
@endsection
