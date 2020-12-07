@extends('layout')
@section('title','メニューを決める')
@section('content')

@if (session('err_msg'))
  <p class="action-complete">
    {{ session('err_msg') }}
  </p>
@endif
<div class="top-all">
  <div class="top-wrap">
    <h1 class="top-title">献立を自動作成します</h1>
    <button class="decide" type="button" name="button" onclick="location.href='{{ route('random') }}'">決める</button>
  </div>
</div>

@endsection
