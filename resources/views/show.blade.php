@extends('layouts.base')
@section('content')
       {{-- Modal --}}
    <!-- Refer & Earn Modal -->
    <div class="mt-5 ms-3 me-3">
        <div class="modal-dialog modal-fluid modal-simple modal-refer-and-earn">
            <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                <h3 class="mb-2">Ariza ma'lumotlari</h3>
                <p>{{$my_ariza->id}}-ID raqamli ariza</p>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3 px-4 mb-2">
                        <div class="d-flex justify-content-center mb-4">
                            <div class="modal-refer-and-earn-step bg-label-primary">
                                <i class="ti ti-check text-success"></i>
                            </div>
                            </div>
                            <div class="text-center">
                            <h5>Ariza holati</h5>
                            <p class="mb-lg-0">
                                @if($my_ariza->status==0)
                                    <span class="badge bg-label-primary me-1">Ko'rib chiqilmoqda</span>
                                @elseif($my_ariza->status==1)
                                    <span class="badge bg-label-success me-1">Qabul qilindi</span>
                                @else
                                    <span class="badge bg-label-danger me-1">Rad etildi</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 px-4 mb-2">
                        <div class="d-flex justify-content-center mb-4">
                        <div class="modal-refer-and-earn-step bg-label-primary">
                            <i class="ti ti-list"></i>
                        </div>
                        </div>
                        <div class="text-center">
                        <h5>Izoh</h5>
                        <p class="mb-0">
                            {{$my_ariza->description }}
                        </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 px-4 mb-2">
                        <div class="d-flex justify-content-center mb-4">
                        <div class="modal-refer-and-earn-step bg-label-primary">
                            <i class="ti ti-home"></i>
                        </div>
                        </div>
                        <div class="text-center">
                        <h5>Yotoqxona</h5>
                        <p class="mb-0">
                            {{$my_ariza->apartment ? $my_ariza->apartment->name : ''}}
                        </p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 px-4 mb-2">
                        <div class="d-flex justify-content-center mb-4">
                        <div class="modal-refer-and-earn-step bg-label-primary">
                            <i class="ti ti-building"></i>
                        </div>
                        </div>
                        <div class="text-center">
                        <h5>Qavat</h5>
                        <p class="mb-lg-0">
                            {{$my_ariza->place ? $my_ariza->place->name."-Qavat" : ''}}
                        </p>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </div>
    <!--/ Refer & Earn Modal -->
@endsection
