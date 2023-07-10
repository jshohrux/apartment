@extends('admin.layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Tuman yaratish</h4>

        <div class="row">
          <div class="col-xl">
            <div class="card mb-2">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Tuman yaratish</h5>
                <small class="text-muted float-end">Default label</small>
              </div>
              <div class="card-body">
                <form action="{{route('districts.store')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="name">Tuman nomi</label>
                        <input name="name" type="text" class="form-control" id="name" />
                        @if($errors->has('name'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="region_id">Viloyat tanlang</label>
                        <select name="region_id" id="region_id" class="select2 form-select" data-allow-clear="true">
                            @foreach ($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('region'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('region')}}
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
