@extends('layouts.base')
@section('content')
<div class="container-fluid flex-grow-1 container-p-y">
    @if (Session::has('success'))
        <div class="alert alert-info">{{ Session::get('success') }}</div>
    @endif
  </div>
@endsection
