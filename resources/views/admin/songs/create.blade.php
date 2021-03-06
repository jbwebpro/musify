@extends('layouts.app')
@section('styles')
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
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
      <main>
        <div class="container-fluid">
          <h1 class="mt-4">Editing Song: {{$song->title}}</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{route('songs.index')}}">Songs</a></li>
            <li class="breadcrumb-item active">Editing Song: {{$song->title}}</li>
          </ol>
          <div class="row">
            <div class="col-md-12">
              <form action="{{route('songs.store')}}" method="post">
                @csrf
                @include('admin.songs.form')
                <button type="submit" class="btn btn-primary btn-block">SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

@endsection
@section('footer')
  @include('admin.components.footer')
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
  <script>
    $('#artist-select').select2();
  </script>
@endsection