@extends('admin.layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Mutaxassislik o'zgartirish</h4>

        <div class="row">
          <div class="col-xl">
            <div class="card mb-2">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Mutaxassislik o'zgartirish</h5>
                <small class="text-muted float-end">Default label</small>
              </div>
              <div class="card-body">
                <form action="{{route('speciality.update',$speciality->id)}}" method="POST">
                    {{method_field('PUT')}}
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="name">Mutaxassislik nomi</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$speciality->name}}"/>
                        @if($errors->has('name'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="faculty">Fakultetni tanlang</label>
                        <select name="faculty" id="faculty" class="select2 form-select" data-allow-clear="true">
                            @foreach ($faculties as $faculty)
                                <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('faculty'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('faculty')}}
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
      <!-- / Content -->
@endsection
