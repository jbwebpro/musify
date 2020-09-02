@extends('layouts.app')
@section('styles')
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
@endsection
@section('navbar')
    @include('admin.components.navbar')
@endsection
@section('content')
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        @include('admin.components.side_nav')
    </div>
    <div id="layoutSidenav_content">
        @include('admin.main')
    </div>
  </div>

@endsection
@section('footer')
  @include('admin.components.footer')
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="assets/demo/datatables-demo.js"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
@endsection