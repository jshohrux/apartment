@extends('admin.layouts.base')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Talabalar</span>
                  <div class="d-flex align-items-center my-1">
                    <h4 class="mb-0 me-2">{{$users}}</h4>
                    <span class="text-success">(+29%)</span>
                  </div>
                  <span>
                    <a href="#">
                        Ko'rish
                    </a>
                  </span>
                </div>
                <span class="badge bg-label-primary rounded p-2">
                  <i class="ti ti-user ti-sm"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Qabul qilingan arizalar</span>
                  <div class="d-flex align-items-center my-1">
                    <h4 class="mb-0 me-2">{{$active}}</h4>
                    <span class="text-success">(+18%)</span>
                  </div>
                  <span>
                    <a href="">
                        Ko'rish
                    </a>
                  </span>
                </div>
                <span class="badge bg-label-success rounded p-2">
                  <i class="ti ti-user-plus ti-sm"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Rad etilgan arizalar</span>
                  <div class="d-flex align-items-center my-1">
                    <h4 class="mb-0 me-2">{{$inactive}}</h4>
                    <span class="text-danger">(-14%)</span>
                  </div>
                  <span>
                    <a href="">
                        Ko'rish
                    </a>
                  </span>
                </div>
                <span class="badge bg-label-danger rounded p-2">
                  <i class="ti ti-user-check ti-sm"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-start justify-content-between">
                <div class="content-left">
                  <span>Yangi arizalar</span>
                  <div class="d-flex align-items-center my-1">
                    <h4 class="mb-0 me-2">{{$pending}}</h4>
                    <span class="text-success">(+42%)</span>
                  </div>
                  <span>
                    <a href="">
                        Ko'rish
                    </a>
                  </span>
                </div>
                <span class="badge bg-label-warning rounded p-2">
                  <i class="ti ti-user-exclamation ti-sm"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
