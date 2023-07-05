@extends('layouts.base')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    @if(!empty($success))
        <div class="alert alert-success">{{ $success }}</div>
    @endif
  </div>
@endsection
