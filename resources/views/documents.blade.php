@extends('front.app')
@section('content')
    <div class="container-fluid container-p-y">
        <div class="row">
            <div class="col-md mb-4 mb-md-2">
                <small class="text-light fw-semibold">Me'yoriy hujjatlar</small>
                <div class="accordion mt-3" id="accordionExample">
                    @foreach($documents as $key=>$document)
                        <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button
                                type="button"
                                class="accordion-button"
                                data-bs-toggle="collapse"
                                data-bs-target="#list-{{$key}}"
                                aria-expanded="false"
                                aria-controls="accordionOne"
                            >
                                {{$document->name}}
                            </button>
                        </h2>

                        <div
                            id="list-{{$key}}"
                            class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <object data="{{Storage::url($document->file)}}" width="100%" style="height: 100%; min-height: 600px;">
                                    <p>Faylni ko'rsatib bo'ldmadi.  <a href="{{Storage::url($document->file)}}" download> Yuklab olish</a> instead.</p>
                                </object>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
