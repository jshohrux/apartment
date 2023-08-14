@extends('admin.layouts.base')
@section('style')
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('static/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
@endsection
@section('content')
    <!-- Content -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold mb-3"><span class="text-muted fw-light">Bosh sahifa /</span> Talabalar</h4>
        <div class="card">
            <div class="row">
                <div class="col-xl">
                  <div class="card mb-2">
                    <div class="card-body">
                      <form action="{{route('change_role')}}" method="POST">
                          {{method_field('PUT')}}
                          @csrf
                          <input type="hidden" value="{{$user->id}}" name="user_id">
                          <div class="mb-4">
                              <label class="form-label" for="name">Rolni tanlang</label>
                              <select class="form-control" name="role_id" id="role">
                                @foreach ($roles as $role)
                                    <option value="{{$role->id}}" {{$role->id==$user->role_id ? 'selected' : ''}}>{{$role->name}}</option>
                                @endforeach
                              </select>
                              @if($errors->has('name'))
                                  <div class="invalid-feedback d-block">
                                      {{$errors->first('name')}}
                                  </div>
                              @endif
                          </div>

                          <div class="mb-4">
                            <label class="form-label" for="name">Yangi parolni kiriting (agar parolni o'zgartirmochi bo'lmasangiz shunchaki bo'sh qoldiring)</label>
                            <input type="text" class="form-control">
                            @if($errors->has('name'))
                                <div class="invalid-feedback d-block">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                          <button type="submit" class="btn btn-success">Saqlash</button>
                      </form>
                    </div>
                  </div>
                </div>
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
