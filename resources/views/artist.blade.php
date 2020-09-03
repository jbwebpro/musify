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
<div id="artist-songs" class="main-content text-white pt-5">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="card flat bg-darker">
          <div class="card-body d-flex justify-content-start flex-column">
            <div class="card-title d-flex justify-content-start flex-column align-items-flex-start pt-4">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="m-0 text-white">{{$artist->name}}</h1>
                </div>
              </div>
                <div class="row">
                @foreach($artist->songs as $artist_song)
                  <div class="col-md-3">
                    <div class="card artist-song bg-dark flat mt-4">
                      <span class="position-absolute left-0 right-0 py-1 px-2">{{$artist_song->id}}</span>
                      <div class="card-body d-flex justify-content-start flex-column mt-2">
                        <h4 class="card-title"><a href="{{route('songs.details',$artist_song->id)}}" class="text-white">{{$artist_song->title}}</a></h4>
                        <p class="card-text">
                          {{$artist_song->excerpt(100)}}
                        </p>
                        <div class="ml-auto mt-auto">
                          <a href="{{route('songs.details',$artist_song->id)}}" class="btn btn-darker btn-sm flat">Read more</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
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