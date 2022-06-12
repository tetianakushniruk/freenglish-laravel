@extends('base')

@php
$topic = ucfirst(Request::segment(2));
@endphp

@section('title')
{{$topic}}
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/vocabulary_info.css') }}" />
@endsection

@section('content')

<script src="https://kit.fontawesome.com/e8f6a9b975.js" crossorigin="anonymous"></script>
@php
$pageName = 'vocabulary'
@endphp

<img src="{{ asset('img/ellipses.svg') }}" class="ellipses" />
<div class="title">
  <span class="text">
    {{$topic}}
  </span>
</div>

@include('search')

<div class="word-list">

  @foreach ($vocabulary as $key => $value)
  <div class="column">
    <span class="text word">{{$key}}</span>
    <span class="text definition">{{$value}}</span>
  </div>
  @endforeach

</div>

@endsection