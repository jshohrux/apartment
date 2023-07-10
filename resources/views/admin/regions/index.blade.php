@extends('admin.layouts.base')
@section('content')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Viloyatlar</h4>
        <div class="card">
            {{-- <h5 class="card-header">Fakultetlar</h5> --}}
            <div class="d-flex justify-content-between">
                <h5 class="card-header">Viloyatlar ro'yxati</h5>
                <div class="dt-buttons">
                    <a href="{{route('regions.create')}}" class="btn btn-success me-3 mt-3" tabindex="0" aria-haspopup="dialog" aria-expanded="false"><span>
                        <i class="ti ti-plus me-1 ti-xs"></i>Qo'shish</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table">
                        <caption class="ms-4">
                            viloyatlar ro'yxati
                        </caption>
                        <tr>
                            <th>#</th>
                            <th>Viloyat nomi</th>
                            <th>Amallar</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($regions as $key=>$region)
                        <tr>
                            <td>
                                {{++$key}}
                            </td>
                            <td>
                                <strong>
                                    {{$region->name}}
                                </strong>
                            </td>
                            <td>
                                <a href="{{route('faculty.edit',$region->id)}}"><i class="ti ti-pencil me-1"></i></a>
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
@endsection
