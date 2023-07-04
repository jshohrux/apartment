@extends('admin.layouts.base')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Talabalar</h4>
        <div class="card">
            <h5 class="card-header">Dark Table head</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                    <tr>
                        <th>Ism familya</th>
                        <th>Telefon raqami</th>
                        <th>Users</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($students as $student)
                        <tr>
                        <td>
                            <strong>
                                {{$student->name}}
                            </strong>
                        </td>
                        <td>
                            +{{$student->phone}}
                        </td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Lilian Fuller"
                                >
                                    <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Sophia Wilkerson"
                                >
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                    data-bs-toggle="tooltip"
                                    data-popup="tooltip-custom"
                                    data-bs-placement="top"
                                    class="avatar avatar-xs pull-up"
                                    title="Christina Parker"
                                >
                                    <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <a href="#"><i class="ti ti-pencil me-1"></i></a>
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
