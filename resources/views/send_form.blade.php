@extends('layouts.base')
@section('content')
    <!-- Content -->

    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Bosh sahifa/</span> Ariza yuborish</h4>

        <!-- Multi Column with Form Separator -->
        <div class="card mb-4">
          <h5 class="card-header">Formani to'ldiring</h5>
          <form class="card-body" action="{{route('ariza_saqlash')}}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="faculty">Fakultetni tanlang</label>
                    <select name="faculty" id="faculty" class="select2 form-select" data-allow-clear="true">
                        @foreach ($faculties as $faculty)
                            <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="speciality">Yo'nalishingizni tanlang</label>
                    <select name="speciality" id="speciality" class="select2 form-select" data-allow-clear="true">
                        @foreach ($speciality as $speciality)
                            <option value="{{$speciality->id}}">{{$speciality->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="course">Kursni tanlang</label>
                    <select name="course" id="course" class="select2 form-select" data-allow-clear="true">
                        <option value="1">1-Kurs</option>
                        <option value="2">2-Kurs</option>
                        <option value="3">3-Kurs</option>
                        <option value="4">4-Kurs</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="gender">Jinsni tanlang</label>
                    <select name="gender" id="gender" class="select2 form-select" data-allow-clear="true">
                        <option value="1">Erkak</option>
                        <option value="2">Ayol</option>
                    </select>
                </div>

              <div class="col-md-12">
                <label class="form-label" for="multicol-username">manzil</label>
                <textarea class="form-control" name="address" id=""></textarea>
              </div>
            </div>
            <div class="pt-4">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Yuborish</button>
              <button type="reset" class="btn btn-label-secondary">Bekor qilish</button>
            </div>
          </form>
        </div>

      </div>
      <!-- / Content -->
@endsection
