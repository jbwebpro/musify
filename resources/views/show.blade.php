@extends('layouts.app')
@section('subtitle','Welcome to musify')
@section('styles')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('navbar')
  @include('layouts.components.guest_navbar')
@endsection
@section('content')
  <h1>Show Page</h1>
@endsection