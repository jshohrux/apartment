@extends('admin.layouts.base')
@section('content')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Kurslar kesimida</h4>
        <div class="card">
            {{-- <h5 class="card-header">Fakultetlar</h5> --}}
            <div class="row">
                <div class="card-header">
                    <h5 class="ms-3">Kurslar kesimda</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width: 50%">1-Kurslar</th>
                                <td>{{$birinchi}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">2-Kurslar</th>
                                <td>{{$ikkinchi}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">3-Kurslar</th>
                                <td>{{$uchinchi}}</td>
                            </tr>
                            <tr>
                                <th style="width: 50%">4-Kurslar</th>
                                <td>{{$turtinchi}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
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
@endsection
