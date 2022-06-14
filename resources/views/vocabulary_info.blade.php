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
  @foreach ($vocabulary as $obj)
  <div class="column">
    <span class="text word">{{$obj->word}}</span>
    @foreach($obj->definitions as $dfn)
      <span class="text definition">-{{$dfn->definition}}</span>
    @endforeach
  </div>
  @endforeach

</div>

@endsection