@extends('layouts.app')
@section('subtitle','Welcome to musify')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('navbar')
  @include('layouts.components.guest_navbar')
@endsection
@section('content')
<div class="main-content text-white mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header d-flex justify-content-between align-items-center pt-4">
          <h1 class="m-0">Artist' Pick</h1>
          <div>
              <input type="text" name="" id="" class="form-control" placeholder="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection