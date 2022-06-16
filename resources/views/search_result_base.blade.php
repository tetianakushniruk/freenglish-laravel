@extends('base')

@php
$topic = ucfirst(Request::segment(2));
@endphp

@section('title')
Search
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/search_result.css') }}" />
@endsection

@section('content')

@php
$pageName = 'vocabulary'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">
    Search
  </span>
</div>

@include('search')

<div class="result">
  @yield('result')
</div>

@endsection