@extends('layouts.app')
@section('subtitle','Welcome to musify')
@section('styles')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('navbar')
  @include('layouts.components.guest_navbar')
@endsection
@section('content')
<div class="main-content text-white pt-5">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card flat bg-dark">
          <div class="card-body">
            <div class="song-title d-flex justify-content-start flex-column align-items-flex-start pt-4">
              <h1 class="m-0 text-white">{{$song->title}}</h1>
              <div class="ratings-artist">
                <span class="ratings">
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                  <i class="fa fa-star text-warning"></i>
                </span>
                {{" | "}}
                <small>Artist: {{$song->artist_name}}</small>
              </div>
            </div>
            <div class="song-lyrics">
              {{$song->lyrics}}
            </div>
            
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