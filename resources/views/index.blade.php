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
                <input type="text" name="" id="" class="form-control unflat bg-dark text-white" placeholder="Song / Artist">
            </div>
          </div>
          <div class="row song-lyrics-list">
            @foreach($songs as $song)
            <div class="col-md-3 mt-4">
              <a href="{{route('songs.details',$song->id)}}" class="text-white">
                <div class="card song bg-dark">
                  <div class="card-body d-flex justify-content-start flex-column">
                    <h5 class="card-title"><b>{{$song->title}}</b></h5>
                    <p class="card-text">{{$song->excerpt(100)}}</p>
                    <div class="create-at mt-auto d-flex justify-content-between">
                      <small>
                        {{$song->created_date}}
                      </small>
                      <small>
                        {{$song->artist}}
                      </small>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            @endforeach
            <div class="col-md-12 mt-3">
              <div class="d-flex justify-content-center align-items-center">
                {{$songs->links()}}
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