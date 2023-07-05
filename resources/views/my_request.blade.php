@extends('layouts.base')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Mening arizalarim</h4>
        <div class="card">
            <h5 class="card-header">Arizalar</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <caption class="ms-4">
                        Arizalar ro'yxati
                    </caption>
                    <thead class="table">
                        <tr>
                            <th>Ariza ID</th>
                            <th>Ism familya</th>
                            <th>Telefon raqami</th>
                            <th>Status</th>
                            <th>Amallar</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($arizalar as $ariza)
                        <tr>
                            <td>
                                {{$ariza->id}}
                            </td>
                            <td>
                                <strong>
                                    {{$ariza->user->name}}
                                </strong>
                            </td>
                            <td>
                                +{{$ariza->user->phone}}
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
                                <a class="btn btn-primary" href="{{route('my_show',$ariza->id)}}">
                                    <i class="ti ti-eye text-white"></i>
                                </a>
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
