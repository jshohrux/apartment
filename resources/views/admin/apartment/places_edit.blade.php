@extends('admin.layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Yotoqxona joy qo'shish</h4>

        <div class="row">
          <div class="col-xl">
            <div class="card mb-2">
              <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Joy qo'shish</h5>
                <small class="text-muted float-end">Default label</small>
              </div>
              <div class="card-body">
                <form action="{{route('add.update',[$apartment->id,$place->id])}}" method="POST">
                    {{method_field('PUT')}}
                    @csrf
                    <div class="mb-2">
                        <label class="form-label" for="floor">Qavatni tanlang</label>
                        <select name="name" id="floor" class="select2 form-select" data-allow-clear="true">
                            <option value="1" {{$place->name==1 ? 'selected' : ''}}>1-Qavat</option>
                            <option value="2" {{$place->name==2 ? 'selected' : ''}}>2-Qavat</option>
                            <option value="3" {{$place->name==3 ? 'selected' : ''}}>3-Qavat</option>
                            <option value="4" {{$place->name==4 ? 'selected' : ''}}>4-Qavat</option>
                        </select>
                        @if($errors->has('name'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="name">Joylar soni</label>
                        <input name="count" type="text" class="form-control" id="name" value="{{$place->count}}"/>
                        @if($errors->has('count'))
                            <div class="invalid-feedback d-block">
                                {{$errors->first('count')}}
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
